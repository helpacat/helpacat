<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function catfinder_install() {
	global $wpdb;
	// create db structure
    $wq_query = "CREATE TABLE {$wpdb->cf_pets} (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `pet_name` VARCHAR( 64 ) NOT NULL ,
    `pet_description` TEXT NOT NULL ,
    `pet_age` VARCHAR( 64 ) NOT NULL ,
    `pet_gender` ENUM( 'male', 'female' ) NOT NULL ,
    `pet_color` VARCHAR( 255 ) NOT NULL ,
    `pet_breed` VARCHAR( 255 ) NOT NULL ,
    `city` VARCHAR( 255 ) NOT NULL ,
    `owner_id` INT NOT NULL ,
    `owner_email` VARCHAR( 255 ) NOT NULL COMMENT 'will be shown' ,
    `owner_phone` VARCHAR( 16 ) NOT NULL ,
    `date_add` DATETIME NOT NULL ,
    `date_modified` DATETIME NOT NULL ,
    `date_expiry` DATETIME NOT NULL ,
    `is_active` ENUM( '0', '1' ) NOT NULL ,
    PRIMARY KEY  (`id`)
    ) ENGINE = MYISAM ;\n";
        
	add_option("catfinder_db_version", WP_CATFINDER_VERSION);
}