<?php

use App\user; 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserItemTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('user_items')->delete();
 
        DB::table('user_items')->insert(array(
            'id' => 'seongbae',
            'user_id' => 1,
            'item_id' => 1,
            'notes' => 'My first item'
        ));
 
    }
 
}