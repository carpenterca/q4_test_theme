<!-- Set in WP backend under Company Information  -->
<div class="social-links-wrapper">
  <?php
  $img_dir        = get_template_directory_uri(). "/icons/";
  $facebook_dir   = $img_dir . "social_icon_fb_black.png";
  $instagram_dir  = $img_dir . "social_icon_ig_black.png";
  $linkedin_dir   = $img_dir . "social_icon_li_black.png";
  $youtube_dir    = $img_dir . "social_icon_yt_black.png";
  $twitter_dir    = $img_dir . "social_icon_tw_black.png";
  $facebook_link  = get_field('company_information_facebook_link', 'option');
  $instagram_link = get_field('company_information_instagram', 'option');
  $linkedin_link  = get_field('company_information_linkedin', 'option');
  $youtube_link   = get_field('company_information_youtube', 'option');
  $twitter_link   = get_field('company_information_twitter', 'option');

  if ($facebook_link  != ""){?><a target="_blank" href="<?php echo $facebook_link; ?>" class="social-links facebook"><img src="<?php echo $facebook_dir ?>" alt="Facebook icon"></a><?php }
  if ($instagram_link != ""){?><a target="_blank" href="<?php echo $instagram_link; ?>" class="social-links instagram"><img src="<?php echo $instagram_dir ?>" alt="Instagram icon"></a><?php }
  if ($linkedin_link  != ""){?><a target="_blank" href="<?php echo $linkedin_link; ?>" class="social-links linkedin"><img src="<?php echo $linkedin_dir ?>" alt="Linkedin icon"></a><?php }
  if ($youtube_link   != ""){?><a target="_blank" href="<?php echo $youtube_link; ?>" class="social-links youtube"><img src="<?php echo $youtube_dir ?>" alt="Youtube icon"></a><?php }
  if ($twitter_link   != ""){?><a target="_blank" href="<?php echo $twitter_link; ?>" class="social-links twitter"><img src="<?php echo $twitter_dir ?>" alt="Twitter icon"></a><?php }?>
</div>
