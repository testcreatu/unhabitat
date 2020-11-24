<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\backend\ImageController;
use Carbon\Carbon;
use DB;
use Session;
use App\About;
class AboutController extends Controller
{
	use ImageController;
	public function aboutform(){
		return view('cd-admin.about.add-new-about');
	}

	public function view(){
		$about = About::get()->first();
		return view('cd-admin.about.view-all-about',compact('about'));
	}

	public function edit($id){
		$about =  About::find($id);
		return view('cd-admin.about.edit-about',compact('about'));
	}

	public function store(){
		$a=[];
		$data = $this->addValidate();
		$a['background_image'] = $this->uploadImage($data['background_image'],'uploads/abouts');
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('abouts')->insert($replace);
		Session::flash('success');
		return redirect('/cd-admin/view-about');
	}

	public function update($id){
		$data = $this->editValidate();
		$test = About::find($id);	
		if(isset($data['background_image'])){
			$this->unlinkImage('uploads/thumbnail/'.$test['background_image']);
			$this->unlinkImage('uploads/abouts/'.$test['background_image']);
			$a['background_image'] = $this->uploadImage($data['background_image'],'uploads/abouts');
		}
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		$data = DB::table('abouts')->where('id',$id)->update($replace);

		Session::flash('success1');
		return redirect('/cd-admin/view-about');
	}

	public function addValidate()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'title'=>'required',   
			'summary'=>'required',
			'description' => 'required',
			'background_image' => 'required|image|mimes:jpeg,jpg,gif,svg,png',
			'seo_title' => '',
			'seo_description' => '',
			'seo_keyword' => '',

		]);
		return $data;
	}
	public function editValidate()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'title'=>'required',   
			'summary'=>'required',
			'description' => 'required',
			'background_image' => 'mimes:jpeg,png,gif,jpg,svg',
			'seo_title' => '',
			'seo_description' => '',
			'seo_keyword' => '',
		]);
		return $data;
	}
}
