<?php
$taxonomy = 'news_archive_options';
$term_id = '10';
$taxonomy_and_id = $taxonomy . '_' . $term_id;
$share_options = get_field('archive_page_share_options', $taxonomy_and_id);
$image_directory = get_template_directory_uri();
$link = isset($args['link']) ? $args['link'] : '';
$excerpt = isset($args['excerpt']) ? rawurlencode($args['excerpt']) : '';
$facebook_share = "";
$linkedin_share = "";
$twitter_share = "";
$email_share = "";
if ($share_options) {
 foreach ($share_options as $share_option) {
   switch ($share_option) {
     case 'facebook':
       $facebook_share = '<a href="https://www.facebook.com/sharer/sharer.php?u='. $link .'" class="facebook" title="Share on Facebook" target="_blank">
                           <img src="'.$image_directory.'/icons/social_icon_fb_navy.png" alt="Facebook Share Icon">
                          </a>';
       break;
     case 'linkedin':
       $linkedin_share = '<a href="https://www.linkedin.com/shareArticle?mini=true&url='. $link .'&title='. $title .'?>&summary='. $excerpt .'?>" class="linkedin" title="Share on LinkedIn" alt="Share on LinkedIn" target="_blank">
                           <img src="'.$image_directory.'/icons/social_icon_linkedin_navy.png" alt="LinkedIn Share Icon">
                         </a>';
       break;
     case 'twitter':
       $twitter_share = '<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" target="_blank">
                           <img src="'.$image_directory.'/icons/social_icon_tw_black.png" alt="Twitter Share Icon">
                         </a>';
       break;
     case 'email':
       $email_share = '<a href="mailto:?subject=I wanted to share this article with you.&amp;body=Check out this article: '. $link . '." title="Share by Email">
                         <img src="'.$image_directory.'/icons/mail-gray.png" alt="Email Share Icon">
                       </a>';
       break;
   }
 }
 ?>

 <div class="news-share">
   <p class="news-share-header">Share:</p>
   <div class="share-links">
     <?php echo $facebook_share; ?>
     <?php echo $linkedin_share; ?>
     <?php echo $twitter_share; ?>
     <?php echo $email_share; ?>
   </div>
 </div>
<?php } ?>
