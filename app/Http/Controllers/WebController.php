<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Administrative;
use App\Models\Application;
use App\Models\Technical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('web.index');
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
	public function postStore(Request $request)
	{
		$input = $request->all();
//		return ($input['Administrative']);
		DB::beginTransaction();
		$apps = Application::create($input['REGISTRANT']);
		$input['Administrative']['registrant_id'] = $apps->id;
		$input['Technical']['registrant_id'] = $apps->id;
		if ($request->hasFile("image1")) {
			$destinationPath = 'uploads/a/';
			$fileName = time() . "-" . $request->file('image1')->getClientOriginalName();
			$request->file('image1')->move($destinationPath, $fileName);
			$input['Administrative']['image'] = $fileName;
		}

		if ($request->hasFile('image2')) {
			$destinationPath = 'uploads/t/';
			$fileName = time() . "-" . $request->file('image2')->getClientOriginalName();
			$request->file('image2')->move($destinationPath, $fileName);
			$input['Technical']['image'] = $fileName;
		}
		return 1;
		Administrative::create($input['Administrative']);
		Technical::create($input['Technical']);
		DB::commit();
		return redirect()->back()
			->withSuccess('Application Submitted Successfully');
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
