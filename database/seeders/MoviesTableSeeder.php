<?php

namespace Database\Seeders;

use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/imdb_movies.csv';
        $this->connection = 'mysql';
        $this->tablename = 'movies';
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
