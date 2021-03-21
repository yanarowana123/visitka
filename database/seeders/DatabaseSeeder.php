<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $arr = [];
        $arr2 = [];
        for ($i = 1; $i < 101; $i++) {
            $arr[] = ['title'=>Str::random(10),
                'population' => rand(10000,100000)];
        }

        Country::insert($arr);

        for($i=1;$i<1001;$i++){
            $arr2[] = ['title'=>Str::random(10),
                'population' => rand(1000,10000),
                'country_id'=>rand(1,100)];
        }
        City::insert($arr2);
    }
}
