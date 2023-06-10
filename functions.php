<?php


function viewContent() {
 
    // Check if this is a post.
    if (is_single()) {
        echo 'This is a post <br>';
    }
 
    // Check if this is a page.
    if (is_page()) {
        echo 'This is a page <br>';
    }
 
    // Check if this is the home page.
    if (is_front_page()) {
        echo 'This is the home page <br>';
    }
 
    // Check if this is a feed.
    if (is_feed()) {
        echo 'This is a feed <br>';
    }
 
    // Check for categories.
    $categories = get_the_category();
    if (!empty($categories)) {
        foreach($categories as $category) {
            echo $category->name . "<br>";
            echo category_description($category);
        }
    }
 
}
add_action('wp_head', 'viewContent');
