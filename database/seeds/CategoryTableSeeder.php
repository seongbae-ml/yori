<?php

use App\user; 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoryTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('categories')->delete();
 
 		$categories = array (
 			['id' => 1, 'category_name'=>'Fruits', 'category_slug'=>'fruits', 'description'=>''],
 			['id' => 2, 'category_name'=>'Vegetables', 'category_slug'=>'vegetables', 'description'=>''],
 			['id' => 3, 'category_name'=>'Meat', 'category_slug'=>'meat', 'description'=>''],
 			['id' => 4, 'category_name'=>'Seafood', 'category_slug'=>'seafood', 'description'=>''],
 			['id' => 5, 'category_name'=>'Dairy', 'category_slug'=>'dairy', 'description'=>''],
 			['id' => 6, 'category_name'=>'Deli & Cheese', 'category_slug'=>'delicheese', 'description'=>''],
 			['id' => 7, 'category_name'=>'Bakery & Pastry', 'category_slug'=>'bakery', 'description'=>'']
 			);
        
        DB::table('categories')->insert($categories);
 
    }
 
}