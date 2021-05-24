<?php

use Illuminate\Database\Seeder;

class ProfessionalIndustryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \Illuminate\Support\Facades\DB::table('professional_industries')->insert([
       	[ 'industry' => 'IT','parent_id' => '0','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'industry' => 'Account','parent_id' => '0','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'industry' => 'Law','parent_id' => '0','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'industry' => 'Consultant','parent_id' => '0','status' => '0','created_at' => \Carbon\Carbon::now()]
       	
       	
        ]);
    }
}
