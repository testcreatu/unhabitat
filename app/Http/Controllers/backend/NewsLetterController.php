<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\backend\ImageController;
use App\Newsletter;
use App\Projects;
use DB;
use Session;
use Illuminate\Support\Str;

class NewsLetterController extends Controller
{
	use ImageController;


	public function addNewsLetterForm()
	{
		$projects = Projects::get();
		return view('cd-admin.newsletter.add-newsletter',compact('projects'));
	}
	public function addNewsLetter()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->addValidate();
		$FinalData['slug'] = Str::slug($data['title']);
		if(isset($data['file']))
		{
			$FinalData['file'] =$this->uploadFile($data['file'],'uploads/newsletter/files');
		}
		$merge = array_merge($data,$FinalData);
		DB::table('newsletters')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-newsletter');
	}

	public function viewNewsLetter()
	{
		$newsletter = NewsLetter::all();
		$projects = Projects::get();
		return view('cd-admin.newsletter.view-newsletter',compact('newsletter','projects'));
	}

	public function editNewsLetterForm($id)
	{
		if($data = NewsLetter::where('id',$id)->get()->first())
		{
			$projects = Projects::get();
			return view('cd-admin.newsletter.edit-newsletter',compact('data','projects'));
		}
	}

	public function editNewsLetter($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$newsletter = NewsLetter::where('id',$id)->get()->first();
		$data = $this->editValidate($id);
		if(isset($data['file']) && $newsletter['file'] != NULL)
		{
			$this->unlinkImage('uploads/newsletter/files/'.$newsletter['file']);
			$FinalData['file'] = $this->uploadFile($data['file'],'uploads/newsletter/files');
		}

		$FinalData['slug'] = Str::slug($data['title']);
		$merge = array_merge($data,$FinalData);
		DB::table('newsletters')->where('id',$id)->update($merge);
		Session::flash('success1');
		return redirect()->to('cd-admin/view-newsletter');
	}

	public function deleteNewsLetter($id)
	{
		if($check = NewsLetter::where('id',$id)->get()->first())
		{
			$this->unlinkImage('uploads/newsletter/files/'.$check['file']);
			$check->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-newsletter');
		}
	}

	protected function addValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'project_id' => '',
			'title' => 'required|unique:newsletters,title',
			'file' => 'file|mimes:pdf,docx,doc,pptx,ppt',
			'description' => 'required',
			'summary' => 'required',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
			'status' => 'required',
		]);
		return $valid;
	}

	protected function editValidate($id)
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'project_id' => '',
			'title' => 'required|unique:newsletters,title,'.$id,
			'file' => 'file|mimes:pdf,docx,doc,pptx,ppt',
			'description' => 'required',
			'summary' => 'required',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
			'status' => 'required',
		]);
		return $valid;
	}
}
