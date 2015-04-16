<?php namespace App\Http\Controllers;

use Log;
use App\Form;
use App\UserItem;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserItemsController extends Controller {

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
		return view('useritems.create');
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
        $useritem -> notes = $request->notes;
        $useritem -> save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(UserItem $useritem)
	{
		//
	}

}
