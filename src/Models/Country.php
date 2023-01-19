<?php

namespace Meteor\Country\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Meteor\Country\Base\Model;
use Meteor\Country\Facades\Negara;

class Country extends Model
{
    use HasFactory;

    /**
     * The guarded attributes on the model.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the country detail record associated with the country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detail()
    {
        return $this->hasOne(Negara::countryDetailModel());
    }

    /**
     * Get the country currency record associated with the country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function currency()
    {
        return $this->hasOne(Negara::countryCurrencyModel());
    }

    /**
     * Get all the states that belong to the country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states()
    {
        return $this->hasMany(Negara::stateModel());
    }
}
