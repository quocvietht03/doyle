<?php
require_once 'socials.php';
require_once 'post_list.php';
require_once 'news_tabs.php';
require_once 'icon_info.php';
require_once 'mini_account.php';
require_once 'mini_search.php';
if (class_exists('Woocommerce')) {
	require_once 'mini_cart.php';
}