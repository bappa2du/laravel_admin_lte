<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Administrative;
use App\Models\Application;
use App\Models\Technical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		return view('admin.index');
	}

	public function getApplications()
	{
		$applications = Application::get();
		return view('admin.application.index')
			->with(compact('applications'));
	}

	public function getEditApplication($id)
	{
		$apps = Application::where('id',$id)->first();
		$admin = Administrative::where('registrant_id',$id)->first();
		$tech = Technical::where('registrant_id',$id)->first();
		return view('admin.application.edit')
			->with(compact('apps','admin','tech'));
	}

	public function postUpdateApplication(Request $request,$id)
	{

	}

	public function getDeleteApplication($id)
	{
		DB::beginTransaction();
		Application::where('id',$id)->delete();
		Administrative::where('registrant_id',$id)->delete();
		Technical::where('registrant_id',$id)->delete();
		DB::commit();
	}


}
