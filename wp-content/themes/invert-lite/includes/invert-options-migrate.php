<?php 

add_action( 'wp_ajax_invert_lite_migrate_option', 'invert_lite_migrate_options' );
add_action( 'wp_ajax_nopriv_invert_lite_migrate_option', 'invert_lite_migrate_options' );
function invert_lite_migrate_options() {

	$invert_lite_pre_options = get_option( 'invert_lite' );

	set_theme_mod( 'invert_lite_pri_color', $invert_lite_pre_options['invert_colorpicker'] );
	set_theme_mod( 'invert_lite_headerbg_color', $invert_lite_pre_options['invert_headercolorpicker'] );
	set_theme_mod( 'invert_lite_navfont_color', $invert_lite_pre_options['invert_navfontcolorpicker'] );

	set_theme_mod( 'invert_lite_logo_img', $invert_lite_pre_options['invert_logo_img'] );
	set_theme_mod( 'site_icon', $invert_lite_pre_options['invert_favicon'] );

	if( $invert_lite_pre_options['invert_hide_featured_box'] == 'true' )
		set_theme_mod( 'home_feature_sec', 'on' );
	else
		set_theme_mod( 'home_feature_sec', 'off' );

	set_theme_mod( 'first_feature_heading', $invert_lite_pre_options['invert_fb1_first_part_heading'] );
	set_theme_mod( 'first_feature_image', $invert_lite_pre_options['invert_fb1_first_part_image'] );
	set_theme_mod( 'first_feature_content', $invert_lite_pre_options['invert_fb1_first_part_content'] );
	set_theme_mod( 'first_feature_link', $invert_lite_pre_options['invert_fb1_first_part_link'] );
	set_theme_mod( 'second_feature_heading', $invert_lite_pre_options['invert_fb2_second_part_heading'] );
	set_theme_mod( 'second_feature_image', $invert_lite_pre_options['invert_fb2_second_part_image'] );
	set_theme_mod( 'second_feature_content', $invert_lite_pre_options['invert_fb2_second_part_content'] );
	set_theme_mod( 'second_feature_link', $invert_lite_pre_options['invert_fb2_second_part_link'] );
	set_theme_mod( 'third_feature_heading', $invert_lite_pre_options['invert_fb3_third_part_heading'] );
	set_theme_mod( 'third_feature_image', $invert_lite_pre_options['invert_fb3_third_part_image'] );
	set_theme_mod( 'third_feature_content', $invert_lite_pre_options['invert_fb3_third_part_content'] );
	set_theme_mod( 'third_feature_link', $invert_lite_pre_options['invert_fb3_third_part_link'] );
	
	if( $invert_lite_pre_options['invert_hide_callto_action'] == 'true' )
		set_theme_mod( 'home_cta_sec', 'on' );
	else
		set_theme_mod( 'home_cta_sec', 'off' );

	set_theme_mod( 'home_cta_heading', $invert_lite_pre_options['invert_catoac_heading'] );
	set_theme_mod( 'home_cta_content', $invert_lite_pre_options['invert_catoac_content'] );
	set_theme_mod( 'home_cta_btn_txt', $invert_lite_pre_options['invert_catoac_txt'] );
	set_theme_mod( 'home_cta_btn_link', $invert_lite_pre_options['invert_catoac_link'] );
	
	if( $invert_lite_pre_options['invert_hide_parallax'] == 'true' )
		set_theme_mod( 'home_parallax_sec', 'on' );
	else
		set_theme_mod( 'home_parallax_sec', 'off' );

	set_theme_mod( 'parallax_image', $invert_lite_pre_options['invert_fullparallax_image'] );
	set_theme_mod( 'parallax_content', $invert_lite_pre_options['invert_para_content_left'] );
	
	if( $invert_lite_pre_options['invert_hide_home_blog'] == 'true' )
		set_theme_mod( 'home_blog_sec', 'on' );
	else
		set_theme_mod( 'home_blog_sec', 'off' );

	set_theme_mod( 'home_blog_title', $invert_lite_pre_options['invert_blogsec_title'] );
	set_theme_mod( 'home_blog_num', $invert_lite_pre_options['invert_blog_no'] );
	

	if( $invert_lite_pre_options['invert_hide_client_logo'] == 'true' )
		set_theme_mod( 'home_brand_sec', 'on' );
	else
		set_theme_mod( 'home_brand_sec', 'off' );

	set_theme_mod( 'home_brand_sec_title', $invert_lite_pre_options['invert_clientsec_title'] );
	set_theme_mod( 'brand1_alt', $invert_lite_pre_options['invert_img1_title'] );
	set_theme_mod( 'brand1_img', $invert_lite_pre_options['invert_img1_icon'] );
	set_theme_mod( 'brand1_url', $invert_lite_pre_options['invert_img1_link'] );
	set_theme_mod( 'brand2_alt', $invert_lite_pre_options['invert_img2_title'] );
	set_theme_mod( 'brand2_img', $invert_lite_pre_options['invert_img2_icon'] );
	set_theme_mod( 'brand2_url', $invert_lite_pre_options['invert_img2_link'] );
	set_theme_mod( 'brand3_alt', $invert_lite_pre_options['invert_img3_title'] );
	set_theme_mod( 'brand3_img', $invert_lite_pre_options['invert_img3_icon'] );
	set_theme_mod( 'brand3_url', $invert_lite_pre_options['invert_img3_link'] );
	set_theme_mod( 'brand4_alt', $invert_lite_pre_options['invert_img4_title'] );
	set_theme_mod( 'brand4_img', $invert_lite_pre_options['invert_img4_icon'] );
	set_theme_mod( 'brand4_url', $invert_lite_pre_options['invert_img4_link'] );
	set_theme_mod( 'brand5_alt', $invert_lite_pre_options['invert_img5_title'] );
	set_theme_mod( 'brand5_img', $invert_lite_pre_options['invert_img5_icon'] );
	set_theme_mod( 'brand5_url', $invert_lite_pre_options['invert_img5_link'] );
	
	set_theme_mod( 'blogpage_heading', $invert_lite_pre_options['invert_blogpage_heading'] );
	if( $invert_lite_pre_options['invert_show_pagination'] == 'true' )
		set_theme_mod( 'blogpage_custom_pagination', 'on' );
	else
		set_theme_mod( 'blogpage_custom_pagination', 'off' );
	
	if( $invert_lite_pre_options['invert_hide_bread'] == 'true' )
		set_theme_mod( 'breadcrumb_sec', 'on' );
	else
		set_theme_mod( 'breadcrumb_sec', 'off' );

	set_theme_mod( 'breadcrumbtxt_color', $invert_lite_pre_options['invert_bread_title_color'] );
	set_theme_mod( 'breadcrumbbg_color', $invert_lite_pre_options['invert_bread_color'] );
	set_theme_mod( 'breadcrumbbg_image', $invert_lite_pre_options['invert_bread_image'] );
	
	set_theme_mod( 'copyright', $invert_lite_pre_options['invert_copyright'] );
	
	echo __('All the settings migrated successfully.', 'invert-lite');

	delete_option( 'invert_lite' );

	die();
}

add_action('admin_menu', 'invert_lite_migrate_menu');
function invert_lite_migrate_menu() {
	add_theme_page( __('Invert Migrate Options', 'invert-lite'), __('Invert Migrate Options', 'invert-lite'), 'administrator', 'sktmigrate', 'invert_lite_migrate_menu_options' );
}

function invert_lite_migrate_menu_options() { ?>
	<h1><?php _e('Migrate Settings to Customizer', 'invert-lite') ?></h1>
	<p><?php _e('As per the new WordPress guidelines it is required to use the Customizer for implementing theme options.', 'invert-lite'); ?></p>
	<p><?php _e('So, click on this button to migrate all data from previous version.', 'invert-lite'); ?></p>
	<p><strong><?php _e('Note: only click this option once immidiatly after upgrade. Do not press back or refresh button while migrating...', 'invert-lite'); ?></strong></p>
	<button id="invert-migrate-btn" class="button button-primary"><?php _e( 'Migrate to Customizer', 'invert-lite' ); ?></button>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		'use strict';
		jQuery('#invert-migrate-btn').click(function() {
			jQuery('body').append('<div id="migrate-div" style="position:absolute;left:0;top:0;bottom:0;right:0;background-color:rgba(255,255,255,0.7);"><img style="position:absolute;top:50%;left:50%;" class="migrate-loader" src="<?php echo get_template_directory_uri()."/images/loader.gif"; ?>" alt="<?php _e("Loading", "invert-lite"); ?>"></div>');
		    jQuery.ajax({
		        url: "<?php echo home_url('/');?>wp-admin/admin-ajax.php",
		        type: 'POST',
		        data: { action: 'invert_lite_migrate_option' },
		        success: function( response ) {
		        	jQuery('#migrate-div').remove();
		            alert( response );
		            var wp_adminurl = "<?php echo esc_url( home_url('/') ).'wp-admin/customize.php'; ?>";
  					jQuery(location).attr("href", wp_adminurl);
		        }
		    });
			return false;

		});
	});
	</script>
<?php }