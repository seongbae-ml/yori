<?php namespace App\Http\Controllers;

use Log;
use App\Form;
use App\UserItem;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UserItemsController extends Controller {

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
		$useritems = UserItem::all();
		return view('useritems.index', compact('useritems'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$useritem = null;
		return view('useritems.create', compact('useritem'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserItemRequest $request)
	{
		//

		$this->validate($request, [
	        'name' => 'required'
	    ]);

		
	
		$input = Input::all();

		
		UserItem::create($input);
		return Redirect::to('/useritems')->with('message','Item successfully created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		Log::info('yorilog-' . $id);

		$useritem = UserItem::find($id);

		return view('useritems.show', compact('useritem'));
		//$useritems = UserItem::all();

		//$useritems = UserItem::all();
		//return view('useritems.index', compact('useritems'));
		
		//return view('useritems.index', compact('useritem'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$useritem = UserItem::find($id);
		return view('useritems.edit', compact('useritem'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$useritem = UserItem::find($id);
		$input = array_except(Input::all(),'_method');
		$useritem->update($input);

        return Redirect::to('/useritems');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$useritem = UserItem::find($id);
        $useritem->delete();

        return Redirect::to('/useritems');
	}

}
