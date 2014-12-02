<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;


class BrandingTheme extends Remote\Object {

    /**
     * Xero identifier
     *
     * @property string BrandingThemeID
     */

    /**
     * Name of branding theme
     *
     * @property string Name
     */

    /**
     * Integer – ranked order of branding theme. The default branding theme has a value of 0
     *
     * @property int SortOrder
     */

    /**
     * UTC timestamp of creation date of branding theme
     *
     * @property \DateTime CreatedDateUTC
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    */
    public static function getResourceURI(){
        return 'BrandingThemes';
    }


    /*
    * Get the root node name.  Just the unqualified classname
    */
    public static function getRootNodeName(){
        return 'BrandingTheme';
    }


    /*
    * Get the guid property
    */
    public static function getGUIDProperty(){
        return 'BrandingThemeID';
    }


    /*
    * Get the stem of the API (core.xro) etc
    */
    public static function getAPIStem(){
        return Remote\URL::API_CORE;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
            Remote\Request::METHOD_GET
        );
    }

    public static function getProperties(){
        return array(
            'BrandingThemeID',
            'Name',
            'SortOrder',
            'CreatedDateUTC'
        );
    }


    /**
     * @return string
     */
    public function getBrandingThemeID(){
        return $this->_data['BrandingThemeID'];
    }

    /**
     * @param string $value
     * @return BrandingTheme
     */
    public function setBrandingThemeID($value){
        $this->_data['BrandingThemeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->_data['Name'];
    }

    /**
     * @param string $value
     * @return BrandingTheme
     */
    public function setName($value){
        $this->_data['Name'] = $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder(){
        return $this->_data['SortOrder'];
    }

    /**
     * @param int $value
     * @return BrandingTheme
     */
    public function setSortOrder($value){
        $this->_data['SortOrder'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDateUTC(){
        return $this->_data['CreatedDateUTC'];
    }

    /**
     * @param \DateTime $value
     * @return BrandingTheme
     */
    public function setCreatedDateUTC(\DateTime $value){
        $this->_data['CreatedDateUTC'] = $value;
        return $this;
    }


}