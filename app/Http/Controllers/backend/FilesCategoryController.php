<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FilesCategory;
use Str;
use Session;
use App\Projects;
class FilesCategoryController extends Controller
{
	public function viewFilesCategory()
	{
		$category = FilesCategory::get();
		$projects = Projects::get();
		return view('cd-admin.file_category.view-file-category',compact('category','projects'));
	}
	public function addFilesCategoryForm()
	{
		$projects = Projects::get();
		return view('cd-admin.file_category.add-file-category',compact('projects'));
	}

	public function editFilesCategoryForm($id)
	{
		$data = FilesCategory::find($id);
		$projects = Projects::get();
		return view("cd-admin.file_category.edit-file-category",compact('data','projects'));
	}

	public function addFilesCategory()
	{
		$data = Request()->validate([
			'project_id' => '',
			'title' => 'required',
			'status' => 'required',
		]);
		$file_category = new FilesCategory();
		$file_category->title = $data['title'];
		$file_category->project_id = $data['project_id'];
		$file_category->status = $data['status'];
		$file_category->slug = Str::slug($data['title']);
		$file_category->save();
		Session::flash('FilesCategorySuccess');
		return redirect('cd-admin/view-file-category');
	}


	public function editFilesCategory($id)
	{
		$data = Request()->validate([
			'project_id' => '',
			'title' => 'required',
			'status' => 'required',
		]);
		$file_category = FilesCategory::find($id);
		$file_category->title = $data['title'];
		$file_category->project_id = $data['project_id'];
		$file_category->status = $data['status'];
		$file_category->slug = Str::slug($data['title']);
		$file_category->save();
		Session::flash('FilesCategoryUpdateSuccess');
		return redirect('cd-admin/view-file-category');
	}

	public function deleteFilesCategory($id)
	{
		$file_category = FilesCategory::find($id);
		$file_category->delete();
		Session::flash('FilesCategoryDeleteSuccess');
		return redirect('cd-admin/view-file-category');
	}
}
