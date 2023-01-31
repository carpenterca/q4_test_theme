<?php
//  Settings for Archive page are set in News Menu -> Archvie Page Options
//  Default Image / Default Background Color will be added to any post that doesn't have image or color selected in Single Post.
get_header(); 


// News Archive Taxonomy Name and Term ID (Use $taxonomy_and_id to get data from Archive Page Options)
// ***ADJUST ID TO WHATEVER THE PAGE ID IS OF THE EDIT ARCHIVE PAGE OPTION (Blog -> Archive Page Options -> Archive Page Options ID)***
$taxonomy = 'news_archive_options';
$term_id = '10'; 
$taxonomy_and_id = $taxonomy . '_' . $term_id;

$bg_option = get_field('archive_page_hero_background', $taxonomy_and_id);
$hero_image = get_field('archive_page_hero_image', $taxonomy_and_id);
$background_color = get_field('archive_page_hero_background_color', $taxonomy_and_id);
$default_background_color = get_field('default_single_background_color', $taxonomy_and_id); // default_background_color and/or default_preview_image goes to every post without an image or bg color in single post

$default_preview_image = get_field('default_preview_image', $taxonomy_and_id);
$card_elements = get_field('archive_page_card_elements', $taxonomy_and_id); // $card_elements grabs all selected options from News Menu -> Archive Page Options. Whatever is selected will be echoed out in .news-contents


// First let's check if the order was changed by the user
$active_order = isset($_GET['order']) ? $_GET['order'] : 'DESC';

// Query for all News and Events Posts
$args = array(
    'post_type' => array('news', 'events'),
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order'   => $active_order
);

// Create an array of all the url categories search parameters
// This will later be sent to the news-filter.php template part
$active_category_filters = isset($_GET['categories']) ? $_GET['categories'] : '';
$active_category_filters = array_filter( explode(',', $active_category_filters) );

// Select only the posts that have categories if the search params are not empty
if ( !empty($active_category_filters) ) {
    $args['tax_query'] = array(
        'relation' => 'OR',
        array(
            'taxonomy' => 'news_categories',
            'field' => 'slug',
            'terms' => $active_category_filters,
        ),
        array(
            'taxonomy' => 'events_categories',
            'field' => 'slug',
            'terms' => $active_category_filters,
        ),
    );
}

$news_posts = get_posts($args);


//[start] News Archive Section Wrapper
echo '<div id="news-archive">';


    // [start] News Hero Section
    // option for image or bg color
    echo '<div class="news-hero-section" ';
    if($bg_option == 'color'){
        echo 'style="background-color: '.$background_color.';" ';
    }
    echo '>';
    
    // add background image if set
    if($bg_option == 'image'){
        echo '<img src="'.$hero_image['url'].'" alt="'.$hero_image['alt'].'">';
        }

    // hero heading
    echo '
        <div class="container">
            <h1>News Archive</h1>
            <h2>Lorem ipsum dolor sit amet. </h2>
        </div>
    ';

    echo '</div>';
    // [end] News Hero Section



    // news filter
    echo '<div class="news-filter">';
    echo '<div class="container">';

    // Send the search params to the checkboxes to include them as the currently active search results
    $template_args = array(
        'activeCategories' => $active_category_filters,
    );
    get_template_part('inc/news-filter', null, $template_args);

    echo '</div>';
    echo '</div>';


    // news filter
    echo '<div class="news-order">';
    echo '<div class="container">';

    echo '<button id="order-btn" type="button" role="button" onclick="reversePosts();" current-order="'. $active_order .'">Reverse Posts Order</button>';

    ?>
    <script>
        function reversePosts() {
            // Let's find the current button value
            var button = document.getElementById('order-btn');
            var orderValue = button.getAttribute('current-order');

            // Now let's reverse it
            switch (orderValue) {
                case "DESC":
                    orderValue = "ASC";
                    break;
                case "ASC":
                    orderValue = "DESC";
                    break;
                default:
                    break;
            }

            // Now we can add that parameter to the URL and reload
            var url = new URL(window.location.href);
            var params = new URLSearchParams(url.search.slice(1));
            params.set('order', orderValue);
            window.location.href = url.pathname + '?' + params.toString();
        }
    </script>
    <?php

    echo '</div>';
    echo '</div>';



    //[start] news results wrapper and container
    echo '<div class="news-results">';
    echo '<div class="container">';


    // loop through all posts and print them
    foreach ($news_posts as $news) {

        // set all variables
        $title = get_the_title($news->ID);
        $link = get_the_permalink($news->ID);
        $date = get_the_time('n/j/y', $news->ID);
        $categories = get_the_terms($news->ID, 'news_categories');

        $excerpt = get_field('news_text', $news->ID);
        $excerpt = (strlen($excerpt) > 150) ? substr($excerpt,0,150).'...' : $excerpt;
        $excerpt = strip_tags($excerpt);
        
        $background_type = get_field('archive_preview_background', $news->ID);
        $preview_image = get_field('news_preview_image', $news->ID);
        $preview_background_color = get_field('preview_background_color', $news->ID);
        

        // set background class
        $background_class = 'image-background';

        //set background color
        $background_color = $default_background_color;
        if($preview_background_color){
            $background_color = $preview_background_color;
        }

        // set preview image
        $preview_image_url = $default_preview_image['url'];
        $preview_image_alt = $default_preview_image['alt'];
        // Grab Preview Image from Single Post if it exists
        if(!empty($preview_image)){
            $preview_image_url = $preview_image['url'];
            $preview_image_alt = $preview_image['alt'];
            $background_class .= ' default-image-and-bg-color-applied';
        }



        // Start News Preview Card 
        echo '<div class="news-card">';
        echo '<a href="'.$link.'">';

            // print out the preview image
            echo '<div class="'.$background_class.'" style="background-color:'.$background_color.';">';
            echo '<img src="'.$preview_image_url.'" alt="'.$preview_image_alt.'">';
            echo '</div>';

            // [start] card content
            echo '<div class="news-contents">';
        
                // print out the card elements if they are selected in the WP admin area
                if(in_array('title', $card_elements)){
                    echo '<h3>'. $title .'</h3>';
                }
                if($categories){
                    echo '<p style="color:gray; font-size: .75em;">';
                    foreach($categories as $term){
                        echo '-'.$term->name.' ';
                    }
                    echo '</p>';
                }
                if(in_array('excerpt', $card_elements)){
                    echo '<p>'. $excerpt .'</p>';
                }
                if(in_array('date', $card_elements)){
                    echo '<p>'. $date .'</p>';
                }
                echo '</a>'; // [end] News Preview Card link wrapper
                if(in_array('share', $card_elements)){
                    get_template_part('inc/social-share-links', null, ["link" => $link, "excerpt" => $excerpt]); // Set to go below title,excerpt,date through css.
                }
                
            echo '</div>'; // [end] card content
        echo '</div>'; // [end] News Preview Card                  

    } //[end] for each news post 


    echo '</div>'; // [end] news results container
    echo '</div>'; // [end] news results wrapper
echo '</div>'; // [end] News Archive Section Wrapper


get_footer(); 
?>
