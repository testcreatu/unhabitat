<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\backend\ImageController;
use App\Files;
use App\FilesCategory;
use App\Projects;
use DB;
use Session;
use Illuminate\Support\Str;
use Carbon\Carbon;
class FilesController extends Controller
{
	use ImageController;


	public function addFilesForm()
	{
		$projects = Projects::get();
		$category = FilesCategory::get();
		return view('cd-admin.files.add-file',compact('projects','category'));
	}
	public function addFiles()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->addValidate();
		$FinalData['slug'] = Str::slug($data['title']);
		if($data['type'] == 'file')
		{
			if(!isset($data['file']))
			{
				Session::flash('FileRequired');
			}
			$FinalData['file_name'] =$this->uploadFile($data['file'],'uploads/files');
			$FinalData['type'] = "file";
			unset($data['url']);
		}
		else
		{
			$FinalData['type'] = "url";
		}
		$FinalData['created_at'] = Carbon::now('Asia/Kathmandu');
		unset($data['file']);
		$merge = array_merge($data,$FinalData);
		DB::table('files')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-files');
	}

	public function viewFiles()
	{
		$files = Files::all();
		$category = FilesCategory::get();
		return view('cd-admin.files.view-file',compact('files','category'));
	}

	public function editFilesForm($id)
	{
		if($data = Files::where('id',$id)->get()->first())
		{
			$category = FilesCategory::get();
			return view('cd-admin.files.edit-file',compact('data','category'));
		}
	}

	public function editFiles($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$files = Files::where('id',$id)->get()->first();
		$data = $this->editValidate($id);
		if($data['type'] == 'file')
		{
			if(!isset($data['file']))
			{
				Session::flash('FileRequired');
			}
			if(isset($files['file_name']))
			{
				$this->unlinkImage('uploads/files/'.$files['file_name']);
			}
			$FinalData['file_name'] = $this->uploadFile($data['file'],'uploads/files');
			$FinalData['type'] = 'file';
			unset($data['url']);
		}
		else
		{
			if(isset($files['file_name']))
			{
				$this->unlinkImage('uploads/files/'.$files['file_name']);
			}
			$FinalData['file_name'] = NULL;
			$FinalData['type'] = "url";
		}
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['updated_at'] = Carbon::now('Asia/Kathmandu');
		unset($data['file']);
		$merge = array_merge($data,$FinalData);
		DB::table('files')->where('id',$id)->update($merge);
		Session::flash('success1');
		return redirect()->to('cd-admin/view-files');
	}

	public function deleteFiles($id)
	{
		if($check = Files::where('id',$id)->get()->first())
		{
			if(isset($check['file_name']))
			{
				$this->unlinkImage('uploads/files/'.$check['file_name']);
			}
			$check->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-files');
		}
	}

	protected function addValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'category_id' => 'required',
			'title' => 'required|unique:files,title',
			'status' => 'required',
			'type' => 'required',
			'file' => 'required_without:url|file|mimes:pdf,docx,doc,pptx,ppt',
			'url' => 'required_without:file',
		]);
		return $valid;
	}

	protected function editValidate($id)
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'category_id' => 'required',
			'title' => 'required|unique:files,title,'.$id,
			'status' => 'required',
			'type' => 'required',
			'file' => 'required_without:url|file|mimes:pdf,docx,doc,pptx,ppt',
			'url' => 'required_without:file',
		]);
		return $valid;
	}
}
