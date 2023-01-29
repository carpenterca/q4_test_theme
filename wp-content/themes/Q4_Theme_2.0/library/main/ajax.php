<?php
add_action('wp_head', 'q4development_ajaxurl');

function q4development_ajaxurl() {
   echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}
