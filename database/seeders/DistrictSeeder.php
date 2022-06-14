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

            ['region_id' => 2 , 'name' => 'NHIF'],
            ['region_id' => 2 , 'name' => 'CHIF'],
            ['region_id' => 2 , 'name' => 'AAA'],
           
        ];
        
        foreach($districts as $district){
            District::create($district);
        }
    }
}
