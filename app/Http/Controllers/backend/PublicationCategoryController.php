<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PublicationCategories;
use Str;
use Session;

class PublicationCategoryController extends Controller
{
	public function viewPublicationCategory()
	{
		$notice = PublicationCategories::get();
		return view('cd-admin.publication_category.view-publication-category',compact('notice'));
	}
	public function addPublicationCategoryForm()
	{
		return view('cd-admin.publication_category.add-publication-category');
	}

	public function editPublicationCategoryForm($id)
	{
		$data = PublicationCategories::find($id);
		return view("cd-admin.publication_category.edit-publication-category",compact('data'));
	}

	public function addPublicationCategory()
	{
		$data = Request()->validate([
			'title' => 'required',
			'description' => 'required',
			'seo_title' => 'required',
			'seo_description' => 'required',
			'seo_keyword' => 'required',
			'status' => 'required',
		]);
		$notice = new PublicationCategories();
		$notice->description = $data['description'];
		$notice->title = $data['title'];
		$notice->seo_title = $data['seo_title'];
		$notice->seo_description = $data['seo_description'];
		$notice->seo_keyword = $data['seo_keyword'];
		$notice->status = $data['status'];
		$notice->slug = Str::slug($data['title']);
		$notice->save();
		Session::flash('PublicationCategorySuccess');
		return redirect('cd-admin/view-publication-category');
	}


	public function editPublicationCategory($id)
	{
		$data = Request()->validate([
			'title' => 'required',
			'description' => 'required',
			'seo_title' => 'required',
			'seo_description' => 'required',
			'seo_keyword' => 'required',
			'status' => 'required',
		]);
		$notice = PublicationCategories::find($id);
		$notice->summary = $data['summary'];
		$notice->description = $data['description'];
		$notice->title = $data['title'];
		$notice->seo_title = $data['seo_title'];
		$notice->seo_description = $data['seo_description'];
		$notice->seo_keyword = $data['seo_keyword'];
		$notice->status = $data['status'];
		$notice->slug = Str::slug($data['title']);
		$notice->save();
		Session::flash('PublicationCategoryUpdateSuccess');
		return redirect('cd-admin/view-publication-category');
	}

	public function deletePublicationCategory($id)
	{
		$notice = PublicationCategories::find($id);
		$notice->delete();
		Session::flash('PublicationCategoryDeleteSuccess');
		return redirect('cd-admin/view-publication-category');
	}
}
