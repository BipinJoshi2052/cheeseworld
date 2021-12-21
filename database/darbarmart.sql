-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 10:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darbarmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_tokens`
--

CREATE TABLE `api_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `permissions` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `object_id` int(10) UNSIGNED NOT NULL,
  `target` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_currency_values`
--

CREATE TABLE `custom_currency_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `currency_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_value` double(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `download_extras`
--

CREATE TABLE `download_extras` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manage_languages`
--

CREATE TABLE `manage_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_sample_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `default_lang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_languages`
--

INSERT INTO `manage_languages` (`id`, `lang_name`, `lang_code`, `lang_sample_img`, `status`, `default_lang`, `created_at`, `updated_at`) VALUES
(1, 'english', 'en', 'en_lang_sample_img.png', 1, 1, '2019-11-03 23:03:55', '2019-11-03 23:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_000036_create_api_tokens_table', 1),
(3, '2014_10_12_263536_create_order_products_table', 1),
(4, '2015_12_05_184931_create_roles_table', 1),
(5, '2015_12_05_185011_create_role_user_table', 1),
(6, '2015_12_05_190659_create_options_table', 1),
(7, '2016_01_01_022900_create_posts_table', 1),
(8, '2016_01_01_022900_create_products_table', 1),
(9, '2016_01_01_022956_create_post_extras_table', 1),
(10, '2016_01_01_022956_create_product_extras_table', 1),
(11, '2016_01_17_181505_create_object_relationships_table', 1),
(12, '2016_05_12_015250_create_orders_items_table', 1),
(13, '2016_06_04_053757_create_save_custom_designs_table', 1),
(14, '2016_06_15_182116_create_users_custom_designs_table', 1),
(15, '2016_10_02_061320_create_users_details_table', 1),
(16, '2016_10_07_023527_create_manage_languages_table', 1),
(17, '2016_11_28_173526_create_user_role_permissions_table', 1),
(18, '2017_01_06_185011_create_vendor_announcements_table', 1),
(19, '2017_02_07_173536_create_comments_table', 1),
(20, '2017_02_09_173636_create_subscriptions_table', 1),
(21, '2017_02_09_173736_create_request_products_table', 1),
(22, '2017_05_23_153636_create_term_extras_table', 1),
(23, '2017_05_23_173636_create_terms_table', 1),
(24, '2017_09_22_172636_create_download_extras_table', 1),
(25, '2017_11_18_1726459_create_vendor_withdraws_table', 1),
(26, '2017_12_03_172638_create_vendor_packages_table', 1),
(27, '2017_12_26_172638_create_vendor_orders_table', 1),
(28, '2018_01_01_172638_create_custom_currency_values_table', 1),
(29, '2018_01_01_172638_create_vendor_totals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `object_relationships`
--

CREATE TABLE `object_relationships` (
  `term_id` int(10) UNSIGNED NOT NULL,
  `object_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `object_relationships`
--

INSERT INTO `object_relationships` (`term_id`, `object_id`, `created_at`, `updated_at`) VALUES
(7, 3, '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(9, 1, '2021-12-15 03:15:09', '2021-12-15 03:15:09'),
(13, 2, '2021-12-15 03:17:25', '2021-12-15 03:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`, `updated_at`) VALUES
(1, '_shipping_method_data', 'a:4:{s:15:\"shipping_option\";a:2:{s:15:\"enable_shipping\";s:0:\"\";s:12:\"display_mode\";s:13:\"radio_buttons\";}s:9:\"flat_rate\";a:3:{s:13:\"enable_option\";s:0:\"\";s:12:\"method_title\";s:9:\"Flat Rate\";s:11:\"method_cost\";s:0:\"\";}s:13:\"free_shipping\";a:3:{s:13:\"enable_option\";s:0:\"\";s:12:\"method_title\";s:13:\"Free Shipping\";s:12:\"order_amount\";s:0:\"\";}s:14:\"local_delivery\";a:4:{s:13:\"enable_option\";s:0:\"\";s:12:\"method_title\";s:14:\"Local Delivery\";s:8:\"fee_type\";s:0:\"\";s:12:\"delivery_fee\";s:0:\"\";}}', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(2, '_settings_data', 'a:1:{s:16:\"general_settings\";a:10:{s:15:\"general_options\";a:5:{s:10:\"site_title\";s:10:\"DurbarMart\";s:13:\"email_address\";s:20:\"durbarmart@nepal.com\";s:9:\"site_logo\";N;s:31:\"allow_registration_for_frontend\";b:1;s:26:\"default_role_slug_for_site\";s:9:\"site-user\";}s:13:\"taxes_options\";a:3:{s:13:\"enable_status\";s:1:\"0\";s:13:\"apply_tax_for\";s:11:\"per_product\";s:10:\"tax_amount\";N;}s:16:\"checkout_options\";a:2:{s:17:\"enable_guest_user\";b:1;s:17:\"enable_login_user\";b:1;}s:29:\"downloadable_products_options\";a:3:{s:17:\"login_restriction\";b:0;s:31:\"grant_access_from_thankyou_page\";b:1;s:23:\"grant_access_from_email\";b:0;}s:17:\"recaptcha_options\";a:7:{s:32:\"enable_recaptcha_for_admin_login\";b:0;s:31:\"enable_recaptcha_for_user_login\";b:0;s:38:\"enable_recaptcha_for_user_registration\";b:0;s:33:\"enable_recaptcha_for_vendor_login\";b:0;s:40:\"enable_recaptcha_for_vendor_registration\";b:0;s:20:\"recaptcha_secret_key\";N;s:18:\"recaptcha_site_key\";N;}s:19:\"nexmo_config_option\";a:6:{s:19:\"enable_nexmo_option\";b:0;s:9:\"nexmo_key\";N;s:12:\"nexmo_secret\";N;s:9:\"number_to\";N;s:11:\"number_from\";N;s:7:\"message\";N;}s:19:\"fixer_config_option\";a:1:{s:20:\"fixer_api_access_key\";N;}s:16:\"currency_options\";a:7:{s:13:\"currency_name\";s:3:\"USD\";s:17:\"currency_position\";s:4:\"left\";s:18:\"thousand_separator\";s:1:\",\";s:17:\"decimal_separator\";s:1:\".\";s:18:\"number_of_decimals\";s:1:\"2\";s:26:\"currency_conversion_method\";N;s:17:\"frontend_currency\";a:4:{i:0;s:3:\"BDT\";i:1;s:3:\"EUR\";i:2;s:3:\"GBP\";i:3;s:3:\"USD\";}}s:19:\"date_format_options\";a:1:{s:11:\"date_format\";N;}s:25:\"default_frontend_currency\";a:4:{i:0;s:3:\"BDT\";i:1;s:3:\"EUR\";i:2;s:3:\"GBP\";i:3;s:3:\"USD\";}}}', '2019-11-03 23:03:55', '2021-12-15 02:23:34'),
(3, '_custom_designer_settings_data', 'a:1:{s:16:\"general_settings\";a:1:{s:16:\"canvas_dimension\";a:3:{s:13:\"small_devices\";a:2:{s:5:\"width\";i:280;s:6:\"height\";i:300;}s:14:\"medium_devices\";a:2:{s:5:\"width\";i:480;s:6:\"height\";i:480;}s:13:\"large_devices\";a:2:{s:5:\"width\";i:500;s:6:\"height\";i:550;}}}}', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(4, '_payment_method_data', 'a:6:{s:14:\"payment_option\";a:1:{s:21:\"enable_payment_method\";s:0:\"\";}s:4:\"bacs\";a:5:{s:13:\"enable_option\";s:0:\"\";s:12:\"method_title\";s:20:\"Direct Bank Transfer\";s:18:\"method_description\";s:173:\"Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won\'t be shipped until the funds have cleared in our account.\";s:19:\"method_instructions\";s:173:\"Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won\'t be shipped until the funds have cleared in our account.\";s:15:\"account_details\";a:6:{s:12:\"account_name\";s:0:\"\";s:14:\"account_number\";s:0:\"\";s:9:\"bank_name\";s:0:\"\";s:10:\"short_code\";s:0:\"\";s:4:\"iban\";s:0:\"\";s:5:\"swift\";s:0:\"\";}}s:3:\"cod\";a:4:{s:13:\"enable_option\";s:0:\"\";s:12:\"method_title\";s:16:\"Cash on Delivery\";s:18:\"method_description\";s:28:\"Pay with cash upon delivery.\";s:19:\"method_instructions\";s:28:\"Pay with cash upon delivery.\";}s:6:\"paypal\";a:6:{s:13:\"enable_option\";s:0:\"\";s:12:\"method_title\";s:6:\"Paypal\";s:16:\"paypal_client_id\";s:0:\"\";s:13:\"paypal_secret\";s:0:\"\";s:28:\"paypal_sandbox_enable_option\";s:3:\"yes\";s:18:\"method_description\";s:85:\"Pay via PayPal; you can pay with your credit card if you don\'t have a PayPal account.\";}s:6:\"stripe\";a:8:{s:13:\"enable_option\";s:0:\"\";s:12:\"method_title\";s:6:\"Stripe\";s:15:\"test_secret_key\";s:0:\"\";s:20:\"test_publishable_key\";s:0:\"\";s:15:\"live_secret_key\";s:0:\"\";s:20:\"live_publishable_key\";s:0:\"\";s:25:\"stripe_test_enable_option\";s:3:\"yes\";s:18:\"method_description\";s:49:\"Stripe is a simple way to accept payments online.\";}s:9:\"2checkout\";a:7:{s:13:\"enable_option\";s:0:\"\";s:12:\"method_title\";s:9:\"2Checkout\";s:8:\"sellerId\";s:0:\"\";s:14:\"publishableKey\";s:0:\"\";s:10:\"privateKey\";s:0:\"\";s:21:\"sandbox_enable_option\";s:3:\"yes\";s:18:\"method_description\";s:52:\"2Checkout is a simple way to accept payments online.\";}}', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(5, '_appearance_tab_data', 'a:7:{s:8:\"settings\";s:71:\"{\"header_slider_images_and_text\":{\"slider_images\":[],\"slider_text\":[]}}\";s:16:\"settings_details\";a:4:{s:7:\"general\";a:20:{s:10:\"custom_css\";b:0;s:13:\"body_bg_color\";s:6:\"D2D6DE\";s:16:\"filter_price_min\";s:1:\"0\";s:16:\"filter_price_max\";s:4:\"1000\";s:22:\"sidebar_panel_bg_color\";s:6:\"F2F0F1\";s:30:\"sidebar_panel_title_text_color\";s:6:\"333333\";s:44:\"sidebar_panel_title_text_bottom_border_color\";s:6:\"1FC0A0\";s:34:\"sidebar_panel_title_text_font_size\";s:2:\"14\";s:32:\"sidebar_panel_content_text_color\";s:6:\"333333\";s:36:\"sidebar_panel_content_text_font_size\";s:2:\"12\";s:20:\"product_box_bg_color\";s:6:\"F2F0F1\";s:24:\"product_box_border_color\";s:6:\"E1E1E1\";s:22:\"product_box_text_color\";s:6:\"333333\";s:26:\"product_box_text_font_size\";s:2:\"13\";s:24:\"product_box_btn_bg_color\";s:6:\"1FC0A0\";s:27:\"product_box_btn_hover_color\";s:6:\"E1E1E1\";s:14:\"btn_text_color\";s:6:\"FFFFFF\";s:20:\"btn_hover_text_color\";s:6:\"444444\";s:26:\"selected_menu_border_color\";s:6:\"1FC0A0\";s:32:\"pages_content_title_border_color\";s:6:\"1FC0A0\";}s:14:\"header_details\";a:12:{s:17:\"slider_visibility\";b:1;s:10:\"custom_css\";b:0;s:31:\"header_top_gradient_start_color\";s:6:\"272727\";s:29:\"header_top_gradient_end_color\";s:6:\"272727\";s:34:\"header_bottom_gradient_start_color\";N;s:32:\"header_bottom_gradient_end_color\";N;s:17:\"header_text_color\";s:6:\"B4B1AB\";s:16:\"header_text_size\";s:2:\"14\";s:23:\"header_text_hover_color\";s:6:\"D2404D\";s:29:\"header_selected_menu_bg_color\";s:6:\"C0C0C0\";s:31:\"header_selected_menu_text_color\";s:6:\"D2404D\";s:13:\"header_slogan\";N;}s:12:\"home_details\";a:2:{s:19:\"cat_list_to_display\";a:10:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"6\";i:3;s:1:\"7\";i:4;s:1:\"8\";i:5;s:1:\"9\";i:6;s:2:\"10\";i:7;s:2:\"11\";i:8;s:2:\"12\";i:9;s:2:\"13\";}s:30:\"cat_collection_list_to_display\";a:10:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"6\";i:3;s:1:\"7\";i:4;s:1:\"8\";i:5;s:1:\"9\";i:6;s:2:\"10\";i:7;s:2:\"11\";i:8;s:2:\"12\";i:9;s:2:\"13\";}}s:14:\"footer_details\";a:2:{s:27:\"footer_about_us_description\";s:21:\"Your description here\";s:13:\"follow_us_url\";a:7:{s:2:\"fb\";N;s:7:\"twitter\";N;s:8:\"linkedin\";N;s:8:\"dribbble\";N;s:11:\"google_plus\";N;s:9:\"instagram\";N;s:7:\"youtube\";N;}}}s:6:\"header\";s:9:\"ice-cream\";s:4:\"home\";s:8:\"customfy\";s:8:\"products\";s:5:\"crazy\";s:14:\"single_product\";s:5:\"crazy\";s:5:\"blogs\";s:5:\"crazy\";}', '2019-11-03 23:03:55', '2021-12-15 02:42:12'),
(6, '_permissions_files_list', 'a:38:{s:17:\"pages_list_access\";s:17:\"Pages list access\";s:21:\"add_edit_delete_pages\";s:21:\"Add/edit/delete pages\";s:17:\"list_blogs_access\";s:16:\"Blog list access\";s:20:\"add_edit_delete_blog\";s:20:\"Add/edit/delete blog\";s:18:\"blog_comments_list\";s:20:\"Blog comments access\";s:22:\"blog_categories_access\";s:31:\"Add/edit/delete blog categories\";s:23:\"testimonial_list_access\";s:23:\"Testimonial list access\";s:27:\"add_edit_delete_testimonial\";s:27:\"Add/edit/delete testimonial\";s:18:\"brands_list_access\";s:25:\"Manufacturers list access\";s:22:\"add_edit_delete_brands\";s:29:\"Add/edit/delete manufacturers\";s:15:\"manage_seo_full\";s:22:\"Manage SEO full access\";s:20:\"products_list_access\";s:20:\"Products list access\";s:23:\"add_edit_delete_product\";s:23:\"Add/edit/delete product\";s:25:\"product_categories_access\";s:35:\"Add/edit/delete products categories\";s:19:\"product_tags_access\";s:29:\"Add/edit/delete products tags\";s:25:\"product_attributes_access\";s:35:\"Add/edit/delete products attributes\";s:21:\"product_colors_access\";s:31:\"Add/edit/delete products colors\";s:20:\"product_sizes_access\";s:30:\"Add/edit/delete products sizes\";s:29:\"products_comments_list_access\";s:29:\"Products comments list access\";s:18:\"manage_orders_list\";s:25:\"Manage orders list access\";s:19:\"manage_reports_list\";s:26:\"Manage reports list access\";s:19:\"vendors_list_access\";s:19:\"Vendors list access\";s:23:\"vendors_withdraw_access\";s:23:\"Vendors withdraw access\";s:29:\"vendors_refund_request_access\";s:29:\"Vendors refund request access\";s:30:\"vendors_earning_reports_access\";s:30:\"Vendors earning reports access\";s:27:\"vendors_announcement_access\";s:27:\"Vendors announcement access\";s:15:\"vendor_settings\";s:8:\"settings\";s:28:\"vendors_packages_full_access\";s:33:\"Vendors packages menu full access\";s:28:\"vendors_packages_list_access\";s:28:\"Vendors packages list access\";s:30:\"vendors_packages_create_access\";s:30:\"Vendors packages create access\";s:34:\"manage_shipping_method_menu_access\";s:34:\"Manage shipping method full access\";s:33:\"manage_payment_method_menu_access\";s:33:\"Manage payment method full access\";s:36:\"manage_designer_elements_menu_access\";s:43:\"Manage custom designer elements full access\";s:25:\"manage_coupon_menu_access\";s:33:\"Manage coupon manager full access\";s:27:\"manage_settings_menu_access\";s:27:\"Manage settings full access\";s:36:\"manage_requested_product_menu_access\";s:35:\"Manage request products full access\";s:31:\"manage_subscription_menu_access\";s:31:\"Manage subscription full access\";s:28:\"manage_extra_features_access\";s:33:\"Manage extra features full access\";}', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(7, '_seo_data', 'a:1:{s:8:\"meta_tag\";a:2:{s:13:\"meta_keywords\";s:0:\"\";s:16:\"meta_description\";s:0:\"\";}}', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(8, '_subscription_data', 'a:1:{s:9:\"mailchimp\";a:2:{s:7:\"api_key\";s:0:\"\";s:7:\"list_id\";s:0:\"\";}}', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(9, '_subscription_settings_data', 'a:9:{s:23:\"subscription_visibility\";b:1;s:14:\"subscribe_type\";s:9:\"mailchimp\";s:17:\"subscribe_options\";s:10:\"name_email\";s:14:\"popup_bg_color\";s:6:\"f5f5f5\";s:13:\"popup_content\";s:0:\"\";s:18:\"popup_display_page\";a:2:{i:0;s:4:\"home\";i:1;s:4:\"shop\";}s:18:\"subscribe_btn_text\";s:13:\"Subscribe Now\";s:37:\"subscribe_popup_cookie_set_visibility\";b:1;s:31:\"subscribe_popup_cookie_set_text\";s:31:\"No thanks, i am not interested!\";}', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(10, '_vendor_settings_data', 'a:1:{s:17:\"term_n_conditions\";s:222:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.\";}', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(11, '_emails_notification_data', 'a:10:{s:9:\"new_order\";a:5:{s:14:\"enable_disable\";b:1;s:7:\"subject\";s:36:\"Your order receipt from #date_place#\";s:13:\"email_heading\";s:24:\"Thank you for your order\";s:13:\"body_bg_color\";s:7:\"#f5f5f5\";s:17:\"selected_template\";s:10:\"template-3\";}s:15:\"cancelled_order\";a:4:{s:14:\"enable_disable\";b:1;s:7:\"subject\";s:15:\"Cancelled order\";s:13:\"email_heading\";s:15:\"Cancelled order\";s:13:\"body_bg_color\";s:7:\"#f5f5f5\";}s:15:\"processed_order\";a:4:{s:14:\"enable_disable\";b:1;s:7:\"subject\";s:35:\"Order #order_id# has been Processed\";s:13:\"email_heading\";s:15:\"Processed order\";s:13:\"body_bg_color\";s:7:\"#f5f5f5\";}s:15:\"completed_order\";a:4:{s:14:\"enable_disable\";b:1;s:7:\"subject\";s:33:\"Your Order #order_id# is complete\";s:13:\"email_heading\";s:22:\"Your order is complete\";s:13:\"body_bg_color\";s:7:\"#f5f5f5\";}s:20:\"new_customer_account\";a:4:{s:14:\"enable_disable\";b:1;s:7:\"subject\";s:28:\"Successfully created account\";s:13:\"email_heading\";s:24:\"Customer account created\";s:13:\"body_bg_color\";s:7:\"#f5f5f5\";}s:18:\"vendor_new_account\";a:4:{s:14:\"enable_disable\";b:1;s:7:\"subject\";s:28:\"Successfully created account\";s:13:\"email_heading\";s:22:\"Vendor account created\";s:13:\"body_bg_color\";s:7:\"#f5f5f5\";}s:25:\"vendor_account_activation\";a:4:{s:14:\"enable_disable\";b:1;s:7:\"subject\";s:14:\"account status\";s:13:\"email_heading\";s:25:\"Vendor account activation\";s:13:\"body_bg_color\";s:7:\"#f5f5f5\";}s:23:\"vendor_withdraw_request\";a:4:{s:14:\"enable_disable\";b:1;s:7:\"subject\";s:40:\"Your Request for Withdrawal was Received\";s:13:\"email_heading\";s:16:\"Withdraw request\";s:13:\"body_bg_color\";s:7:\"#f5f5f5\";}s:33:\"vendor_withdraw_request_cancelled\";a:4:{s:14:\"enable_disable\";b:1;s:7:\"subject\";s:35:\"Withdraw request has been cancelled\";s:13:\"email_heading\";s:0:\"\";s:13:\"body_bg_color\";s:7:\"#f5f5f5\";}s:33:\"vendor_withdraw_request_completed\";a:4:{s:14:\"enable_disable\";b:1;s:7:\"subject\";s:35:\"Withdraw request has been completed\";s:13:\"email_heading\";s:0:\"\";s:13:\"body_bg_color\";s:7:\"#f5f5f5\";}}', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(12, '_menu_data', '[{\"status\":\"enable\",\"label\":\"home|simple##0\"},{\"status\":\"enable\",\"label\":\"collection|simple##0\"},{\"status\":\"enable\",\"label\":\"products|simple##0\"},{\"status\":\"disable\",\"label\":\"checkout|simple##0\"},{\"status\":\"disable\",\"label\":\"cart|simple##0\"},{\"status\":\"enable\",\"label\":\"blog|simple##0\"},{\"status\":\"enable\",\"label\":\"store_list|simple##0\"},{\"status\":\"enable\",\"label\":\"pages|simple##0\"}]', '2019-11-03 23:03:55', '2021-12-15 02:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `orders_items`
--

CREATE TABLE `orders_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_author_id` int(10) UNSIGNED NOT NULL,
  `post_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `post_status` int(10) UNSIGNED NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_author_id`, `post_content`, `post_title`, `post_slug`, `parent_id`, `post_status`, `post_type`, `created_at`, `updated_at`) VALUES
(1, 1, '&lt;p&gt;&lt;div style=&quot;margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; text-align: left; float: right; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;&quot;&gt;&lt;/div&gt;&lt;/p&gt;&lt;div style=&quot;margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;&quot;&gt;&lt;p style=&quot;margin: 0px 0px 15px; padding: 0px; text-align: justify;&quot;&gt;&lt;strong style=&quot;margin: 0px; padding: 0px;&quot;&gt;Lorem Ipsum&lt;/strong&gt;&lt;span&gt;&amp;nbsp;&lt;/span&gt;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;&lt;/div&gt;', 'Best Leather Bag', 'best-leather-bag', 0, 1, 'post-blog', '2021-12-15 02:28:00', '2021-12-15 02:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `post_extras`
--

CREATE TABLE `post_extras` (
  `post_extra_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `key_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_extras`
--

INSERT INTO `post_extras` (`post_extra_id`, `post_id`, `key_name`, `key_value`, `created_at`, `updated_at`) VALUES
(1, 1, '_featured_image', NULL, '2021-12-15 02:28:00', '2021-12-15 02:28:00'),
(2, 1, '_allow_max_number_characters_at_frontend', '200', '2021-12-15 02:28:00', '2021-12-15 02:28:00'),
(3, 1, '_allow_comments_at_frontend', 'yes', '2021-12-15 02:28:00', '2021-12-15 02:28:00'),
(4, 1, '_blog_seo_title', 'Best Leather Bag', '2021-12-15 02:28:00', '2021-12-15 02:28:00'),
(5, 1, '_blog_seo_url', 'best-leather-bag', '2021-12-15 02:28:00', '2021-12-15 02:28:00'),
(6, 1, '_blog_seo_description', 'Best Leather Bag', '2021-12-15 02:28:00', '2021-12-15 02:28:00'),
(7, 1, '_blog_seo_keywords', 'Best Leather Bag', '2021-12-15 02:28:00', '2021-12-15 02:28:00'),
(8, 1, '_count_visit', '1', '2021-12-15 03:08:53', '2021-12-15 03:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `sku` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular_price` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_qty` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_availability` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `author_id`, `content`, `title`, `slug`, `status`, `sku`, `regular_price`, `sale_price`, `price`, `stock_qty`, `stock_availability`, `type`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 1, '&lt;p&gt;&lt;strong style=&quot;margin: 0px; padding: 0px; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 'FRESH CABBAGE', 'fresh-cabbage', 1, 'cabb12', '21', '45', '21', '20', 'in_stock', 'simple_product', '', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(2, 1, '&lt;p&gt;&lt;strong style=&quot;margin: 0px; padding: 0px; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 'FRESH TOMATO', 'fresh-tomato', 1, 'tom2', '25', '50', '25', '50', 'in_stock', 'simple_product', '', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(3, 1, '', 'Red T-Shirt', 'red-t-shirt', 1, 'redT12', '20', '50', '20', '0', 'in_stock', 'simple_product', '', '2021-12-15 03:19:18', '2021-12-15 03:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_extras`
--

CREATE TABLE `product_extras` (
  `product_extra_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `key_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_extras`
--

INSERT INTO `product_extras` (`product_extra_id`, `product_id`, `key_name`, `key_value`, `created_at`, `updated_at`) VALUES
(1, 1, '_product_related_images_url', '{\"product_image\":\"\",\"product_gallery_images\":[],\"shop_banner_image\":\"\"}', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(2, 1, '_product_sale_price_start_date', '', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(3, 1, '_product_sale_price_end_date', '', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(4, 1, '_product_manage_stock', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(5, 1, '_product_manage_stock_back_to_order', 'not_allow', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(6, 1, '_product_extra_features', '&lt;strong style=&quot;margin: 0px; padding: 0px; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(7, 1, '_product_enable_as_recommended', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(8, 1, '_product_enable_as_features', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(9, 1, '_product_enable_as_latest', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(10, 1, '_product_enable_as_related', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(11, 1, '_product_enable_as_custom_design', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(12, 1, '_product_enable_as_selected_cat', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(13, 1, '_product_enable_taxes', 'no', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(14, 1, '_product_custom_designer_settings', 'a:3:{s:16:\"canvas_dimension\";a:3:{s:13:\"small_devices\";a:2:{s:5:\"width\";i:280;s:6:\"height\";i:300;}s:14:\"medium_devices\";a:2:{s:5:\"width\";i:480;s:6:\"height\";i:480;}s:13:\"large_devices\";a:2:{s:5:\"width\";i:500;s:6:\"height\";i:550;}}s:25:\"enable_layout_at_frontend\";s:2:\"no\";s:22:\"enable_global_settings\";s:2:\"no\";}', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(15, 1, '_product_custom_designer_data', NULL, '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(16, 1, '_product_enable_reviews', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(17, 1, '_product_enable_reviews_add_link_to_product_page', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(18, 1, '_product_enable_reviews_add_link_to_details_page', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(19, 1, '_product_enable_video_feature', 'no', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(20, 1, '_product_video_feature_display_mode', 'content', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(21, 1, '_product_video_feature_title', NULL, '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(22, 1, '_product_video_feature_panel_size', 'a:2:{s:5:\"width\";N;s:6:\"height\";N;}', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(23, 1, '_product_video_feature_source', '', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(24, 1, '_product_video_feature_source_embedded_code', NULL, '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(25, 1, '_product_video_feature_source_online_url', NULL, '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(26, 1, '_product_enable_manufacturer', 'no', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(27, 1, '_product_enable_visibility_schedule', 'no', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(28, 1, '_product_seo_title', 'FRESH CABBAGE', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(29, 1, '_product_seo_description', '', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(30, 1, '_product_seo_keywords', '', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(31, 1, '_product_compare_data', 'N;', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(32, 1, '_is_role_based_pricing_enable', 'yes', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(33, 1, '_role_based_pricing', 'a:3:{s:13:\"administrator\";a:2:{s:13:\"regular_price\";s:2:\"12\";s:10:\"sale_price\";s:2:\"13\";}s:9:\"site-user\";a:2:{s:13:\"regular_price\";s:2:\"12\";s:10:\"sale_price\";s:2:\"33\";}s:6:\"vendor\";a:2:{s:13:\"regular_price\";s:2:\"19\";s:10:\"sale_price\";s:2:\"27\";}}', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(34, 1, '_downloadable_product_files', 'a:0:{}', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(35, 1, '_downloadable_product_download_limit', '', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(36, 1, '_downloadable_product_download_expiry', '', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(37, 1, '_upsell_products', 'a:0:{}', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(38, 1, '_crosssell_products', 'a:0:{}', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(39, 1, '_selected_vendor', '1', '2021-12-15 03:09:17', '2021-12-15 03:15:09'),
(40, 2, '_product_related_images_url', '{\"product_image\":\"\",\"product_gallery_images\":[],\"shop_banner_image\":\"\"}', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(41, 2, '_product_sale_price_start_date', '', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(42, 2, '_product_sale_price_end_date', '', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(43, 2, '_product_manage_stock', 'yes', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(44, 2, '_product_manage_stock_back_to_order', 'not_allow', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(45, 2, '_product_extra_features', '&lt;p&gt;&lt;strong style=&quot;margin: 0px; padding: 0px; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(46, 2, '_product_enable_as_recommended', 'yes', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(47, 2, '_product_enable_as_features', 'yes', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(48, 2, '_product_enable_as_latest', 'yes', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(49, 2, '_product_enable_as_related', 'yes', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(50, 2, '_product_enable_as_custom_design', 'yes', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(51, 2, '_product_enable_as_selected_cat', 'yes', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(52, 2, '_product_enable_taxes', 'no', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(53, 2, '_product_custom_designer_settings', 'a:3:{s:16:\"canvas_dimension\";a:3:{s:13:\"small_devices\";a:2:{s:5:\"width\";i:280;s:6:\"height\";i:300;}s:14:\"medium_devices\";a:2:{s:5:\"width\";i:480;s:6:\"height\";i:480;}s:13:\"large_devices\";a:2:{s:5:\"width\";i:500;s:6:\"height\";i:550;}}s:25:\"enable_layout_at_frontend\";s:2:\"no\";s:22:\"enable_global_settings\";s:2:\"no\";}', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(54, 2, '_product_custom_designer_data', NULL, '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(55, 2, '_product_enable_reviews', 'yes', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(56, 2, '_product_enable_reviews_add_link_to_product_page', 'yes', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(57, 2, '_product_enable_reviews_add_link_to_details_page', 'yes', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(58, 2, '_product_enable_video_feature', 'no', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(59, 2, '_product_video_feature_display_mode', 'content', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(60, 2, '_product_video_feature_title', NULL, '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(61, 2, '_product_video_feature_panel_size', 'a:2:{s:5:\"width\";N;s:6:\"height\";N;}', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(62, 2, '_product_video_feature_source', '', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(63, 2, '_product_video_feature_source_embedded_code', NULL, '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(64, 2, '_product_video_feature_source_online_url', NULL, '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(65, 2, '_product_enable_manufacturer', 'no', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(66, 2, '_product_enable_visibility_schedule', 'no', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(67, 2, '_product_seo_title', 'FRESH TOMATO', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(68, 2, '_product_seo_description', '', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(69, 2, '_product_seo_keywords', '', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(70, 2, '_product_compare_data', 'N;', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(71, 2, '_is_role_based_pricing_enable', 'no', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(72, 2, '_role_based_pricing', 'a:3:{s:13:\"administrator\";a:2:{s:13:\"regular_price\";N;s:10:\"sale_price\";s:0:\"\";}s:9:\"site-user\";a:2:{s:13:\"regular_price\";N;s:10:\"sale_price\";s:0:\"\";}s:6:\"vendor\";a:2:{s:13:\"regular_price\";N;s:10:\"sale_price\";s:0:\"\";}}', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(73, 2, '_downloadable_product_files', 'a:0:{}', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(74, 2, '_downloadable_product_download_limit', '', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(75, 2, '_downloadable_product_download_expiry', '', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(76, 2, '_upsell_products', 'a:0:{}', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(77, 2, '_crosssell_products', 'a:0:{}', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(78, 2, '_selected_vendor', '1', '2021-12-15 03:17:25', '2021-12-15 03:17:25'),
(79, 3, '_product_related_images_url', '{\"product_image\":\"\",\"product_gallery_images\":[],\"shop_banner_image\":\"\"}', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(80, 3, '_product_sale_price_start_date', '', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(81, 3, '_product_sale_price_end_date', '', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(82, 3, '_product_manage_stock', 'no', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(83, 3, '_product_manage_stock_back_to_order', 'not_allow', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(84, 3, '_product_extra_features', '', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(85, 3, '_product_enable_as_recommended', 'yes', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(86, 3, '_product_enable_as_features', 'yes', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(87, 3, '_product_enable_as_latest', 'yes', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(88, 3, '_product_enable_as_related', 'yes', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(89, 3, '_product_enable_as_custom_design', 'yes', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(90, 3, '_product_enable_as_selected_cat', 'yes', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(91, 3, '_product_enable_taxes', 'no', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(92, 3, '_product_custom_designer_settings', 'a:3:{s:16:\"canvas_dimension\";a:3:{s:13:\"small_devices\";a:2:{s:5:\"width\";i:280;s:6:\"height\";i:300;}s:14:\"medium_devices\";a:2:{s:5:\"width\";i:480;s:6:\"height\";i:480;}s:13:\"large_devices\";a:2:{s:5:\"width\";i:500;s:6:\"height\";i:550;}}s:25:\"enable_layout_at_frontend\";s:2:\"no\";s:22:\"enable_global_settings\";s:2:\"no\";}', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(93, 3, '_product_custom_designer_data', NULL, '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(94, 3, '_product_enable_reviews', 'yes', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(95, 3, '_product_enable_reviews_add_link_to_product_page', 'yes', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(96, 3, '_product_enable_reviews_add_link_to_details_page', 'yes', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(97, 3, '_product_enable_video_feature', 'no', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(98, 3, '_product_video_feature_display_mode', 'content', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(99, 3, '_product_video_feature_title', NULL, '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(100, 3, '_product_video_feature_panel_size', 'a:2:{s:5:\"width\";N;s:6:\"height\";N;}', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(101, 3, '_product_video_feature_source', '', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(102, 3, '_product_video_feature_source_embedded_code', NULL, '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(103, 3, '_product_video_feature_source_online_url', NULL, '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(104, 3, '_product_enable_manufacturer', 'no', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(105, 3, '_product_enable_visibility_schedule', 'no', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(106, 3, '_product_seo_title', 'Red T-Shirt', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(107, 3, '_product_seo_description', '', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(108, 3, '_product_seo_keywords', '', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(109, 3, '_product_compare_data', 'N;', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(110, 3, '_is_role_based_pricing_enable', 'no', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(111, 3, '_role_based_pricing', 'a:3:{s:13:\"administrator\";a:2:{s:13:\"regular_price\";N;s:10:\"sale_price\";s:0:\"\";}s:9:\"site-user\";a:2:{s:13:\"regular_price\";N;s:10:\"sale_price\";s:0:\"\";}s:6:\"vendor\";a:2:{s:13:\"regular_price\";N;s:10:\"sale_price\";s:0:\"\";}}', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(112, 3, '_downloadable_product_files', 'a:0:{}', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(113, 3, '_downloadable_product_download_limit', '', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(114, 3, '_downloadable_product_download_expiry', '', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(115, 3, '_upsell_products', 'a:0:{}', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(116, 3, '_crosssell_products', 'a:0:{}', '2021-12-15 03:19:18', '2021-12-15 03:19:18'),
(117, 3, '_selected_vendor', '1', '2021-12-15 03:19:18', '2021-12-15 03:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `request_products`
--

CREATE TABLE `request_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(2, 'Site User', 'site-user', '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(3, 'Vendor', 'vendor', '2019-11-03 23:03:55', '2019-11-03 23:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-11-03 23:03:55', '2019-11-03 23:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `save_custom_designs`
--

CREATE TABLE `save_custom_designs` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `design_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `name`, `slug`, `type`, `parent`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Baby Products', 'baby-products', 'product_cat', 0, 1, '2021-12-15 02:22:27', '2021-12-15 02:22:27'),
(2, 'Computing', 'computing', 'product_cat', 0, 1, '2021-12-15 02:24:51', '2021-12-15 02:24:51'),
(3, 'Others', 'others', 'blog_cat', 0, 1, '2021-12-15 02:26:02', '2021-12-15 02:26:02'),
(4, 'Branding', 'branding', 'blog_cat', 0, 1, '2021-12-15 02:26:21', '2021-12-15 02:26:21'),
(5, 'Travelling', 'travelling', 'blog_cat', 0, 1, '2021-12-15 02:26:40', '2021-12-15 02:26:40'),
(6, 'Electronics', 'electronics', 'product_cat', 0, 1, '2021-12-15 02:27:12', '2021-12-15 02:27:12'),
(7, 'Fashion', 'fashion', 'product_cat', 0, 1, '2021-12-15 02:31:28', '2021-12-15 02:31:28'),
(8, 'Gaming', 'gaming', 'product_cat', 0, 1, '2021-12-15 02:32:26', '2021-12-15 02:32:26'),
(9, 'GARDEN & OUTDOORS', 'garden-outdoors', 'product_cat', 0, 1, '2021-12-15 02:34:29', '2021-12-15 02:34:29'),
(10, 'Health & Beauty', 'health-beauty', 'product_cat', 0, 1, '2021-12-15 02:35:15', '2021-12-15 02:35:15'),
(11, 'Home & Office', 'home-office', 'product_cat', 0, 1, '2021-12-15 02:35:54', '2021-12-15 02:35:54'),
(12, 'Phones & Tablets', 'phones-and-tablets', 'product_cat', 0, 1, '2021-12-15 02:36:50', '2021-12-15 02:36:50'),
(13, 'Supermarket', 'supermarket', 'product_cat', 0, 1, '2021-12-15 02:37:25', '2021-12-15 02:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `term_extras`
--

CREATE TABLE `term_extras` (
  `term_extra_id` int(10) UNSIGNED NOT NULL,
  `term_id` int(10) UNSIGNED NOT NULL,
  `key_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `term_extras`
--

INSERT INTO `term_extras` (`term_extra_id`, `term_id`, `key_name`, `key_value`, `created_at`, `updated_at`) VALUES
(1, 1, '_category_description', 'Baby Products', '2021-12-15 02:22:27', '2021-12-15 02:22:27'),
(2, 1, '_category_img_url', NULL, '2021-12-15 02:22:27', '2021-12-15 02:22:27'),
(3, 2, '_category_description', 'computing', '2021-12-15 02:24:51', '2021-12-15 02:24:51'),
(4, 2, '_category_img_url', NULL, '2021-12-15 02:24:51', '2021-12-15 02:24:51'),
(5, 3, '_category_description', '', '2021-12-15 02:26:02', '2021-12-15 02:26:02'),
(6, 3, '_category_img_url', NULL, '2021-12-15 02:26:02', '2021-12-15 02:26:02'),
(7, 4, '_category_description', '', '2021-12-15 02:26:21', '2021-12-15 02:26:21'),
(8, 4, '_category_img_url', NULL, '2021-12-15 02:26:21', '2021-12-15 02:26:21'),
(9, 5, '_category_description', '', '2021-12-15 02:26:40', '2021-12-15 02:26:40'),
(10, 5, '_category_img_url', NULL, '2021-12-15 02:26:40', '2021-12-15 02:26:40'),
(11, 6, '_category_description', 'electronics', '2021-12-15 02:27:12', '2021-12-15 02:27:12'),
(12, 6, '_category_img_url', NULL, '2021-12-15 02:27:12', '2021-12-15 02:27:12'),
(13, 7, '_category_description', 'fashion', '2021-12-15 02:31:28', '2021-12-15 02:31:28'),
(14, 7, '_category_img_url', NULL, '2021-12-15 02:31:28', '2021-12-15 02:31:28'),
(15, 8, '_category_description', 'gaming', '2021-12-15 02:32:26', '2021-12-15 02:32:26'),
(16, 8, '_category_img_url', NULL, '2021-12-15 02:32:26', '2021-12-15 02:32:26'),
(17, 9, '_category_description', 'garden & outdoors', '2021-12-15 02:34:29', '2021-12-15 02:34:29'),
(18, 9, '_category_img_url', NULL, '2021-12-15 02:34:29', '2021-12-15 02:34:29'),
(19, 10, '_category_description', 'health and beauty', '2021-12-15 02:35:15', '2021-12-15 02:35:15'),
(20, 10, '_category_img_url', NULL, '2021-12-15 02:35:15', '2021-12-15 02:35:15'),
(21, 11, '_category_description', 'home and office', '2021-12-15 02:35:55', '2021-12-15 02:35:55'),
(22, 11, '_category_img_url', NULL, '2021-12-15 02:35:55', '2021-12-15 02:35:55'),
(23, 12, '_category_description', 'phones and tablets', '2021-12-15 02:36:50', '2021-12-15 02:36:50'),
(24, 12, '_category_img_url', NULL, '2021-12-15 02:36:50', '2021-12-15 02:36:50'),
(25, 13, '_category_description', 'supermarket', '2021-12-15 02:37:25', '2021-12-15 02:37:25'),
(26, 13, '_category_img_url', NULL, '2021-12-15 02:37:25', '2021-12-15 02:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_photo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` int(10) UNSIGNED NOT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `display_name`, `name`, `email`, `password`, `user_photo_url`, `user_status`, `secret_key`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$wHYUqOGyum4NsRANVaurle.Tgp6SFcugHuIlTWn7OfG1eYHBFd4Kq', '', 1, '$2y$10$xW53MN8gc4td4lkT1vNbGe1/5ldF6hJC7oUWTwVH6qTiBHdpXYMAq', '2019-11-03 23:03:55', '2019-11-03 23:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `users_custom_designs`
--

CREATE TABLE `users_custom_designs` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `access_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `design_images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `design_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `user_id`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"profile_details\":{\"store_name\":\"admin\",\"address_line_1\":\"address 1\",\"address_line_2\":\"address 2\",\"city\":\"city\",\"state\":\"state\",\"country\":\"country\",\"zip_postal_code\":2210,\"phone\":123456},\"general_details\":{\"cover_img\":\"\",\"vendor_home_page_cats\":\"\",\"google_map_app_key\":\"\",\"latitude\":\"-25.363\",\"longitude\":\"131.044\"},\"social_media\":{\"fb_follow_us_url\":\"\",\"twitter_follow_us_url\":\"\",\"linkedin_follow_us_url\":\"\",\"dribbble_follow_us_url\":\"\",\"google_plus_follow_us_url\":\"\",\"instagram_follow_us_url\":\"\",\"youtube_follow_us_url\":\"\"}}', '2019-11-03 23:03:55', '2019-11-03 23:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_role_permissions`
--

CREATE TABLE `user_role_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `permissions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role_permissions`
--

INSERT INTO `user_role_permissions` (`id`, `role_id`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 1, 'a:44:{i:0;s:17:\"manage_pages_full\";i:1;s:17:\"pages_list_access\";i:2;s:21:\"add_edit_delete_pages\";i:3;s:24:\"manage_blog_manager_full\";i:4;s:17:\"list_blogs_access\";i:5;s:20:\"add_edit_delete_blog\";i:6;s:18:\"blog_comments_list\";i:7;s:22:\"blog_categories_access\";i:8;s:23:\"manage_testimonial_full\";i:9;s:23:\"testimonial_list_access\";i:10;s:27:\"add_edit_delete_testimonial\";i:11;s:18:\"manage_brands_full\";i:12;s:18:\"brands_list_access\";i:13;s:22:\"add_edit_delete_brands\";i:14;s:15:\"manage_seo_full\";i:15;s:20:\"manage_products_full\";i:16;s:20:\"products_list_access\";i:17;s:23:\"add_edit_delete_product\";i:18;s:25:\"product_categories_access\";i:19;s:19:\"product_tags_access\";i:20;s:25:\"product_attributes_access\";i:21;s:21:\"product_colors_access\";i:22;s:20:\"product_sizes_access\";i:23;s:29:\"products_comments_list_access\";i:24;s:18:\"manage_orders_list\";i:25;s:19:\"manage_reports_list\";i:26;s:19:\"vendors_access_full\";i:27;s:19:\"vendors_list_access\";i:28;s:23:\"vendors_withdraw_access\";i:29;s:29:\"vendors_refund_request_access\";i:30;s:30:\"vendors_earning_reports_access\";i:31;s:27:\"vendors_announcement_access\";i:32;s:15:\"vendor_settings\";i:33;s:28:\"vendors_packages_full_access\";i:34;s:28:\"vendors_packages_list_access\";i:35;s:30:\"vendors_packages_create_access\";i:36;s:34:\"manage_shipping_method_menu_access\";i:37;s:33:\"manage_payment_method_menu_access\";i:38;s:36:\"manage_designer_elements_menu_access\";i:39;s:25:\"manage_coupon_menu_access\";i:40;s:27:\"manage_settings_menu_access\";i:41;s:36:\"manage_requested_product_menu_access\";i:42;s:31:\"manage_subscription_menu_access\";i:43;s:28:\"manage_extra_features_access\";}', '2019-11-03 23:03:56', '2019-11-03 23:03:56'),
(2, 3, 'a:13:{i:0;s:15:\"manage_seo_full\";i:1;s:20:\"manage_products_full\";i:2;s:20:\"products_list_access\";i:3;s:23:\"add_edit_delete_product\";i:4;s:29:\"products_comments_list_access\";i:5;s:18:\"manage_orders_list\";i:6;s:19:\"manage_reports_list\";i:7;s:34:\"manage_shipping_method_menu_access\";i:8;s:33:\"manage_payment_method_menu_access\";i:9;s:25:\"manage_coupon_menu_access\";i:10;s:23:\"vendors_withdraw_access\";i:11;s:36:\"manage_requested_product_menu_access\";i:12;s:28:\"manage_extra_features_access\";}', '2019-11-03 23:03:56', '2019-11-03 23:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_announcements`
--

CREATE TABLE `vendor_announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_orders`
--

CREATE TABLE `vendor_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL,
  `order_total` double(11,2) NOT NULL,
  `net_amount` double(11,2) NOT NULL,
  `order_status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_packages`
--

CREATE TABLE `vendor_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_packages`
--

INSERT INTO `vendor_packages` (`id`, `package_type`, `options`, `created_at`, `updated_at`) VALUES
(1, 'Default', '{\"max_number_product\":100,\"show_map_on_store_page\":true,\"show_social_media_follow_btn_on_store_page\":true,\"show_social_media_share_btn_on_store_page\":true,\"show_contact_form_on_store_page\":true,\"vendor_expired_date_type\":\"lifetime\",\"vendor_custom_expired_date\":\"\",\"vendor_commission\":20,\"min_withdraw_amount\":50}', '2019-11-03 23:03:55', '2019-11-03 23:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_totals`
--

CREATE TABLE `vendor_totals` (
  `id` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL,
  `totals` double(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_withdraws`
--

CREATE TABLE `vendor_withdraws` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `custom_amount` double(8,2) NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_tokens`
--
ALTER TABLE `api_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_currency_values`
--
ALTER TABLE `custom_currency_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_extras`
--
ALTER TABLE `download_extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_languages`
--
ALTER TABLE `manage_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `object_relationships`
--
ALTER TABLE `object_relationships`
  ADD PRIMARY KEY (`term_id`,`object_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_extras`
--
ALTER TABLE `post_extras`
  ADD PRIMARY KEY (`post_extra_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_extras`
--
ALTER TABLE `product_extras`
  ADD PRIMARY KEY (`product_extra_id`);

--
-- Indexes for table `request_products`
--
ALTER TABLE `request_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_custom_designs`
--
ALTER TABLE `save_custom_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `term_extras`
--
ALTER TABLE `term_extras`
  ADD PRIMARY KEY (`term_extra_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_custom_designs`
--
ALTER TABLE `users_custom_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role_permissions`
--
ALTER TABLE `user_role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_announcements`
--
ALTER TABLE `vendor_announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_orders`
--
ALTER TABLE `vendor_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_packages`
--
ALTER TABLE `vendor_packages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendor_packages_package_type_unique` (`package_type`);

--
-- Indexes for table `vendor_totals`
--
ALTER TABLE `vendor_totals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_withdraws`
--
ALTER TABLE `vendor_withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_tokens`
--
ALTER TABLE `api_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_currency_values`
--
ALTER TABLE `custom_currency_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `download_extras`
--
ALTER TABLE `download_extras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_languages`
--
ALTER TABLE `manage_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders_items`
--
ALTER TABLE `orders_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_extras`
--
ALTER TABLE `post_extras`
  MODIFY `post_extra_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_extras`
--
ALTER TABLE `product_extras`
  MODIFY `product_extra_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `request_products`
--
ALTER TABLE `request_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `save_custom_designs`
--
ALTER TABLE `save_custom_designs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `term_extras`
--
ALTER TABLE `term_extras`
  MODIFY `term_extra_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_custom_designs`
--
ALTER TABLE `users_custom_designs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role_permissions`
--
ALTER TABLE `user_role_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor_announcements`
--
ALTER TABLE `vendor_announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_orders`
--
ALTER TABLE `vendor_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_packages`
--
ALTER TABLE `vendor_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_totals`
--
ALTER TABLE `vendor_totals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_withdraws`
--
ALTER TABLE `vendor_withdraws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
