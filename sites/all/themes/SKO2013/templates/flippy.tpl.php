<?php

/**
 * @file
 * flippy.tpl.php
 *
 * Theme implementation to display a simple pager.
 *
 * Default variables:
 * - $links: An array of links to render, keyed by their class. The array
 *   contains 'title' and 'href'.
 * 
 * Other variables:
 * - $current['nid']: The Node ID of the current node.
 * - $first['nid']: The Node ID of the first node.
 * - $prev['nid']: The Node ID of the previous node.
 * - $next['nid']: The Node ID of the next node.
 * - $last['nid']: The Node ID of the last node.
 *
 * - $current['title']: The Node title of the current node.
 * - $first['title']: The Node title of the first node.
 * - $prev['title']: The Node title of the previous node.
 * - $next['title']: The Node title of the next node.
 * - $last['title']: The Node title of the last node.
 * 
 * - $show_empty: TRUE if links without hrefs should be rendered.
 *
 * @see template_preprocess_flippy()
 */
?>
<ul class="pager">
    <li class="pagination-item pagination-previous <?php print (empty($prev['nid'])) ? "pagination-item-disabled" : "";?>">
        <?php
            if(empty($prev['nid'])) {
                print "<a>Vorige</a>"; 
            } else {
                print l('Vorige', 'node/' . $prev['nid'], array('fragment' => 'scrollTo')); 
            }
        ?>
    </li>
    <li class="pagination-item pagination-item-overview">
        <?php
            print l('<img src="../' . path_to_theme() . '/assets/images/news-overview-icon.png" alt="Overzicht" />', '<front>', array('html' => TRUE, 'fragment' => 'scrollTo'));
        ?>
    </li>
    <li class="pagination-item pagination-next <?php print (empty($next['nid'])) ? "pagination-item-disabled" : "";?>">
        <?php
            if(empty($next['nid'])) {
                print "<a>Volgende</a>"; 
            } else {
                print l('Volgende', 'node/' . $next['nid'], array('fragment' => 'scrollTo')); 
            }
        ?>
    </li>
</ul>

