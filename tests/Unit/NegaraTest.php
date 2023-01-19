<?php

namespace Meteor\Country\Tests\Unit;

use Meteor\Country\Facades\Negara;
use Meteor\Country\Models\Country;
use Meteor\Country\Models\CountryCurrency;
use Meteor\Country\Models\CountryDetail;
use Meteor\Country\Models\State;
use Meteor\Country\Tests\TestCase;

class NegaraTest extends TestCase
{
    public function test_country_instance_can_be_created()
    {
        $country = Negara::country();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertInstanceOf(Negara::countryModel(), $country);
    }

    public function test_state_instance_can_be_created()
    {
        $state = Negara::state();

        $this->assertInstanceOf(State::class, $state);
        $this->assertInstanceOf(Negara::stateModel(), $state);
    }

    public function test_country_currency_instance_can_be_created()
    {
        $currency = Negara::countryCurrency();

        $this->assertInstanceOf(CountryCurrency::class, $currency);
        $this->assertInstanceOf(Negara::countryCurrencyModel(), $currency);
    }

    public function test_country_detail_instance_can_be_created()
    {
        $detail = Negara::countryDetail();

        $this->assertInstanceOf(CountryDetail::class, $detail);
        $this->assertInstanceOf(Negara::countryDetailModel(), $detail);
    }

    public function test_country_model_can_be_set()
    {
        Negara::useCountryModel(Country::class);

        $this->assertEquals(Country::class, Negara::countryModel());
    }

    public function test_state_model_can_be_set()
    {
        Negara::useStateModel(State::class);

        $this->assertEquals(State::class, Negara::stateModel());
    }

    public function test_country_currency_model_can_be_set()
    {
        Negara::useCountryCurrencyModel(CountryCurrency::class);

        $this->assertEquals(CountryCurrency::class, Negara::countryCurrencyModel());
    }

    public function test_country_detail_model_can_be_set()
    {
        Negara::useCountryDetailModel(CountryDetail::class);

        $this->assertEquals(CountryDetail::class, Negara::countryDetailModel());
    }
}
