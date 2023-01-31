<?php
    // Our current active categories originally from the url parameter
    $activeCategories = $args['activeCategories'];

    $categories = get_terms([
        'taxonomy' => array('news_categories', 'events_categories'),
        'hide_empty' => false,
    ]);

    // We want to maintain the checked status during any page loads
    // so we use a tertiary check on the current category and the array of activeCategories 
    foreach ($categories as $category) {
        echo '<div class="category"><input type="checkbox" class="filter-option" value="'.$category->slug.'"'. (in_array($category->slug, $activeCategories) ? 'checked' : '') .'><label>'.$category->name.'</label></div>';
    }
?>

<button type="button" role="button" onclick="filterSubmit();">Filter Posts</button>

<script>
    function filterSubmit() {
        var checkedCategories = [];
        var checkboxes = document.querySelectorAll('.filter-option');
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                checkedCategories.push(checkbox.value);
            }
        });
        var url = new URL(window.location.href);
        var params = new URLSearchParams(url.search.slice(1));
        params.set('categories', checkedCategories.join(','));
        window.location.href = url.pathname + '?' + params.toString();
    }
</script>
