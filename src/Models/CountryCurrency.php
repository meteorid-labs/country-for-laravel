<?php

namespace Meteor\Country\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Meteor\Country\Base\Model;
use Meteor\Country\Facades\Negara;

class CountryCurrency extends Model
{
    use HasFactory;

    /**
     * The guarded attributes on the model.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the country that the currency belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Negara::countryModel());
    }
}
