<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\backend\ImageController;
use App\Projects;
use DB;
use Session;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{
	use ImageController;


	public function addProjectsForm()
	{
		return view('cd-admin.projects.add-project');
	}
	public function addProjects()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->addValidate();
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['image'] = $this->uploadImage($data['image'],'uploads/projects');
		$merge = array_merge($data,$FinalData);
		DB::table('projects')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-projects');
	}

	public function viewProjects()
	{
		$projects = Projects::all();
		return view('cd-admin.projects.view-project',compact('projects'));
	}

	public function editProjectsForm($id)
	{
		if($data = Projects::where('id',$id)->get()->first())
		{
			return view('cd-admin.projects.edit-project',compact('data'));
		}
	}

	public function editProjects($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$projects = Projects::where('id',$id)->get()->first();
		$data = $this->editValidate();
		if(isset($data['image']))
		{
			$this->unlinkImage('uploads/projects/'.$projects['image']);
			$this->unlinkImage('uploads/thumbnail/'.$projects['image']);
			$FinalData['image'] = $this->uploadImage($data['image'],'uploads/projects');
		}
		$FinalData['slug'] = Str::slug($data['title']);
		$merge = array_merge($data,$FinalData);
		DB::table('projects')->where('id',$id)->update($merge);
		Session::flash('success1');
		return redirect()->to('cd-admin/view-projects');
	}

	public function deleteProjects($id)
	{
		if($check = Projects::where('id',$id)->get()->first())
		{
			$this->unlinkImage('uploads/projects/'.$check['image']);
			$this->unlinkImage('uploads/thumbnail/'.$check['image']);
			$check->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-projects');
		}
	}

	protected function addValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'title' => 'required',
			'image' => 'required|mimes:jpeg,jpg,png,gif',
			'altimage' => 'required',
			'description' => 'required',
			'summary' => 'required',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
			'status' => 'required',
			'project_status' => 'required',
			'is_trending' => 'required',
		]);
		return $valid;
	}

	protected function editValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'title' => 'required',
			'image' => 'mimes:jpeg,jpg,png,gif',
			'altimage' => 'required',
			'description' => 'required',
			'summary' => 'required',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
			'status' => 'required',
			'project_status' => 'required',
			'is_trending' => 'required',
		]);
		return $valid;
	}
}
