<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CreateAdminUserSeeder::class);
         $this->call(PermissionTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(ProfessionalIndustryTableSeeder::class);
         $this->call(ProfessionalTypeTableSeeder::class);
         $this->call(ProfessionalQualityTableSeeder::class);
    }
}
