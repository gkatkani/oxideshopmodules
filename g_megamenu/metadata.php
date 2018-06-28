<?php


/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */


$aModule = array(
    'id'          => 'g_megamenu',
    'title'       => 'g_megamenu extend filter',
    'description' =>  array(
        'de'=>'Erweiterter Attributfilter',
        'en'=>'Extended Attribute Filter',
    ),
    'thumbnail'    => 'logo.jpg',
    'version'     => '1.0.0',
    'url'         => 'http://gauravkatkani.blogspot.com',
    'email'       => 'gkatkani@gmail.com',
    'author'      => 'gauravkatkani',
    
    'files'      => array(
       
        'gk_megamenu_events' => 'oxideshopmodule/g_megamenu/events/Gk_megamenu_events.php',
    ),
    
    'events'       => array(
        'onActivate'   => 'gk_megamenu_events::onactivate',
        'onDeactivate' => 'gk_megamenu_events::ondeactivate'
    ),
);