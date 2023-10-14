<?php

namespace Database\Seeders;

use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/imdb-videogames.csv';
        $this->connection = 'mysql';
        $this->tablename = 'games';
        $this->header = true;
        $this->delimiter = ",";
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::disableQueryLog();
        parent::run();
    }
}
