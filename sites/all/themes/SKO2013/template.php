<?php

// Breadcrumbs
function SKO2013_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];


    if (!empty($breadcrumb)) {
        $title = drupal_get_title();

        if (!empty($title)) {
            $breadcrumb[] = $title;
        }

        return implode(' » ', $breadcrumb);
    }
}

// Fancy webform on bottom
function SKO2013_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == "webform_client_form_1") { // Ex: "webform_client_form_33"
        foreach ($form["submitted"] as $key => $value) {
            if (in_array($value["#type"], array("textfield", "webform_email", "textarea"))) {
                $form["submitted"][$key]['#attributes']["placeholder"] = t("Je ") . strtolower(t($value["#title"]));
                $form["submitted"][$key]['#title_display'] = 'invisible';
            }
        }
    }
}

// Removes the basic Drupal CSS
function SKO2013_css_alter(&$css) {
    // Remove defaults.css file.
    unset($css[drupal_get_path('module', 'system') . '/defaults.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
    unset($css[drupal_get_path('module', 'user') . '/user.css']);
}

function SKO2013_pager($variables) {
    $tags = $variables['tags'];
    $element = $variables['element'];
    $parameters = $variables['parameters'];
    $quantity = $variables['quantity'];
    global $pager_page_array, $pager_total;

    // Calculate various markers within this pager piece:
    // Middle is used to "center" pages around the current page.
    $pager_middle = ceil($quantity / 2);
    // current is the page we are currently paged to
    $pager_current = $pager_page_array[$element] + 1;
    // first is the first page listed by this pager piece (re quantity)
    $pager_first = $pager_current - $pager_middle + 1;
    // last is the last page listed by this pager piece (re quantity)
    $pager_last = $pager_current + $quantity - $pager_middle;
    // max is the maximum page number
    $pager_max = $pager_total[$element];
    // End of marker calculations.
    // Prepare for generation loop.
    $i = $pager_first;
    if ($pager_last > $pager_max) {
        // Adjust "center" if at end of query.
        $i = $i + ($pager_max - $pager_last);
        $pager_last = $pager_max;
    }
    if ($i <= 0) {
        // Adjust "center" if at start of query.
        $pager_last = $pager_last + (1 - $i);
        $i = 1;
    }
    // End of generation loop preparation.

    $li_previous = theme('pager_previous', array('text' => (isset($tags[1]) ? $tags[1] : t('‹ previous')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
    $li_next = theme('pager_next', array('text' => (isset($tags[3]) ? $tags[3] : t('next ›')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));

    if ($pager_total[$element] > 1) {
        if ($li_previous) {
            $items[] = array(
                'class' => array('pager-previous', 'pagination-item', 'pagination-previous'),
                'data' => $li_previous,
            );
        }

        // When there is more than one page, create the pager list.
        if ($i != $pager_max) {
            if ($i > 1) {
                $items[] = array(
                    'class' => array('pager-ellipsis'),
                    'data' => '…',
                );
            }
            // Now generate the actual pager piece.
            for (; $i <= $pager_last && $i <= $pager_max; $i++) {
                if ($i < $pager_current) {
                    $items[] = array(
                        'class' => array('pager-item', 'pagination-item'),
                        'data' => theme('pager_previous', array('text' => $i, 'element' => $element, 'interval' => ($pager_current - $i), 'parameters' => $parameters)),
                    );
                }
                if ($i == $pager_current) {
                    $items[] = array(
                        'class' => array('pager-current', 'pagination-item', 'pagination-item-active'),
                        'data' => '<a href="#">' . $i . '</a>',
                    );
                }
                if ($i > $pager_current) {
                    $items[] = array(
                        'class' => array('pager-item', 'pagination-item'),
                        'data' => theme('pager_next', array('text' => $i, 'element' => $element, 'interval' => ($i - $pager_current), 'parameters' => $parameters)),
                    );
                }
            }
            if ($i < $pager_max) {
                $items[] = array(
                    'class' => array('pager-ellipsis', 'pagination-item'),
                    'data' => '…',
                );
            }
        }
        // End generation.
        if ($li_next) {
            $items[] = array(
                'class' => array('pager-next', 'pagination-item', 'pagination-next'),
                'data' => $li_next,
            );
        }
        return '<h2 class="element-invisible">' . t('Pages') . '</h2>' . theme('item_list', array(
                    'items' => $items,
                    'attributes' => array('class' => array('pager')),
        ));
    }
}

function SKO2013_pager_previous($variables) {
    $text = $variables['text'];
    $element = $variables['element'];
    $interval = $variables['interval'];
    $parameters = $variables['parameters'];
    global $pager_page_array;
    $output = '';

    $page_new = pager_load_array($pager_page_array[$element] - $interval, $element, $pager_page_array);

    // If the previous page is the first page, mark the link as such.
    if ($page_new[$element] == 0) {
        $output = theme('pager_first', array('text' => $text, 'element' => $element, 'parameters' => $parameters));
    }
    // The previous page is not the first page.
    else {
        $output = theme('pager_link', array('text' => $text, 'page_new' => $page_new, 'element' => $element, 'parameters' => $parameters));
    }

    return $output;
}

function SKO2013_pager_next($variables) {
    $text = $variables['text'];
    $element = $variables['element'];
    $interval = $variables['interval'];
    $parameters = $variables['parameters'];
    global $pager_page_array, $pager_total;
    $output = '';

    $page_new = pager_load_array($pager_page_array[$element] + $interval, $element, $pager_page_array);
    // If the next page is the last page, mark the link as such.
    if ($page_new[$element] == ($pager_total[$element] - 1)) {
        $output = theme('pager_last', array('text' => $text, 'element' => $element, 'parameters' => $parameters));
    }
    // The next page is not the last page.
    else {
        $output = theme('pager_link', array('text' => $text, 'page_new' => $page_new, 'element' => $element, 'parameters' => $parameters));
    }

    return $output;
}