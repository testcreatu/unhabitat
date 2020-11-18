<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\backend\ImageController;
use App\Http\Controllers\Controller;
use App\CaseStudy;
use App\Projects;
use DB;
use Session;
use Illuminate\Support\Str;
class CaseStudyController extends Controller
{
	use ImageController;


	public function addCaseStudyForm()
	{
		$projects = Projects::get();
		return view('cd-admin.case_study.add-case-study',compact('projects'));
	}
	public function addCaseStudy()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->addValidate();
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['image'] = $this->uploadImage($data['image'],'uploads/caseStudy');
		$merge = array_merge($data,$FinalData);
		DB::table('blogs')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-case-study');
	}


	// public function mewadd1blog()
	// {
	// 	$FinalData = [];
	// 	$request = Request()->all();

	// 	$this->validate($request,[
	// 		'excelfile' => 'required',  
	// 	]);
	// 	if($request->hasFile('excelfile'))
	// 	{
	// 		$redear = \Excel::load($request->file('excelfile')->getRealPath(), function ($reader) {});  
	// 		foreach ($redear->toArray() as $key => $row) 
	// 		{
	// 			foreach($row as $r)
	// 			{
	// 				$data['question'] = $r['question'];
	// 				$data['option_1'] = $r['option_1'];
	// 				$data['option_2'] = $r['option_2'];
	// 				$data['option_3'] = $r['option_3'];
	// 				$data['option_4'] = $r['option_4'];
	// 				$data['isright'] = $r['isright'];
	// 				$data['solution'] = $r['solution'];
	// 				$data['created_at'] = Carbon::now();
	// 				$data['updated_at'] = Carbon::now();
	// 				$data['exam_id'] = $id;
	// 				if(!empty($data)) {     
	// 					DB::table('blogs')->insert($data);     
	// 				}
	// 			}
	// 		}
	// 	}
	// 	Session::flash('success');
	// 	return redirect()->to('cd-admin/view-blog');
	// }

	public function viewCaseStudy()
	{
		$blog = CaseStudy::all();
		$projects = Projects::get();
		return view('cd-admin.case_study.view-case-study',compact('blog','projects'));
	}

	public function editCaseStudyForm($id)
	{
		if($data = CaseStudy::where('id',$id)->get()->first())
		{
			$projects = Projects::get();
			return view('cd-admin.case_study.edit-case-study',compact('data','projects'));
		}
	}

	public function editCaseStudy($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$blog = CaseStudy::where('id',$id)->get()->first();
		$data = $this->editValidate();
		if(isset($data['image']))
		{
			$this->unlinkImage('uploads/blogs/'.$blog['image']);
			$this->unlinkImage('uploads/thumbnail/'.$blog['image']);
			$FinalData['image'] = $this->uploadImage($data['image'],'uploads/blogs');
		}
		$FinalData['slug'] = Str::slug($data['title']);
		$merge = array_merge($data,$FinalData);
		DB::table('blogs')->where('id',$id)->update($merge);
		Session::flash('success1');
		return redirect()->to('cd-admin/view-blog');
	}

	public function deleteCaseStudy($id)
	{
		if($check = CaseStudy::where('id',$id)->get()->first())
		{
			$this->unlinkImage('uploads/blogs/'.$check['image']);
			$this->unlinkImage('uploads/thumbnail/'.$check['image']);
			$check->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-blog');
		}
	}

	protected function addValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'project_id' => '',
			'title' => 'required',
			'image' => 'required|mimes:jpeg,jpg,png,gif',
			'altimage' => 'required',
			'description' => 'required',
			'summary' => 'required',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
			'status' => 'required',
		]);
		return $valid;
	}

	protected function editValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'project_id' => '',
			'title' => 'required',
			'image' => 'mimes:jpeg,jpg,png,gif',
			'altimage' => 'required',
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
