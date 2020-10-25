
// Remove Dashboard widget Specific User Role Start ========================================
add_action( 'wp_dashboard_setup', 'bt_remove_dashboard_widgets' );
function bt_remove_dashboard_widgets() {
	$roles = wp_get_current_user()->roles; 
	if( !in_array('shop_manager',$roles)){
	return;
	}	

		remove_action( 'welcome_panel','wp_welcome_panel' ); // Welcome Panel

		remove_meta_box( 'dashboard_quick_press','dashboard','side'); // Quick Press widget
		remove_meta_box( 'dashboard_primary','dashboard','side' ); // WordPress.com Blog
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal'); //Removes the 'At a Glance' widget
		remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
		remove_meta_box( 'yith_dashboard_blog_news', 'dashboard', 'normal');
		remove_meta_box( 'yith_dashboard_products_news', 'dashboard', 'normal');
		remove_meta_box( 'jetpack_summary_widget', 'dashboard', 'normal');
	}
// Remove Dashboard widget Specific User Role End ========================================
