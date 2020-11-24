<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events;
use Str;
use Session;
class EventsController extends Controller
{
	use ImageController;
	public function viewEvents()
	{
		$events = Events::get();
		return view('cd-admin.events.view-events',compact('events'));
	}
	public function addEventsForm()
	{
		return view("cd-admin.events.add-events");
	}

	public function editEventsForm($id)
	{
		$data = Events::find($id);
		return view("cd-admin.events.edit-events",compact('data'));
	}

	public function addEvents()
	{
		$data = Request()->validate([
			'title' => 'required',
			'description' => 'required',
			'summary' => 'required',
			'event_date' => 'required',
			'event_time' => 'required',
			'seo_title' => '',
			'seo_description' => '',
			'seo_keyword' => '',
			'status' => 'required',
		]);
		$events = new Events();
		$events->summary = $data['summary'];
		$events->description = $data['description'];
		$events->title = $data['title'];
		$events->event_date = $data['event_date'];
		$events->event_time = $data['event_time'];
		$events->seo_title = $data['seo_title'];
		$events->seo_description = $data['seo_description'];
		$events->seo_keyword = $data['seo_keyword'];
		$events->status = $data['status'];
		$events->slug = Str::slug($data['title']);
		$events->save();
		Session::flash('EventSuccess');
		return redirect('cd-admin/view-events');
	}


	public function editEvents($id)
	{
		$data = Request()->validate([
			'title' => 'required',
			'description' => 'required',
			'summary' => 'required',
			'event_date' => 'required',
			'event_time' => 'required',
			'seo_title' => '',
			'seo_description' => '',
			'seo_keyword' => '',
			'status' => 'required',
		]);
		$events = Events::find($id);
		$events->summary = $data['summary'];
		$events->description = $data['description'];
		$events->title = $data['title'];
		$events->seo_title = $data['seo_title'];
		$events->seo_description = $data['seo_description'];
		$events->seo_keyword = $data['seo_keyword'];
		$events->status = $data['status'];
		$events->slug = Str::slug($data['title']);
		$events->save();
		Session::flash('EventUpdateSuccess');
		return redirect('cd-admin/view-events');
	}

	public function deleteEvents($id)
	{
		$events = Events::find($id);
		$events->delete();
		Session::flash('EventDeleteSuccess');
		return redirect('cd-admin/view-events');
	}
}
