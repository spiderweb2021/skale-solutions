<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('roles')->insert([
       	[ 'name' => 'Client','guard_name' => 'web','created_at' => \Carbon\Carbon::now()],
       	[ 'name' => 'Provider','guard_name' => 'web','created_at' => \Carbon\Carbon::now()],
       	[ 'name' => 'User','guard_name' => 'web','created_at' => \Carbon\Carbon::now()]
       	
        ]);
   
       
    }
}
