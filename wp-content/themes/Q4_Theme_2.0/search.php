<?php get_header(); ?>

<div class="outer-wrapper search-results-wrapper">
	<div class="container">
		<h1><?php echo sprintf( __( 'Search Results for: ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
		<?php get_template_part('results-loop'); ?>
	</div>
</div>

<?php get_footer(); ?>
