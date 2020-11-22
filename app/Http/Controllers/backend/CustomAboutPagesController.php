<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CustomPages;
use App\CustomAboutPages;
use Str;
use Session;
use Carbon\Carbon;
use DB;
class CustomAboutPagesController extends Controller
{
	public function addAboutPageForm()
	{
		$projects = Projects::get();
		return view('cd-admin.about_pages.add-about-pages');
	}
	public function addAboutPage()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->addValidate();
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['created_at'] = Carbon::now('Asia/Kathmandu');
		$FinalData['page_for'] = 'project';
		$merge = array_merge($data,$FinalData);
		DB::table('custom_about_pages')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-about-pages');
	}

	public function viewAboutPage()
	{
		$about_pages = CustomAboutPages::where('page_for','project')->get();
		$projects = Projects::get();
		return view('cd-admin.about_pages.view-about-pages',compact('about_pages','projects'));
	}

	public function viewOnePage($id)
	{
		$about_pages = CustomAboutPages::find($id);
		$projects = Projects::get();
		return view('cd-admin.about_pages.view-one-about-page',compact('about_pages','projects'));
	}

	public function editAboutPageForm($id)
	{
		if($data = CustomAboutPages::where('id',$id)->get()->first())
		{
			$projects = Projects::get();
			return view('cd-admin.about_pages.edit-about-pages',compact('data','projects'));
		}
	}

	public function editAboutPage($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$newsletter = CustomAboutPages::where('id',$id)->get()->first();
		$data = $this->editValidate($id);
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['updated_at'] = Carbon::now('Asia/Kathmandu');
		$FinalData['page_for'] = 'project';
		$merge = array_merge($data,$FinalData);
		DB::table('custom_about_pages')->where('id',$id)->update($merge);
		Session::flash('success1');
		return redirect()->to('cd-admin/view-about-pages');
	}


	public function deleteAboutPage($id)
	{
		if($check = CustomAboutPages::where('id',$id)->get()->first())
		{
			$check->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-about-pages');
		}
	}

	protected function addValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'project_id' => '',
			'title' => 'required|unique:custom_about_pages,title',
			'description' => 'required',
			'status' => 'required',
		]);
		return $valid;
	}

	protected function editValidate($id)
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'project_id' => '',
			'title' => 'required|unique:custom_about_pages,title,'.$id,
			'description' => 'required',
			'status' => 'required',
		]);
		return $valid;
	}
}