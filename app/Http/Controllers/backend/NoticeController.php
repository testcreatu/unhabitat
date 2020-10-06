<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Notice;
use App\Http\Controllers\backend\ImageController;
use Str;
class NoticeController extends Controller
{
	use ImageController;
	public function viewNotice()
	{
		$notice = Notice::get();
		return view('cd-admin.notice.view-notice',compact('notice'));
	}
	public function addNoticeForm()
	{
		return view("cd-admin.notice.add-notice");
	}

	public function editNoticeForm($id)
	{
		$data = Notice::find($id);
		return view("cd-admin.notice.edit-notice",compact('data'));
	}

	public function addNotice()
	{
		$data = Request()->validate([
			'title' => 'required',
			'description' => 'required',
			'summary' => 'required',
			'seo_title' => 'required',
			'seo_description' => 'required',
			'seo_keyword' => 'required',
			'status' => 'required',
		]);
		$notice = new Notice();
		$notice->summary = $data['summary'];
		$notice->description = $data['description'];
		$notice->title = $data['title'];
		$notice->seo_title = $data['seo_title'];
		$notice->seo_description = $data['seo_description'];
		$notice->seo_keyword = $data['seo_keyword'];
		$notice->status = $data['status'];
		$notice->slug = Str::slug($data['title']);
		$notice->save();
		Session::flash('NoticeSuccess');
		return redirect('cd-admin/view-notice');
	}


	public function editNotice($id)
	{
		$data = Request()->validate([
			'title' => 'required',
			'description' => 'required',
			'summary' => 'required',
			'seo_title' => 'required',
			'seo_description' => 'required',
			'seo_keyword' => 'required',
			'status' => 'required',
		]);
		$notice = Notice::find($id);
		$notice->summary = $data['summary'];
		$notice->description = $data['description'];
		$notice->title = $data['title'];
		$notice->seo_title = $data['seo_title'];
		$notice->seo_description = $data['seo_description'];
		$notice->seo_keyword = $data['seo_keyword'];
		$notice->status = $data['status'];
		$notice->slug = Str::slug($data['title']);
		$notice->save();
		Session::flash('NoticeUpdateSuccess');
		return redirect('cd-admin/view-notice');
	}

	public function deleteNotice($id)
	{
		$notice = Notice::find($id);
		$notice->delete();
		Session::flash('NoticeDeleteSuccess');
		return redirect('cd-admin/view-notice');
	}
}
