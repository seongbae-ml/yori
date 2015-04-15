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
//Route::resource('items','ItemsController');
Route::resource('useritems','UserItemsController');
Route::resource('categories.items', 'ItemsController');

Route::model('useritem','UserItem');

/*
Route::get('useritems/{useritems}', function(App\UserItem $useritem)
{
    //
});
*/