<?php

use Illuminate\Database\Seeder;
use App\Station;
class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $station = new Station();
        $station->name = "Station A";
        $station->lat = "180";
        $station->long = "120";
        $station->save();
    }
}