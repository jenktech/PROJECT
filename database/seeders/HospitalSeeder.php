<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Hospital;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    $hospitals =Hospital::get();
        $hospitals = [

            ['district_id' => 1 , 'name' => 'Mt Meru Hospital'],
            ['district_id' => 1 , 'name' => 'Seliani'],
       

            ['district_id' => 4 , 'name' => 'KCMC'],
            ['district_id' => 4 , 'name' => 'Machame hospital'],
           

            ['district_id' => 7 , 'name' => 'Bombo'],
            ['district_id' => 7 , 'name' => 'Tanga Mjini'],
            
        ];
        
        foreach($hospitals as $hospital){
            Hospital::Create(['name', $hospital['name']], $hospital);
        }
    }
}
