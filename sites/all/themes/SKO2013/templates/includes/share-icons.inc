<?
  $path = isset($_GET['q']) ? $_GET['q'] : '<front>';
  $link = url($path, array('absolute' => TRUE));
?>
<footer>
    <ul class="share-icons">
        <li class="share-icon share-icon-facebook">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php print $link; ?>" title="">Facebook</a>
        </li>
        <li class="share-icon share-icon-pinterest">
            <a href="http://pinterest.com/pin/create/button/?url=<?php print $link; ?>" title="">Pinterest</a>
        </li>
        <li class="share-icon share-icon-twitter">
            <a href="https://twitter.com/share?url=<?php print $link; ?>" title="" onclick="window.open(this.href);return false;">Twitter</a>
        </li>
        <li class="share-icon share-icon-google-plus">
            <a href="https://plus.google.com/share?url=<?php print $link; ?>" title="">Google+</a>
        </li>
    </ul>
</footer>
