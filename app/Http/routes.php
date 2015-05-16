<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('help', 'HomeController@help');
Route::get('about', 'HomeController@about');
Route::get('settings', 'HomeController@settings');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/authtest', array('before'=>'auth.basic',function()
{
	return View::make('hello');
}
	));

Route::match(['get','post'],'seong', function()
{

	return 'Hello Seong';

}
	
	);

Route::resource('categories','CategoriesController');
//Route::resource('items','ItemController');
Route::get('items/data', 'ItemController@data');
Route::resource('useritems','UserItemsController');
Route::resource('mydishes','MyDishController');
Route::resource('categories.items', 'ItemsController');

Route::model('useritem','UserItem');


/*
Route::get('useritems', 'UserItemsController@index');
Route::get('useritems/create', 'UserItemsController@create');
Route::post('useritems/create', 'UserItemsController@store');
Route::get('useritems/{id}/edit', 'UserItemsController@edit');
Route::post('useritems/{id}/edit', 'UserItemsController@update');
Route::post('useritems/{id}/delete', 'UserItemsController@delete');
*/

/*
Route::get('useritems/{useritems}', function(yori\UserItem $useritem)
{
    //
});
*/
