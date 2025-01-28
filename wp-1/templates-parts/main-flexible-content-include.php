<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (get_field('add_page_id_to_copy_flexible_content')) {
    $flexCont = get_field('add_page_id_to_copy_flexible_content');
} else {
    if (get_field('flexible_content')) {
        $flexCont = get_the_ID();
    } else {
        //$flexCont = wp_get_post_parent_id( $post_ID );
    }
}

// loop through the rows of data

while (has_sub_field('flexible_content', $flexCont)) :

    if (get_row_layout() == 'locations_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/locations-section.php');

    elseif (get_row_layout() == 'p_hola'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_hola.php');

    elseif (get_row_layout() == 'p_want_to_ask'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_want_to_ask.php');

    elseif (get_row_layout() == 'p_our_manifesto'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_our_manifesto.php');

    elseif (get_row_layout() == 'p_for_advertisers'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_for_advertisers.php');

    elseif (get_row_layout() == 'p_home_big_1'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_home_big_1.php');

    elseif (get_row_layout() == 'p_home_big_2'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_home_big_2.php');

    elseif (get_row_layout() == 'p_home_big_3'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_home_big_3.php');

    elseif (get_row_layout() == 'p_home_im_in'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_home_im_in.php');


    elseif (get_row_layout() == 'p_for_affiliates'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_for_affiliates.php');

    elseif (get_row_layout() == 'p_join_the_revolution'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_join_the_revolution.php');

    elseif (get_row_layout() == 'p_join_us'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_join_us.php');

    elseif (get_row_layout() == 'p_faq'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_faq.php');

    elseif (get_row_layout() == 'p_about_us_page_main_banner'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_about_us_page_main_banner.php');

    elseif (get_row_layout() == 'p_who_we_are'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_who_we_are.php');

    elseif (get_row_layout() == 'p_ensure_delivering'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_ensure_delivering.php');

    elseif (get_row_layout() == 'p_any_fraudulent'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_any_fraudulent.php');

    elseif (get_row_layout() == 'p_ensure_consistent'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_ensure_consistent.php');

    elseif (get_row_layout() == 'p_affiliates_main_banner'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_affiliates_main_banner.php');

    elseif (get_row_layout() == 'p_shares'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_shares.php');

    elseif (get_row_layout() == 'p_affiliates_why_choose_us'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_affiliates_why_choose_us.php');

    elseif (get_row_layout() == 'p_affiliates_welcome'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_affiliates_welcome.php');

    elseif (get_row_layout() == 'p_four_reasons'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_four_reasons.php');

    elseif (get_row_layout() == 'p_receive'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_receive.php');

    elseif (get_row_layout() == 'p_lips'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_lips.php');

    elseif (get_row_layout() == 'p_lips_slider'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_lips_slider.php');

    elseif (get_row_layout() == 'p_affiliate_ready'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_affiliate_ready.php');

    elseif (get_row_layout() == 'p_advertisers_main_banner'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_advertisers_main_banner.php');

    elseif (get_row_layout() == 'p_advertisers_welcome'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_advertisers_welcome.php');

    elseif (get_row_layout() == 'p_advertisers_enjoy'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_advertisers_enjoy.php');

    elseif (get_row_layout() == 'p_advertisers_stop'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_advertisers_stop.php');

    elseif (get_row_layout() == 'p_offers_incredible_deals'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_offers_incredible_deals.php');

    elseif (get_row_layout() == 'p_conferences_main-banner'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_conferences_main-banner.php');

    elseif (get_row_layout() == 'p_conferences_lets_start'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_conferences_lets_start.php');

    elseif (get_row_layout() == 'p_conferences_about'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_conferences_about.php');

    elseif (get_row_layout() == 'p_conferences_why'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_conferences_why.php');

    elseif (get_row_layout() == 'p_conferences_exclusive_events'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_conferences_exclusive_events.php');

    elseif (get_row_layout() == 'p_education_main-banner'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_education_main-banner.php');

    elseif (get_row_layout() == 'p_education_future_kingpins'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_education_future_kingpins.php');

    elseif (get_row_layout() == 'p_careers_main-banner'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_careers_main-banner.php');

    elseif (get_row_layout() == 'p_careers_job_vacancy'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_careers_job_vacancy.php');

    elseif (get_row_layout() == 'p_education_provide'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_education_provide.php');

    elseif (get_row_layout() == 'p_education_ready'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_education_ready.php');

    elseif (get_row_layout() == 'p_education_button_more'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_education_button_more.php');

    elseif (get_row_layout() == 'p_terms_and_conditions'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_terms_and_conditions.php');

    elseif (get_row_layout() == 'p_privacy_policy'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_privacy_policy.php');

    elseif (get_row_layout() == 'p_cookies_policy'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_cookies_policy.php');


    elseif (get_row_layout() == 'p_main_banner'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/p_main_banner.php');

    elseif (get_row_layout() == 'category_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/category-section.php');

    elseif (get_row_layout() == 'ffr_main_video_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_main_video_section.php');

    elseif (get_row_layout() == 'ffr_main_video_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_main_video_section.php');

    elseif (get_row_layout() == 'ffr_services_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_services_section.php');

    elseif (get_row_layout() == 'ffr_about_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_about_section.php');

    elseif (get_row_layout() == 'ffr_tools_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_tools_section.php');

    elseif (get_row_layout() == 'ffr_software_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_software_section.php');

    elseif (get_row_layout() == 'ffr_office_locations_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_office_locations_section.php');

    elseif (get_row_layout() == 'ffr_contact_us_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_contact_us_section.php');

    elseif (get_row_layout() == 'ffr-lp_office_locations_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-lp_office_locations_section.php');

    elseif (get_row_layout() == 'ffr-lp_locations_map_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-lp_locations_map_section.php');

    elseif (get_row_layout() == 'ffr-cp_consultation_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-cp_consultation_section.php');

    elseif (get_row_layout() == 'ffr-cp_leave_message_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-cp_leave_message_section.php');

    elseif (get_row_layout() == 'ffr_contact_us_map_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_contact_us_map_section.php');

    elseif (get_row_layout() == 'ffr-page_banner'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-page_banner.php');

    elseif (get_row_layout() == 'ffr-ccp_cryptocurrency_about_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-ccp_cryptocurrency_about_section.php');

    elseif (get_row_layout() == 'ffr-ccp_cryptocurrency_about_more_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-ccp_cryptocurrency_about_more_section.php');

    elseif (get_row_layout() == 'ffr-aup_about_us_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-aup_about_us_section.php');

    elseif (get_row_layout() == 'ffr-aup_approach_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-aup_approach_section.php');

    elseif (get_row_layout() == 'ffr-sp_services_all_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-sp_services_all_section.php');

    elseif (get_row_layout() == 'ffr-sp_our_client_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-sp_our_client_section.php');

    elseif (get_row_layout() == 'ffr-cp_contact_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-cp_contact_section.php');

    elseif (get_row_layout() == 'ffr-privacy_policy'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-privacy_policy.php');

    elseif (get_row_layout() == 'ffr-news'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-news.php');

    elseif (get_row_layout() == 'ffr-thank_you'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-thank_you.php');

    elseif (get_row_layout() == 'ffr_who_we_are_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_who_we_are_section.php');

    elseif (get_row_layout() == 'ffr_who_we_are_section_2'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_who_we_are_section_2.php');

    elseif (get_row_layout() == 'ffr_tools_section_new'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr_tools_section_new.php');

    elseif (get_row_layout() == 'ffr-success_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-success_section.php');

    elseif (get_row_layout() == 'ffr-our_services_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-our_services_section.php');

    elseif (get_row_layout() == 'ffr-types_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-types_section.php');

    elseif (get_row_layout() == 'ffr-title_text_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-title_text_section.php');

    elseif (get_row_layout() == 'ffr-most_common_types_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-most_common_types_section.php');

    elseif (get_row_layout() == 'ffr-how_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-how_section.php');

    elseif (get_row_layout() == 'ffr-oval_block_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-oval_block_section.php');

    elseif (get_row_layout() == 'ffr-faq_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-faq_section.php');

    elseif (get_row_layout() == 'ffr-title_text_buttons_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-title_text_buttons_section.php');

    elseif (get_row_layout() == 'ffr-faq_2_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-faq_2_section.php');

    elseif (get_row_layout() == 'ffr-circle_block_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-circle_block_section.php');

    elseif (get_row_layout() == 'ffr-how_it_works_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-how_it_works_section.php');

    elseif (get_row_layout() == 'ffr-faq_bg_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-faq_bg_section.php');

    elseif (get_row_layout() == 'ffr-page_banner_2_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-page_banner_2_section.php');

    elseif (get_row_layout() == 'ffr-leave_message_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-leave_message_section.php');

    elseif (get_row_layout() == 'ffr-page_banner_3_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-page_banner_3_section.php');

    elseif (get_row_layout() == 'ffr-success_2_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-success_2_section.php');

    elseif (get_row_layout() == 'ffr-how_2_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-how_2_section.php');

    elseif (get_row_layout() == 'ffr-logos_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-logos_section.php');

    elseif (get_row_layout() == 'ffr-team_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-team_section.php');

    elseif (get_row_layout() == 'ffr-faq_3_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-faq_3_section.php');

    elseif (get_row_layout() == 'ffr-careers_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-careers_section.php');

    elseif (get_row_layout() == 'ffr-page_banner_4_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-page_banner_4_section.php');

    elseif (get_row_layout() == 'ffr-reviews_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-reviews_section.php');

    elseif (get_row_layout() == 'ffr-success_stories_list_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-success_stories_list_section.php');

    elseif (get_row_layout() == 'ffr-contact_faq_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-contact_faq_section.php');

    elseif (get_row_layout() == 'ffr-news_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-news_section.php');

    elseif (get_row_layout() == 'ffr-page_news_banner_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-page_news_banner_section.php');

    elseif (get_row_layout() == 'ffr-news_title_text_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-news_title_text_section.php');

    elseif (get_row_layout() == 'ffr-terms_conditions'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-terms_conditions.php');

    elseif (get_row_layout() == 'ffr-cookies_policy'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-cookies_policy.php');

    elseif (get_row_layout() == 'ffr-accessibility_statement'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-accessibility_statement.php');

    elseif (get_row_layout() == 'ffr-faq_block_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-faq_block_section.php');

    elseif (get_row_layout() == 'ffr-logos_2_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/ffr-logos_2_section.php');


    elseif (get_row_layout() == 'experience_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/experience-section.php');

    elseif (get_row_layout() == 'featured_vacation_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/featured-vacation-section.php');

    elseif (get_row_layout() == 'grid_stories_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/grid-stories-section.php');

    elseif (get_row_layout() == 'reviews_slider'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/reviews.php');

    elseif (get_row_layout() == 'reviews_slider_2'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/reviews-2.php');

    elseif (get_row_layout() == 'side_paralax_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/side-paralax-section.php');

    elseif (get_row_layout() == 'icon_text_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/icon-text-section.php');

    elseif (get_row_layout() == 'property_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/property-section.php');

    elseif (get_row_layout() == 'wave_text_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/wave-text-section.php');

    elseif (get_row_layout() == 'wave_text_section_2'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/wave-text-section-2.php');

    elseif (get_row_layout() == 'faq_accordion_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/faq-accordion-section.php');

    elseif (get_row_layout() == 'team_repeater'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/team-repeater.php');

    elseif (get_row_layout() == 'specials_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/specials-section.php');

    elseif (get_row_layout() == 'special_subscribtion_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/special-subscribtion-section.php');

    elseif (get_row_layout() == 'activities_child_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/activities-child-section.php');

    elseif (get_row_layout() == 'simple_text_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/simple-text-section.php');

    elseif (get_row_layout() == 'review_us_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/review-us-section.php');

    elseif (get_row_layout() == 'property_banner'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/property-management-banner.php');

    elseif (get_row_layout() == 'trust_logos_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/trust-logos-section.php');

    elseif (get_row_layout() == 'contact_us_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/contact-us-section.php');

    elseif (get_row_layout() == 'two_parallax_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/two-parallax-section.php');

    elseif (get_row_layout() == 'concierge_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/concierge-section.php');

    elseif (get_row_layout() == 'card_slider'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/card-slider.php');

    elseif (get_row_layout() == 'gallery_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/gallery-section.php');

    elseif (get_row_layout() == 'side_image_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/side-images-section.php');

    elseif (get_row_layout() == 'window_image_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/window-image-section.php');

    elseif (get_row_layout() == 'activities_icon_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/activities-icon-section.php');

    elseif (get_row_layout() == 'check_list_section'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/check-list-section.php');

    elseif (get_row_layout() == 'beach_gear_images'):
        include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/flexible-content/beach-gear-images.php');

    endif;
endwhile;
?>














