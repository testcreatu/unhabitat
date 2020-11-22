<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CustomPages;
use App\Projects;
use Str;
use Session;
use Carbon\Carbon;
use DB;
class PagesController extends Controller
{

	public function addPagesForm()
	{
		$projects = Projects::get();
		return view('cd-admin.custom_pages.add-custom-pages',compact('projects'));
	}
	public function addPages()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->addValidate();
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['created_at'] = Carbon::now('Asia/Kathmandu');
		$FinalData['page_for'] = 'project';
		$merge = array_merge($data,$FinalData);
		DB::table('custom_pages')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-custom-pages');
	}

	public function viewPages()
	{
		$custom_pages = CustomPages::where('page_for','project')->get();
		$projects = Projects::get();
		return view('cd-admin.custom_pages.view-custom-pages',compact('custom_pages','projects'));
	}

	public function viewOnePage($id)
	{
		$custom_pages = CustomPages::find($id);
		$projects = Projects::get();
		return view('cd-admin.custom_pages.view-one-custom-page',compact('custom_pages','projects'));
	}

	public function editPagesForm($id)
	{
		if($data = CustomPages::where('id',$id)->get()->first())
		{
			$projects = Projects::get();
			return view('cd-admin.custom_pages.edit-custom-pages',compact('data','projects'));
		}
	}

	public function editPages($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$newsletter = CustomPages::where('id',$id)->get()->first();
		$data = $this->editValidate($id);
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['updated_at'] = Carbon::now('Asia/Kathmandu');
		$FinalData['page_for'] = 'project';
		$merge = array_merge($data,$FinalData);
		DB::table('custom_pages')->where('id',$id)->update($merge);
		Session::flash('success1');
		return redirect()->to('cd-admin/view-custom-pages');
	}

	//Menu Page
	public function addMenuPagesForm()
	{
		return view('cd-admin.custom_pages.add-custom-menu-pages');
	}
	public function addMenuPages()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->addValidate();
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['created_at'] = Carbon::now('Asia/Kathmandu');
		$FinalData['page_for'] = 'menu';
		$merge = array_merge($data,$FinalData);
		DB::table('custom_pages')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-custom-menu-pages');
	}

	public function viewMenuPages()
	{
		$custom_pages = CustomPages::where('page_for','menu')->get();
		return view('cd-admin.custom_pages.view-custom-menu-pages',compact('custom_pages'));
	}

	public function editMenuPagesForm($id)
	{
		if($data = CustomPages::where('id',$id)->get()->first())
		{

			return view('cd-admin.custom_pages.edit-custom-menu-pages',compact('data'));
		}
	}

	public function editMenuPages($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$newsletter = CustomPages::where('id',$id)->get()->first();
		$data = $this->editValidate($id);
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['updated_at'] = Carbon::now('Asia/Kathmandu');
		$FinalData['page_for'] = 'menu';
		$merge = array_merge($data,$FinalData);
		DB::table('custom_pages')->where('id',$id)->update($merge);
		Session::flash('success1');
		return redirect()->to('cd-admin/view-custom-menu-pages');
	}

	//End Menu

	public function deletePages($id)
	{
		if($check = CustomPages::where('id',$id)->get()->first())
		{
			$check->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-custom-pages');
		}
	}

	protected function addValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'project_id' => '',
			'title' => 'required|unique:custom_pages,title',
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
			'title' => 'required|unique:custom_pages,title,'.$id,
			'description' => 'required',
			'status' => 'required',
		]);
		return $valid;
	}
}
