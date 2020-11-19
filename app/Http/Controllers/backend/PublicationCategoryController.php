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
		$category = PublicationCategories::get();
		return view('cd-admin.publication_category.view-publication-category',compact('category'));
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
			'url' => '',
		]);
		$publication_category = new PublicationCategories();
		$publication_category->description = $data['description'];
		$publication_category->title = $data['title'];
		$publication_category->seo_title = $data['seo_title'];
		$publication_category->seo_description = $data['seo_description'];
		$publication_category->seo_keyword = $data['seo_keyword'];
		$publication_category->status = $data['status'];
		$publication_category->slug = Str::slug($data['title']);
		$publication_category->url = $data['url'];
		$publication_category->save();
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
			'url' => '',
		]);
		$publication_category = PublicationCategories::find($id);
		$publication_category->description = $data['description'];
		$publication_category->title = $data['title'];
		$publication_category->seo_title = $data['seo_title'];
		$publication_category->seo_description = $data['seo_description'];
		$publication_category->seo_keyword = $data['seo_keyword'];
		$publication_category->status = $data['status'];
		$publication_category->slug = Str::slug($data['title']);
		$publication_category->url = $data['url'];
		$publication_category->save();
		Session::flash('PublicationCategoryUpdateSuccess');
		return redirect('cd-admin/view-publication-category');
	}

	public function deletePublicationCategory($id)
	{
		$publication_category = PublicationCategories::find($id);
		$publication_category->delete();
		Session::flash('PublicationCategoryDeleteSuccess');
		return redirect('cd-admin/view-publication-category');
	}
}
