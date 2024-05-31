<?php
/**
 * Plugin Name: My Plugin
 * Description: This is my new custom plugin
 * Author: Hawana Tamang
 * Version: 1.0
 */

if(!defined('ABSPATH')){
    exit();
}

function my_plugin_activation(){
    global $wpdb, $table_prefix;
    $wp_emp = $table_prefix . 'emp';

    //create table query
    $create_query = "CREATE TABLE IF NOT EXISTS `$wp_emp` (`ID` INT NULL AUTO_INCREMENT , `name` VARCHAR(55) NOT NULL , `email` VARCHAR(100) NOT NULL , `status` INT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
    $wpdb->query($create_query);


    //Insert table in traditional way
    //$insert_query = "INSERT INTO `$wp_emp` (`name`,`email`,`status`) VALUES ('Hawana','hawanatamang@gmail.com',1);";

    //Insertion of data in table using wordpress function

    //Associative array data
    $data = array('name'=>'Hawana','email'=>'hawanatamang@gmail.com','status'=>1);
    $wpdb->insert($wp_emp,$data);
    
}
register_activation_hook(__FILE__,'my_plugin_activation');

function my_plugin_deactivation(){
    global $wpdb,$table_prefix;
    $wp_emp = $table_prefix . 'emp';
    $truncate_query = "TRUNCATE `$wp_emp`";
    $wpdb->query($truncate_query);
}
register_deactivation_hook(__FILE__,'my_plugin_deactivation');

//Add shortcode
function my_sc_function($attribute){
    global $wpdb, $table_prefix;
    $wp_emp = $table_prefix . 'emp';

    $select_query = "SELECT * from `$wp_emp`";
    $result = $wpdb->get_results($select_query);
    foreach($result as $value){
        $attribute = shortcode_atts(array(
            'id' => $value->ID,
            'name' => $value->name,
            'email' => $value->email,
            'status' => $value->status
        ),$attribute);
    }

    return "Result: " . $attribute['id'] . " " . $attribute['name'] . " " . $attribute['email'] . $attribute['status'];

}
add_shortcode('my-sc','my_sc_function');