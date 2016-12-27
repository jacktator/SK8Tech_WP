<?php
/**
 * The template part for displaying the header "Navbar Ghost Light"
 *
 * @author 8guild
 */
?>
<header class="<?php startapp_header_class( 'navbar-ghost-light' ); ?>">
	<div class="navbar navbar-regular menu-right">
		<div class="container">
			<div class="inner">
				<div class="column">
					<?php
					startapp_the_logo();
					startapp_mobile_logo();
					?>
				</div>
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
