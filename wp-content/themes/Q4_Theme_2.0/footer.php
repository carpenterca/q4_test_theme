<?php
$logo            = get_field('company_information_footer_logo','option');
$local_phone     = get_field('company_information_local_phone', 'option');
$corporate_phone = get_field('company_information_corporate_phone', 'option');
$fax             = get_field('company_information_fax', 'option');
$email           = get_field('company_information_email', 'option');
$street          = get_field('company_information_street', 'option');
$city_and_state  = get_field('company_information_city_and_state', 'option');
$zip             = get_field('company_information_zipcode', 'option');
$img_dir 				 = get_template_directory_uri(). "/icons/";
$icon_phone 		 = $img_dir . "phone_white.png";
$icon_email 		 = $img_dir . "mail-white.png";
$icon_location 	 = $img_dir . "phone_white.png";
?>

<footer>
	<div class="flex-container">
		<!-- LOGO AND INFO -->
		<div class="logo-and-company-info-wrapper">
			<div class="logo-wrapper">
				<a href="<?php echo get_home_url() ?>/"><img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt']; ?>"></a>
			</div>
			<div class="company-info">
				<?php if ($local_phone) {?><a href="tel: <?php echo $local_phone; ?>"><img src="<?php echo $icon_phone; ?>" alt="Phone Icon"></i><?php echo $local_phone; ?></a> <?php }?>
				<?php if ($email) {?><a href="mailto: <?php echo $email; ?>"><img src="<?php echo $icon_email; ?>" alt="Email Icon"><?php echo $email; ?></a> <?php }?>
				<?php if ($corporate_phone) {?><a href="tel: <?php echo $corporate_phone; ?>"><img src="<?php echo $icon_phone; ?>" alt="Corporate Phone Icon"><?php echo $corporate_phone; ?></a><?php }?>
				<?php if ($street) {?><a href="#"><img src="<?php echo $icon_location; ?>" alt="Location Pin"><p class="street"><?php echo $street; ?></p><p class="city-state"><?php echo $city_and_state; ?></p><p class="zip"><?php echo $zip ?></p> </a><?php }?>
			</div>
		</div>


		<!-- NAV COLUMNS -->
		<div class="footer-nav-columns col-1"><h3>COMPANY</h3><?php footer_nav_col_1(); ?></div>
		<div class="footer-nav-columns col-2"><h3>EQUIPMENT</h3><?php footer_nav_col_2(); ?></div>
		<div class="footer-nav-columns col-3"><h3>BRANDS</h3><?php footer_nav_col_3(); ?></div>
		<div class="footer-nav-columns col-4"><h3>SERVICES</h3><?php footer_nav_col_4(); ?></div>

		<!-- SOCIAL LINKS -->
		<?php get_template_part('inc/social-icons') ?>

		<!-- Admin frontend edit button, turn on/off under Company Information -> General -->
		<?php get_template_part('library/main/admin-frontend-edit-button') ?>

		<?php wp_footer(); ?>
		<!-- Script for Marquee -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.js" type="text/javascript"></script>
	</div>
</footer>
<div class="bottom-bar"><p>&copy; <?php echo date("Y"); ?> Q4 Impact Group - All Rights Reserved</p></div>
</body>
</html>
