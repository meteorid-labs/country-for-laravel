<?php

namespace Meteor\Country\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Meteor\Country\Facades\Negara;

class ImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'negara:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import countries, states, currencies and details';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Importing Countries and States');

        $file = __DIR__.'/../../database/seeders/data/countries.json';
        $countries = collect(json_decode(file_get_contents($file), true));

        DB::transaction(function () use ($countries) {
            $this->withProgressBar($countries, function ($data) {
                $country = Negara::country()->create(
                    Arr::except($data, ['states', 'currency', 'detail']) + ['currency' => $data['currency']['code']]
                );

                $country->currency()->create($data['currency']);
                $country->detail()->create($data['detail']);
                $country->states()->createMany($data['states']);
            });
        });

        $this->line('');

        return Command::SUCCESS;
    }
}
