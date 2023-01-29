<?php
// Remove Admin bar on frontend
function remove_admin_bar(){
    return false;
}
add_filter('show_admin_bar', 'remove_admin_bar');
