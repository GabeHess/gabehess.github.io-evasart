<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<?php oih_admin_header(); ?>
<div class="wrap oih-wrap">

	<h1><?php echo __( 'Extensions', 'opt-in-hound' ); ?></h1>

	<p><?php _e( 'Take advantage of these powerful Opt-In Hound extensions to further enhance the functionality of the plugin and grow your email subscriber lists.', 'opt-in-hound' ); ?></p>

	<p><?php _e( 'To gain immediate access to the modules below, <a target="_blank" href="https://devpups.com/opt-in-hound/pricing/">have a look at our pricing.</a>', 'opt-in-hound' ); ?></p>

	<div class="oih-row oih-m-padding">
	<?php 
		$tools = array();

		$tools['integration_mailchimp'] = array(
			'name' 		 		 => __( 'MailChimp Integration', 'opt-in-hound' ),
			'img'		 		 => 'assets/img/tool-icon-integration-mailchimp.png',
			'desc'				 => __( 'Send email subscribers directly to your MailChimp lists.', 'opt-in-hound' ),
			'url'				 => 'https://devpups.com/opt-in-hound/extensions/mailchimp/?utm_source=plugin-extensions&utm_medium=opt-in-mailchimp-integration&utm_campaign=opt-in-hound'
		);

		$tools['integration_aweber'] = array(
			'name' 		 		 => __( 'AWeber Integration', 'opt-in-hound' ),
			'img'		 		 => 'assets/img/tool-icon-integration-aweber.png',
			'desc'				 => __( 'Send email subscribers directly to your AWeber lists.', 'opt-in-hound' ),
			'url'				 => 'https://devpups.com/opt-in-hound/extensions/aweber/?utm_source=plugin-extensions&utm_medium=opt-in-aweber-integration&utm_campaign=opt-in-hound'
		);

		$tools['integration_sendinblue'] = array(
			'name' 		 		 => __( 'SendinBlue Integration', 'opt-in-hound' ),
			'img'		 		 => 'assets/img/tool-icon-integration-sendinblue.png',
			'desc'				 => __( 'Send email subscribers directly to your SendinBlue lists.', 'opt-in-hound' ),
			'url'				 => 'https://devpups.com/opt-in-hound/extensions/sendinblue/?utm_source=plugin-extensions&utm_medium=opt-in-sendinblue-integration&utm_campaign=opt-in-hound'
		);

		$tools['integration_woocommerce'] = array(
			'name' 		 		 => __( 'WooCommerce Integration', 'opt-in-hound' ),
			'img'		 		 => 'assets/img/tool-icon-integration-woocommerce.png',
			'desc'				 => __( "Display pop-up and fly-in opt-ins on WooCommerce product pages.", 'opt-in-hound' ),
			'url'				 => 'https://devpups.com/opt-in-hound/extensions/woocommerce/?utm_source=plugin-extensions&utm_medium=opt-in-woocommerce-integration&utm_campaign=opt-in-hound'
		);

		$tools['statistics'] = array(
			'name' 		 		 => __( 'Opt-In Statistics', 'opt-in-hound' ),
			'img'		 		 => 'assets/img/tool-opt-in-icon-statistics.png',
			'desc'				 => __( 'Track impressions, conversions and conversion rates for your opt-ins.', 'opt-in-hound' ),
			'url'				 => 'https://devpups.com/opt-in-hound/extensions/statistics/?utm_source=plugin-extensions&utm_medium=opt-in-statistics&utm_campaign=opt-in-hound'
		);

		$tools['opt_in_floating_bar'] = array(
			'name' 		 		 => __( 'Email Opt-in Floating Bar', 'opt-in-hound' ),
			'img'		 		 => 'assets/img/tool-opt-in-icon-floating-bar.png',
			'desc'				 => __( 'Add email opt-in floating bar forms in your posts and pages.', 'opt-in-hound' ),
			'url'				 => 'https://devpups.com/opt-in-hound/extensions/extended-opt-ins-pack/?utm_source=plugin-extensions&utm_medium=opt-in-floating-bar&utm_campaign=opt-in-hound'
		);

		$tools['opt_in_fly_in'] = array(
			'name' 		 		 => __( 'Email Opt-in Fly-in', 'opt-in-hound' ),
			'img'		 		 => 'assets/img/tool-opt-in-icon-fly-in.png',
			'desc'				 => __( 'Add email opt-in fly-in forms in your posts and pages.', 'opt-in-hound' ),
			'url'				 => 'https://devpups.com/opt-in-hound/extensions/extended-opt-ins-pack/?utm_source=plugin-extensions&utm_medium=opt-in-fly-in&utm_campaign=opt-in-hound'
		);

		$tools['opt_in_after_content'] = array(
			'name' 		 		 => __( 'Email Opt-in After Content', 'opt-in-hound' ),
			'img'		 		 => 'assets/img/tool-opt-in-icon-after-content.png',
			'desc'				 => __( 'Add email opt-in forms after your posts and pages content.', 'opt-in-hound' ),
			'url'				 => 'https://devpups.com/opt-in-hound/extensions/extended-opt-ins-pack/?utm_source=plugin-extensions&utm_medium=opt-in-after-content&utm_campaign=opt-in-hound'
		);

		$tools['opt_in_shortcode'] = array(
			'name' 		 		 => __( 'Email Opt-in Shortcode', 'opt-in-hound' ),
			'img'		 		 => 'assets/img/tool-opt-in-icon-shortcode.png',
			'desc'				 => __( 'Place email opt-in forms anywhere in your pages with the shortcode.', 'opt-in-hound' ),
			'url'				 => 'https://devpups.com/opt-in-hound/extensions/extended-opt-ins-pack/?utm_source=plugin-extensions&utm_medium=opt-in-shortcode&utm_campaign=opt-in-hound'
		);

		$tools['email_notification_welcome_message'] = array(
			'name' 		 		 => __( 'New Subscriber Welcome Email', 'opt-in-hound' ),
			'img'		 		 => 'assets/img/tool-icon-email-notification-welcome-message.png',
			'desc'				 => __( "Send a custom Welcome Email Message to your newly subscribed users.", 'opt-in-hound' ),
			'url'				 => 'https://devpups.com/opt-in-hound/?utm_source=plugin-extensions&utm_medium=opt-in-subscriber-welcome-message&utm_campaign=opt-in-hound'
		);

		foreach( $tools as $tool_slug => $tool ) {

			echo '<div class="oih-col-1-4">';
				echo '<div class="oih-tool-wrapper">';

					// Tool image
					echo '<a target="_blank" href="' . $tool['url'] . '">';
						echo '<img src="' . OIH_PLUGIN_DIR_URL . $tool['img'] . '" />';
					echo '</a>';

					// Tool name
					echo '<h4 class="oih-tool-name">' . $tool['name'] . '</h4>';

					// Tool actions
					echo '<div class="oih-tool-actions">';
					
						if( !empty( $tool['desc'] ) )
							echo '<p class="oih-description">' . $tool['desc'] . '</p>';

						if( empty( $tool['url'] ) )
							$tool['url'] = 'http://www.devpups.com/';

						echo '<a target="_blank" href="' . $tool['url'] . '" class="button button-primary">' . __( 'Learn More', 'opt-in-hound' ) . '</a>';

					echo '</div>';

				echo '</div>';
			echo '</div>';

		}
			
	?>
	</div>

</div>