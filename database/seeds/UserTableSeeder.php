<?php

use App\User; 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'name' => 'seongbae',
            'email' => 'bae.seong@hotmail.com',
            'password' => Hash::make('dyad4Bat')
        ));
 
    }
 
}