<?php

namespace Meteor\Country;

class Negara
{
    /**
     * The country model class name.
     *
     * @var string
     */
    public static $countryModel = 'Meteor\Country\Models\Country';

    /**
     * The state model class name.
     *
     * @var string
     */
    public static $stateModel = 'Meteor\Country\Models\State';

    /**
     * The countryCurrency model class name.
     *
     * @var string
     */
    public static $countryCurrencyModel = 'Meteor\Country\Models\CountryCurrency';

    /**
     * The countryDetail model class name.
     *
     * @var string
     */
    public static $countryDetailModel = 'Meteor\Country\Models\CountryDetail';

    /**
     * Indicates if Country migrations will be run.
     *
     * @var bool
     */
    public static $runsMigrations = true;

    /**
     * Set the country model class name.
     *
     * @param  string  $countryModel
     * @return void
     */
    public static function useCountryModel($countryModel)
    {
        static::$countryModel = $countryModel;
    }

    /**
     * Get the country model class name.
     *
     * @return string
     */
    public static function countryModel()
    {
        return static::$countryModel;
    }

    /**
     * Get a new country model instance.
     *
     * @return \Meteor\Country\Models\Country
     */
    public static function country()
    {
        return new static::$countryModel;
    }

    /**
     * Set the state model class name.
     *
     * @param  string  $stateModel
     * @return void
     */
    public static function useStateModel($stateModel)
    {
        static::$stateModel = $stateModel;
    }

    /**
     * Get the state model class name.
     *
     * @return string
     */
    public static function stateModel()
    {
        return static::$stateModel;
    }

    /**
     * Get a new state model instance.
     *
     * @return \Meteor\Country\Models\State
     */
    public static function state()
    {
        return new static::$stateModel;
    }

    /**
     * Set the country currency model class name.
     *
     * @param  string  $countryCurrencyModel
     * @return void
     */
    public static function useCountryCurrencyModel($countryCurrencyModel)
    {
        static::$countryCurrencyModel = $countryCurrencyModel;
    }

    /**
     * Get the country currency model class name.
     *
     * @return string
     */
    public static function countryCurrencyModel()
    {
        return static::$countryCurrencyModel;
    }

    /**
     * Get a new country currency model instance.
     *
     * @return \Meteor\Country\Models\CountryCurrency
     */
    public static function countryCurrency()
    {
        return new static::$countryCurrencyModel;
    }

    /**
     * Set the country detail model class name.
     *
     * @param  string  $countryModel
     * @return void
     */
    public static function useCountryDetailModel($countryDetailModel)
    {
        static::$countryDetailModel = $countryDetailModel;
    }

    /**
     * Get the country model class name.
     *
     * @return string
     */
    public static function countryDetailModel()
    {
        return static::$countryDetailModel;
    }

    /**
     * Get a new country detail model instance.
     *
     * @return \Meteor\Country\Models\CountryDetail
     */
    public static function countryDetail()
    {
        return new static::$countryDetailModel;
    }

    /**
     * Configure Country to not register its migrations.
     *
     * @return static
     */
    public static function ignoreMigrations()
    {
        static::$runsMigrations = false;

        return new static;
    }
}
