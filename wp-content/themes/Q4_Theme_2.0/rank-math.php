<?php


/*
* This is a resource file to edit functionality of the rank math plugin.
* You can find moreinformation about this here: https://rankmath.com/kb/filters-hooks-api-developer/
*/

/**
 * Filter to remove the plugin credit notice added to the source.
 *
 */
add_filter( 'rank_math/frontend/remove_credit_notice', '__return_true' );

/**
 * Filter to remove sitemap credit.
 *
 * @param boolean Defaults to false.
 */
add_filter('rank_math/sitemap/remove_credit', '__return_true');


/**
 * Add <meta name="keywords" content="focus keywords">.
 */
add_filter( 'rank_math/frontend/show_keywords', '__return_true');


/**
 * Allow changing the meta keywords from the default Focus Keywords.
 *
 * @param string $keywords Keywords.
 */
add_filter( 'rank_math/frontend/keywords', function( $keywords ) {
 return $keywords;
});

/**
 * Filter: Prevent Rank Math from changing admin_footer_text.
 */
add_action( 'rank_math/whitelabel', '__return_true');

/**
 * Filter to remove `rank-math-link` class from the frontend content links
 */
add_filter( 'rank_math/link/remove_class', '__return_true' );
