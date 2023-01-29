<?php //Theme Settings > General > Editing Options
if (get_field('enable_frontend_editing_button', 'options') == 1)
  {
  if ( is_user_logged_in() )
    {
    if (current_user_can('administrator') || current_user_can('editor'))
      {
      $pageid = get_the_id();
      ?>
      <div class="admin-menu">
        <!-- Page Editor -->
        <a href="<?php echo get_home_url().'/wp-admin/post.php?post='.$pageid.'&action=edit'; ?>" class="edit-btn" target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/icons/icon_edit.png" />
          Admins Only Edit
        </a>
      </div><?php
      }
    }
  }//IF enable_frontend_editing_button ?>
