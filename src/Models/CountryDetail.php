<?php

namespace Meteor\Country\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Meteor\Country\Base\Model;
use Meteor\Country\Facades\Negara;

class CountryDetail extends Model
{
    use HasFactory;

    /**
     * The guarded attributes on the model.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'labels' => 'array',
        'formats' => 'array',
        'meta' => 'array',
    ];

    /**
     * Get the country that the detail belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Negara::countryModel());
    }
}
