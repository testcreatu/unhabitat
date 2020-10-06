<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\backend\ImageController;
use App\Publications;
use DB;
use Session;
use Illuminate\Support\Str;

class PublicationsController extends Controller
{
	use ImageController;


	public function addPublicationsForm()
	{
		return view('cd-admin.publications.add-publications');
	}
	public function addPublications()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->addValidate();
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['image'] = $this->uploadImage($data['image'],'uploads/publications');
		$FinalData['file'] =$this->uploadFile($data['file'],'uploads/publications/files');
		$merge = array_merge($data,$FinalData);
		DB::table('publications')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-publications');
	}

	public function viewPublications()
	{
		$publications = Publications::all();
		return view('cd-admin.publications.view-publications',compact('publications'));
	}

	public function editPublicationsForm($id)
	{
		if($data = Publications::where('id',$id)->get()->first())
		{
			return view('cd-admin.publications.edit-publications',compact('data'));
		}
	}

	public function editPublications($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$publications = Publications::where('id',$id)->get()->first();
		$data = $this->editValidate();
		if(isset($data['image']))
		{
			$this->unlinkImage('uploads/publications/'.$publications['image']);
			$this->unlinkImage('uploads/thumbnail/'.$publications['image']);
			$FinalData['image'] = $this->uploadImage($data['image'],'uploads/publications');
		}
		if(isset($data['file']))
		{
			$this->unlinkImage('uploads/publications/files/'.$publications['file']);
			$FinalData['file'] = $this->uploadFile($data['file'],'uploads/publications/files');
		}

		$FinalData['slug'] = Str::slug($data['title']);
		$merge = array_merge($data,$FinalData);
		DB::table('publications')->where('id',$id)->update($merge);
		Session::flash('success1');
		return redirect()->to('cd-admin/view-publications');
	}

	public function deletePublications($id)
	{
		if($check = Publications::where('id',$id)->get()->first())
		{
			$this->unlinkImage('uploads/publications/'.$check['image']);
			$this->unlinkImage('uploads/thumbnail/'.$check['image']);
			$check->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-publications');
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
			'show_in_homepage' => 'required',
			'publisher_name' => 'required',
			'file' => 'required|file|mimes:pdf,docx,doc,pptx,ppt',
			'year' => 'required',
			'pages' => 'required',
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
			'show_in_homepage' => 'required',
			'publisher_name' => 'required',
			'file' => 'file|mimes:pdf,docx,doc,pptx,ppt',
			'year' => 'required',
			'pages' => 'required',
		]);
		return $valid;
	}
}