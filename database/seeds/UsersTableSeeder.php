<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(['name'=>'Neville Verleye', 'street'=>'Zonnebeekseweg', 'number'=>'152A', 'city'=>'Ieper', 'country'=>'België', 'is_active'=>'1', 'role_id'=>'1', 'password'=>bcrypt('123456789'),'email'=>'verleye_neville@hotmail.com']);
        factory('App\User', 4)->create();
    }
}
