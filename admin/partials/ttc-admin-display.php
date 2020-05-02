<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       sarangshahane.in
 * @since      1.0.0
 *
 * @package    Ttc
 * @subpackage Ttc/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="ttc-page-wrapper">

	<!-- Header & Menu Start -->
	<div class="ttc-header">
		
		<div class="ttc-menu">

			<div class="ttc-container flex-display">
				
				<div class="ttc-left-menu">
					<span class="screen-reader-text"><?php __( 'Track the Corona' ); ?></span>
					<?php echo file_get_contents( TTC_URL . 'admin/img/track-the-corona.svg' ); ?>
				</div>

				<div class="ttc-right-menu">
					<?php
						esc_attr_e( 'Display the Corona info on Website.', 'ttc' );
					?>
				</div>

			</div>
			
		</div>
	</div>
	<!-- Header & Menu End -->
	
	<!-- Page content Start -->
	<div class="ttc-content-wrap clear ttc-container">
		
		<div id="poststuff">
			<div id="post-body" class="columns-2">
				<div id="post-body-content">

					<!-- Getting Started -->
					<div class="postbox introduction">
						<h2 class="hndle ui-sortable-handle">
							<span><?php esc_html_e( 'Plugin Into', 'ttc' ); ?></span>
						</h2>
						<div class="inside">
							<p>
								<!-- <span class="ttc_caps"> <?php esc_attr_e( 'T' ); ?></span>rack
								<span class="ttc_caps"> <?php esc_attr_e( 'T' ); ?></span>he
								<span class="ttc_caps"> <?php esc_attr_e( 'C' ); ?></span>orona -->
							<?php
								esc_attr_e( 'The Track the Corona WordPress plugin is created to help the site owners to display the live status of corona virus status in their area using the live API data which updates in every minutes.' );
							?>
							</p>
							<p>
							<?php
								esc_attr_e( 'This data is directly fetched from the official Government sources. So, you can display this data on your website\'s pages or in a Blog Post.' );
							?>
							</p>

							<p>
							<?php
								esc_attr_e( 'You can use this plugin to aware the users and give them the live data of this pandamic. So as to help them and spread awareness regarding the current situation in the world.' );
							?>
							</p>

							<p>
							<?php
								esc_attr_e( 'You need to choose the shortcode and add it on the website\'s page where ever you want and the live data will be displayed. You can place the shortcode directly or from any page builder.' );
							?>
							</p>
							<p>
							<?php
								esc_attr_e( 'So, check well, stay updated and of course BE SAFE.' );
							?>
							</p>
						</div>
					</div>
					<!-- Getting Started -->

				</div>

				<!-- Right Sidebar -->
				<div class="postbox-container" id="postbox-container-1">
					<div id="side-sortables">

						<div class="postbox">
							<h2 class="hndle">
								<span class="dashicons dashicons-book"></span>
								<span><?php esc_html_e( 'Knowledge Base', 'ttc' ); ?></span>
							</h2>
							<div class="inside">
								<p>
									<?php esc_html_e( 'Not sure how something works? Take a peek at the knowledge base and learn.', 'ttc' ); ?>
								</p>
								<p>
									<a href="<?php echo esc_url( 'http://resume.sarangshahane.in/' ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Visit Knowledge Base »', 'ttc' ); ?></a>
								</p>
							</div>
						</div>

						<div class="postbox">
							<h2 class="hndle">
								<span class="dashicons dashicons-sos"></span>
								<span><?php esc_html_e( 'Five Star Support', 'ttc' ); ?></span>
							</h2>
							<div class="inside">
								<p>
									<?php esc_html_e( 'Want to share a bug with me? I will be happy to help you!', 'ttc' ); ?>
								</p>
								<p>
									<a href="<?php echo esc_url( 'http://resume.sarangshahane.in/' ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Submit a Ticket »', 'ttc' ); ?></a>
								</p>
							</div>
						</div>
				
					</div>
				</div>
				<!-- Right Sidebar -->

			</div>
			<!-- /post-body -->
			<br class="clear">
		</div>

	</div>
	<!-- Page content End -->
</div>
