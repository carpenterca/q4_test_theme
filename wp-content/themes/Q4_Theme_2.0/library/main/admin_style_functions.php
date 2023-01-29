<?php
//╟────[Add custom logo to dashboard]──────────
 function admin_logo()
  {
    echo '<h2 style="display:none;">replace this logo by editing: "q4-blank-wp-install/wp-content/themes/Q4_Default_Theme/library/main/admin_style_functions.php"</h2>';
    ?><img style="width:64px; margin:15px 0 -5px; border-radius: 3px;" src="<?php echo get_template_directory_uri() ?>/icons/q4-logo.png" alt=""><?php
  }
    add_action( 'admin_notices', 'admin_logo' );

//╟────[Change adminbar background color local/dev/live]───────────────────
function add_admin_location_indicator_bar()
  {
  $strURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  //   $strURL = get_template_directory_uri();
  echo "<!-- SITE1234" . $strURL . "-->"; ?>
  <style type="text/css" id="admin-style-fiunctions-css">
  #adminmenuwrap{z-index:95;}

  <?php if (strpos($strURL, "ocalhost") !== false){ ?>

  /* wp-admin */
    #wpadminbar{
      box-sizing: border-box !important;
      border-bottom: 32px solid #3C87A0 !important;
      z-index:99;
    }
    #wpadminbar:after{
      content:'\002\002 ● \002\002';
      font-weight: 700;
      color: white;
      top: 0;
      left: 370px;
    font-family: roboto;
    -webkit-animation: neon1 .5s ease-in-out infinite alternate;
    -moz-animation: neon1 .5s ease-in-out infinite alternate;
    animation: neon1 .5s ease-in-out infinite alternate;
      }
    @keyframes neon1 {/* https://css-tricks.com/getting-deep-into-shadows/ */
      from {
        text-shadow: 0 0 10px #efefef, 0 0 20px #efefef, 0 0 40px #efefef, 0 0 50px #efefef, 0 0 60px #efefef;
        }
      to {
        text-shadow: 0 0 5px #efefef, 0 0 10px #efefef, 0 0 15px #efefef, 0 0 20px #efefef, 0 0 25px #efefef;
        }
      }
 <?php } elseif (strpos($strURL, "dev") !== false || strpos($strURL, "q4server") !== false) { ?>

   /* wp-admin */
     #wpadminbar{
       box-sizing: border-box !important;
       border-bottom: 32px solid #F18116 !important;
       z-index:99;
     }
     #wpadminbar:after{
       content:'\002\002 ● \002\002';
       font-weight: 700;
       color: white;
       top: 0;
       left: 370px;
     font-family: roboto;
     -webkit-animation: neon1 .75s ease-in-out infinite alternate;
     -moz-animation: neon1 .75s ease-in-out infinite alternate;
     animation: neon1 .75s ease-in-out infinite alternate;
       }
     @keyframes neon1 {/* https://css-tricks.com/getting-deep-into-shadows/ */
       from {
         text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 40px #efefef, 0 0 50px #efefef, 0 0 60px #efefef;
         }
       to {
         text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #efefef, 0 0 20px #efefef, 0 0 25px #efefef;
         }
       }
  <?php } else { ?>

    /* wp-admin-live */
      #wpadminbar
      {
      box-sizing: border-box !important;
      border-bottom: 32px solid #D81E4A !important;
      z-index:99;
      }
    #wpadminbar:after{
      content:'\002\002 ● \002\002 LIVE';
      font-weight: 700;
      color: white;
      top: 0;
      left: 370px;
      font-family: roboto;
      -webkit-animation: neon1 .5s ease-in-out infinite alternate;
      -moz-animation: neon1 .5s ease-in-out infinite alternate;
      animation: neon1 .5s ease-in-out infinite alternate;
    }
    @keyframes neon1 { /* https://css-tricks.com/getting-deep-into-shadows/ */
      from {
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #efefef, 0 0 50px #efefef, 0 0 60px #efefef;
        }
      to {
        text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #efefef, 0 0 20px #efefef, 0 0 25px #efefef;
        }
      }
  <?php } ?>

  #major-publishing-actions.sticky-time {
    position:fixed;
    top:32px;
    right: 2px;
    z-index:100;
  }
  #major-publishing-actions.sticky-time #publishing-action .button.button-large{
    padding: 0 50px !important;
  }
  #major-publishing-actions.sticky-time #delete-action{
    display: none;
  }
  </style>
 <?php }//add_location_indicator_bar END ?>
<?php add_action('admin_enqueue_scripts', 'add_admin_location_indicator_bar');
//╠═════════════════════════════════════════════


function acf_mod_styles() {
    ?>
      <style type="text/css">
      a[data-layout^="----"]{
        pointer-events: none !important;
      }
      .page-content-menu{
        width: calc(100% + 5px);
        display: block;
        text-align: left;
        color: #ffffff !important;
        font-weight: 500;
        background: #1c62b5 !important;
        pointer-events: none;
        padding: 5px;
        padding-left: 10px;
        margin-left: -10px;
      }
      .acf-fc-layout-order{
        background-color: #acf !important;
      }
      .acf-repeater.-row>table>tbody>tr+tr>td,
      .acf-repeater.-block>table>tbody>tr+tr>td {
        border-top-color: #3291df;
        border-top-width: 3px !important;
        box-sizing: border-box;
      }

      /*  Color Helper - Site Colors box */
      .color-helper-wrapper {
        display: flex;
        flex-wrap: wrap;
      }
      .color-helper-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 10px;
        padding: 5px;
        margin-top: 3px;
        min-width: 90px;
        border: 1px solid gray;
      }
      .color-helper-item span {
        display:inline-block;
        width: 25px;
        height:25px;
        margin-right:5px;
      }
      .color-helper-item p {
        margin: 1px 0;
      }

      /* Archive Page Options (Under News Menu -> Archive Page Options) */
      .taxonomy-news_archive_options .form-table td p {
         margin: 1.4em 0 0;
      }
      .taxonomy-news_archive_options .form-table > tbody > .acf-field:nth-of-type(2n) {
        border-bottom: 2px solid #d8d8d8;
      }
      .taxonomy-news_archive_options .form-table > tbody > .acf-field > .acf-input {
        padding: 0 10px 15px;
      }
      </style>
    <?php
  }
  add_action('acf/input/admin_head', 'acf_mod_styles');

  //label for the Flexible content colmn sections
  add_filter('acf/fields/flexible_content/layout_title', function ($title, $field, $layout, $i) {
  $title_field = apply_filters('acf_flexible_content_title_field', 'column_section_label', $field, $layout);
  $title_value = get_sub_field('section_label');

  return $title_value ? "<strong>$title_value</strong> - <small>$title</small>" : "<small>$title</small>";
  }, 10, 4);
