<?php

// Security code for uninstallation
if(!defined('WP_UNINSTALL_PLUGIN')){
    die();
}

global $wpdb,$table_prefix;
$wp_emp = $table_prefix . 'emp';
$drop_query = "DROP TABLE `$wp_emp`";
$wpdb->query($drop_query);