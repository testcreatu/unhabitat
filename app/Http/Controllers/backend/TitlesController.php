<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\PageTitle;
use Session;
class TitlesController extends Controller
{

	public function viewTitle()
	{
		$page = PageTitle::get();
		return view('cd-admin.page_titles.view-all-title',compact('page'));
	}

	public function editTitleForm($id)
	{
		$data = PageTitle::find($id);
		return view('cd-admin.page_titles.edit-page-title',compact('data'));
	}

	public function editTitle($id)
	{
		$data = Request()->validate([
			'summary' => '',
			'title' => '',
		]);
		$title = PageTitle::find($id);
		
		$title->title = $data['title'];
		$title->summary = $data['summary'];
		$title->save();
		Session::flash('updateSuccess');
		if($id == 1)
		{
			return redirect('/cd-admin/view-features');
		}
		else
		{
			return redirect('/cd-admin/view-milestones');
		}
	}
}
