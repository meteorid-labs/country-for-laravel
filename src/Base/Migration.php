<?php

namespace Meteor\Country\Base;

use Illuminate\Database\Migrations\Migration as BaseMigration;

abstract class Migration extends BaseMigration
{
    /**
     * Migration table prefix.
     *
     * @var string
     */
    protected string $prefix = '';

    /**
     * Create a new instance of the migration.
     */
    public function __construct()
    {
        $this->prefix = config('meteor.country.database.table_prefix');
    }

    /**
     * Use the connection specified in config.
     *
     * @return void
     */
    public function getConnection()
    {
        if ($connection = config('meteor.country.database.connection', false)) {
            return $connection;
        }

        return parent::getConnection();
    }
}
