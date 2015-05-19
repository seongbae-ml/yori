<?php namespace App\Http\Controllers;

use App\MyDish;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Debugbar;

class MyDishController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Input::get('query');
		
		$mydishes = MyDish::all();

		$client = new \GuzzleHttp\Client();
		$response = $client->get('http://api.bigoven.com/recipes?title_kw=' . $query . '&pg=1&rpp=20&api_key=dvxm34R5bZ0MOjnF016kZc99XV9SPXwK');
		
		Debugbar::info($response->getStatusCode());
		Debugbar::info($response->getHeader('content-type'));

		$xmlData = $response->xml();
		Debugbar::info($xmlData);

		$recipes = $xmlData->Results->RecipeInfo;
		
		return view('mydishes.index', compact('query','recipes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
