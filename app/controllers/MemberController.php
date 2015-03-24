<?php

class MemberController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$members = Member::all();

        return View::make('members.index', compact('members'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('members.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'first_name' => 'required',
			'last_name'  => 'required',
			'email'      => 'required|email',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('members/create')
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			// store
			$member = new Member;
			$member->first_name = Input::get('first_name');
			$member->last_name  = Input::get('last_name');
			$member->email      = Input::get('email');
			$member->save();

			// redirect
			Session::flash('message', 'Successfully created member!');
			return Redirect::to('members');
		}
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
		// get the nerd
		$member = Member::find($id);

		// show the edit form and pass the nerd
		return View::make('members.edit')
			->with('member', $member);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'first_name' => 'required',
			'last_name'  => 'required',
			'email'      => 'required|email',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('members/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			// store
			$member = Member::find($id);
			$member->first_name = Input::get('first_name');
			$member->last_name  = Input::get('last_name');
			$member->email      = Input::get('email');
			$member->save();

			// redirect
			Session::flash('message', 'Successfully updated member!');
			return Redirect::to('members');
		}
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
