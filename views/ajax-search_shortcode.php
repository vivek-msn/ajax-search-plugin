<?php

function als_shortcode() {
    ob_start();
    ?>
    <form id="live-search-form" action="" method="get" style="position: relative;" autocomplete="off">
        <input type="text" id="search-input" name="search_field" placeholder="Search products..." autocomplete="off">
        <input type="hidden" name="post_type" value="product">
        <div id="search-results"></div>
    </form>
    <?php
    return ob_get_clean();
}
