<?php get_header(); ?>
<div class="four-oh-four-page">
  <div class="container">

  <?php
    // get the company logo for the 404 page
    $image_404 = get_field('company_information_main_nav_logo', 'option');
    // if there is no company logo set, use a standard 404 image
    if(!$image_404){
      $image_404 = get_stylesheet_directory_uri().'/icons/q4-logo.png';
    }
    // show the image as long as there is one
    if($image_404){
      echo '<img src="'.$image_404.'" alt="404 Error Image" id="404-error-image">';
    }
  ?>

    <h1>404</h1>
    <h2>The page you were looking for doesn't exist<h2>
    <h2><a href="<?php echo(get_home_url());?>">Return home by clicking here</a></h2>
  </div>
</div>


<script>
  // once the window is loaded, everyting should have their heights set
  $(window).on('load', function() {

    var element_heights = 0; // variable to store total height of all vertical elements on the page

    // array to add whatever elements might be on the page for a project
    var height_array = [
      $('#utility').height(), //bar above header navigation
      $('header').height(), // navigation bar
      $('footer').height() //footer
    ];

    //for each of the elements in the height array, if it has a height, add it to the total height of on page elements
    for(var x=0; x < height_array.length; x++){
      element_heights += height_array[x];
    }

  });//[end] window on load function
</script>
<?php get_footer(); ?>
