<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Meteor\Country\Base\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->prefix.'country_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained($this->prefix.'countries')->onDelete('cascade');
            $table->string('tld')->nullable();
            $table->string('region')->nullable();
            $table->string('subregion')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->json('labels')->nullable();
            $table->json('formats')->nullable();
            $table->string('autocompletion_field')->nullable();
            $table->boolean('building_number_required')->default(false);
            $table->boolean('building_number_maybe_in_lineTwo')->default(false);
            $table->boolean('postcode_required')->default(false);
            $table->json('meta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->prefix.'country_details');
    }
};
