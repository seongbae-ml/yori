<?php

use App\user; 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserItemTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('user_items')->delete();
 
        DB::table('user_items')->insert(array(
            'id' => 1,
            'user_id' => 1,
            'item_id' => 1,
            'name' => 'Uncured Canadian Bacon',
            'expire_date' => '2015-6-17',
            'notes' => 'My favorite bacon in the world'
        ));
 
    }
 
}