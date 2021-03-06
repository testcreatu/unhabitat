<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Goals;
use App\Http\Controllers\backend\ImageController;

class GoalsController extends Controller
{
	use ImageController;
	public function viewGoals()
	{
		$goal = Goals::get();
		return view('cd-admin.goals.view-goals',compact('goal'));
	}
	public function addGoalsForm()
	{
		return view("cd-admin.goals.add-goals");
	}

	public function editGoalsForm($id)
	{
		$data = Goals::find($id);
		return view("cd-admin.goals.edit-goals",compact('data'));
	}

	public function addGoals()
	{
		$data = Request()->validate([
			'image' => '',
			'image.*' => 'required|mimes:jpg,jpeg,png,svg,gif|image',
			'priority_no' => '',
			'summary' => 'required',
		]);
		$goal = new Goals();
		$goal->image = $this->uploadImage($data['image'],'uploads/goals');
		$goal->summary = $data['summary'];
		$goal->priority_no = isset($data['priority_no'])?$data['priority_no']:'9999';
		$goal->save();
		Session::flash('ServiceSuccess');
		return redirect('cd-admin/view-goals');
	}


	public function editGoals($id)
	{
		$data = Request()->validate([
			'summary' => 'required',
			'priority_no' => '',
			'image' => 'mimes:jpg,jpeg,png,svg,gif|image',

		]);
		$goal = Goals::find($id);
		$goal->summary = $data['summary'];
		if(isset($data['image']))
		{
			$this->unlinkImage('uploads/goals/'.$goal['image']);
			$this->unlinkImage('uploads/thumbnail/'.$goal['image']);
			$goal->image = $this->uploadImage($data['image'],'uploads/goals');
		}
		// $goal->status = $data['status'];
		$goal->priority_no = isset($data['priority_no'])?$data['priority_no']:'9999';
		$goal->save();
		Session::flash('ServiceUpdateSuccess');
		return redirect('cd-admin/view-goals');
	}

	public function deleteGoals($id)
	{
		$goal = Goals::find($id);
		$this->unlinkImage('uploads/goals/'.$goal['image']);
		$this->unlinkImage('uploads/thumbnail/'.$goal['image']);
		$goal->delete();
		Session::flash('ServiceDeleteSuccess');
		return redirect('cd-admin/view-goals');
	}
}
