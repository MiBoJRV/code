<?php
//
//// Add block for Homepage
//add_action( 'add_meta_boxes', 'gfonts_custom_add_metaboxes_1', 10, 2 );
//function gfonts_custom_add_metaboxes_1( $post_type, $post ) {
//    if( $post->ID == get_option( 'page_on_front' ) ) {
//        add_meta_box('front-page-metabox-1', 'Fonts', 'gfonts_custom_meta_box_callback_1', 'page' );
//    }
//}
//
////function gfonts_custom_meta_box_callback_1( $post, $meta ){
////    include(get_theme_root().'/'.get_option('stylesheet').'/functions-fonts/functions-font-1.php');
////    include(get_theme_root().'/'.get_option('stylesheet').'/functions-fonts/functions-font-2.php');
////    include(get_theme_root().'/'.get_option('stylesheet').'/functions-fonts/functions-font-3.php');
////    include(get_theme_root().'/'.get_option('stylesheet').'/functions-fonts/functions-font-4.php');
////    include(get_theme_root().'/'.get_option('stylesheet').'/functions-fonts/functions-font-5.php');
////    include(get_theme_root().'/'.get_option('stylesheet').'/functions-fonts/functions-font-6.php');
////    include(get_theme_root().'/'.get_option('stylesheet').'/functions-fonts/functions-font-7.php');
////    include(get_theme_root().'/'.get_option('stylesheet').'/functions-fonts/functions-font-8.php');
////    include(get_theme_root().'/'.get_option('stylesheet').'/functions-fonts/functions-font-9.php');
////}
//
//## Save Data
//add_action( 'save_post', 'myplugin_save_postdata_1' );
//function myplugin_save_postdata_1( $post_id ) {
//	$user = wp_get_current_user();
//
//    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
//        return;
//
//    if( ! current_user_can( 'edit_post', $post_id ) )
//        return;
//
////    if( in_array( 'administrator', (array) $user->roles ) ){
////		for ($isave = 1; $isave <= 9; $isave++) {
////			update_post_meta( $post_id, '_gfonts_url_value_key_'.$isave, sanitize_text_field( $_POST['gfonts_url_field_'.$isave] ));
////			update_post_meta( $post_id, '_gfonts_size_value_key_'.$isave, sanitize_text_field( $_POST['gfonts_size_field_'.$isave] ));
////			update_post_meta( $post_id, '_gfonts_weight_value_key_'.$isave, sanitize_text_field( $_POST['gfonts_weight_field_'.$isave] ));
////			update_post_meta( $post_id, '_gfonts_name_value_key_'.$isave, sanitize_text_field( $_POST['gfonts_name_field_'.$isave] ));
////			update_post_meta( $post_id, '_gfonts_type_value_key_'.$isave, sanitize_text_field( $_POST['gfonts_type_field_'.$isave] ));
////		}
////	}
//}
//?>