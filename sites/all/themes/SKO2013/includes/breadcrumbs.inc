// Fancy breadcrumbs
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
