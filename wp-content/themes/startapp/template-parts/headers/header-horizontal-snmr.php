<?php
/**
 * The template part for displaying the header "Site Info + Navbar Menu Right"
 *
 * @author 8guild
 */
?>
<header class="<?php startapp_header_class(); ?>">
	<div class="site-info">
		<div class="container">
			<div class="inner">
				<div class="column">
					<?php
					/**
					 * Fires in the left column of the Site Info section
					 *
					 * @see startapp_the_logo() -1
					 * @see startapp_mobile_logo() -1
					 */
					do_action( 'startapp_site_info_left' );
					?>
				</div>
				<div class="column text-right">
					<?php
					/**
					 * Fires in the left column of the Site Info section
					 *
					 * @see startapp_site_info_contacts() 10
					 * @see startapp_site_info_toolbar() 100
					 */
					do_action( 'startapp_site_info_right' );
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="navbar navbar-regular menu-right">
		<div class="container">
			<div class="inner">
				<div class="column">
					<?php
					startapp_primary_menu();

					/**
					 * Displays extra elements (tools) in Navbar
					 *
					 * @see startapp_navbar_toolbar() 100
					 */
					do_action( 'startapp_navbar_tools' );

					startapp_navbar_socials();
					startapp_header_buttons();
					?>
				</div>
			</div>
		</div>
	</div>
</header>
