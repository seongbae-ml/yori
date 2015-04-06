<?php

use App\user; 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ItemTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('items')->delete();
 
        $items = array (
 			['id' => 1, 'item_name'=>'Apples', 'category_id'=>1, 'description'=>''],
 			['id' => 2, 'item_name'=>'Avocados', 'category_id'=>1, 'description'=>''],
 			['id' => 3, 'item_name'=>'Bananas', 'category_id'=>1, 'description'=>''],
 			['id' => 4, 'item_name'=>'Grapes', 'category_id'=>1, 'description'=>''],
 			['id' => 5, 'item_name'=>'Blueberries', 'category_id'=>1, 'description'=>''],
 			['id' => 6, 'item_name'=>'Rasberries', 'category_id'=>1, 'description'=>''],
 			['id' => 7, 'item_name'=>'Blackberries', 'category_id'=>1, 'description'=>''],
 			['id' => 8, 'item_name'=>'Strawberries', 'category_id'=>1, 'description'=>''],
 			['id' => 9, 'item_name'=>'Oranges', 'category_id'=>1, 'description'=>''],
 			['id' => 10, 'item_name'=>'Grapefruits', 'category_id'=>1, 'description'=>''],
 			['id' => 11, 'item_name'=>'Tangerine', 'category_id'=>1, 'description'=>''],
 			['id' => 12, 'item_name'=>'Black Gradpes', 'category_id'=>1, 'description'=>''],
 			['id' => 13, 'item_name'=>'Red Gradpes', 'category_id'=>1, 'description'=>''],
 			['id' => 14, 'item_name'=>'Green Gradpes', 'category_id'=>1, 'description'=>''],
 			['id' => 15, 'item_name'=>'Watermelon', 'category_id'=>1, 'description'=>''],
 			['id' => 16, 'item_name'=>'Cantaloupe', 'category_id'=>1, 'description'=>''],
 			['id' => 17, 'item_name'=>'Honeydew Melon', 'category_id'=>1, 'description'=>''],
 			['id' => 18, 'item_name'=>'Pears', 'category_id'=>1, 'description'=>''],
 			['id' => 19, 'item_name'=>'Black Plum', 'category_id'=>1, 'description'=>''],
 			['id' => 20, 'item_name'=>'White Nectarine', 'category_id'=>1, 'description'=>''],
 			['id' => 21, 'item_name'=>'Mango', 'category_id'=>1, 'description'=>''],
 			['id' => 22, 'item_name'=>'Pineapple', 'category_id'=>1, 'description'=>''],
 			['id' => 23, 'item_name'=>'Kiwifruit', 'category_id'=>1, 'description'=>''],
 			['id' => 24, 'item_name'=>'Pomegranates', 'category_id'=>1, 'description'=>''],
 			['id' => 25, 'item_name'=>'Red Papaya', 'category_id'=>1, 'description'=>''],
 			['id' => 26, 'item_name'=>'Coconut', 'category_id'=>1, 'description'=>''],
 			['id' => 27, 'item_name'=>'Guavas', 'category_id'=>1, 'description'=>''],
 			['id' => 28, 'item_name'=>'Passion Fruit', 'category_id'=>1, 'description'=>''],
 			['id' => 29, 'item_name'=>'Starfruit', 'category_id'=>1, 'description'=>'']
 			);

        DB::table('items')->insert($items);
 
    }
 
}