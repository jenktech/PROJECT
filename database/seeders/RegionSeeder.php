<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
       
        $regions = [

            ['name' => 'Arusha'],
            ['name' => 'kilimanjaro'],
            ['name' => 'Tanga']
           
        ];
        
        foreach($regions as $region){
            Region::updateOrCreate(['name', $region['name']], $region);
        }
    }
}
