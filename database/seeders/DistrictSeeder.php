<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  $districts  =District::get();
        $districts = [

            ['region_id' => 1 , 'name' => 'Arusha'],
            ['region_id' => 1 , 'name' => 'Meru'],
            ['region_id' => 1 , 'name' => 'Karatu'],

            ['region_id' => 2 , 'name' => 'Moshi'],
            ['region_id' => 2 , 'name' => 'Rombo'],
            ['region_id' => 2 , 'name' => 'Hai'],
            ['region_id' => 2 , 'name' => 'Same'],

            ['region_id' => 3 , 'name' => 'Handeni'],
            ['region_id' => 3 , 'name' => 'Tanga Mjini'],
            ['region_id' => 3 , 'name' => 'Lushoto'],
            ['region_id' => 3 , 'name' => 'Korogwe'],
           
        ];
        
        foreach($districts as $district){
            District::Create(['name', $district['name']], $district);
        }
    }
}
