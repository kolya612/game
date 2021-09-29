<?php
/**
 * Created by:
 * User: tricktrick.
 * Email: alexeymarkov.x7@gmail.com
 * Date: 22/02/17
 * Time: 10:32
 */

namespace vendor\wbp\multipleCountrySelector;


use wbp\dumper\Dumper;
use yii\base\InvalidParamException;

class CountryStateHelper
{

    public static function getCountryTitle($id)
    {
        foreach (self::getObjectsCountriesState() as $object) {
            if($object->id == $id) return $object->title;
        }
        return null;
    }

    public static function getStateTitle($data)
    {
        if(is_array($data)){
            foreach (self::getObjectsCountriesState() as $object) {
                if($object->code == $data['country_id']){
                    foreach ($object->regions as $region) {
                        if($region->code == $data['state_id']){
                            return $region->title;
                        }
                    }
                }
            }

            return null;
        }
        throw new InvalidParamException("Path valid params");
    }

    public static function getCountries()
    {
        $countries[] = 'Country';
        $permitted = ['US','CA'];
        $object = self::getObjectsCountriesState();

        foreach ($object as $country) {
            if ( in_array($country->code, $permitted)  ) {
                $countries[$country->code] = $country->title;
            }
        }

        return $countries;
    }

    public static function getStatesForCountry($country_code)
    {
        $object = self::getObjectsCountriesState();
        $result[] = 'State';

        foreach ($object as $country) {
            if ( $country->code == $country_code && !empty($country->regions)) {
                $result = array_merge($result,self::formatRegionsToArray($country->regions));
            }
        }

        return $result;
    }

    protected static function formatRegionsToArray($regions)
    {
        $result = [];
        foreach ($regions as $region) {
            $result[$region->code] = $region->title;
        }

        return $result;
    }

    protected static function getObjectsCountriesState()
    {
        $path = \Yii::getAlias('@wbp') . '/multipleCountrySelector/files/countries.json';
        $file = file_get_contents($path);
        return json_decode($file) ? json_decode($file) : null ;
    }
}