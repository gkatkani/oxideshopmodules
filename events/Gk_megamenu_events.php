<?php
namespace OxidEsales\gkmegamenu;
class Gk_megamenu_events
{
    public static function onactivate(){

        $oLang      = oxregistry::getLang();
        $aLangs     = $oLang->getAllShopLanguageIds();
        $sShopId    = oxregistry::getConfig()->getShopId();
        $oDb        = oxDb::getDb();

        $create_sql = "CREATE TABLE ox_gkmegamenu (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                status TINYINT(2) ,
                shop_id TINYINT(2) ,
                reg_date TIMESTAMP
                )";
        $oDb->execute( $create_sql );

       
    }
    public static function ondeactivate(){
        
    }
    
    
}
