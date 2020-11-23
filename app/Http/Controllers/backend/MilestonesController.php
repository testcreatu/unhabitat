<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Milestones;
use Carbon\Carbon;
use Session;
class MilestonesController extends Controller
{
	use ImageController;
	public function viewMilestones()
	{
		$milestones = Milestones::get();
		return view('cd-admin.milestones.view-milestones',compact('milestones'));
	}
	public function addMilestonesForm()
	{
		return view("cd-admin.milestones.add-milestones");
	}

	public function editMilestonesForm($id)
	{
		$data = Milestones::find($id);
		return view("cd-admin.milestones.edit-milestones",compact('data'));
	}

	public function addMilestones()
	{
		$data = Request()->validate([
			'summary' => 'required',
			'number' => 'required',
			'status' => 'required',
		]);
		$milestones = new Milestones();
		$milestones->summary = $data['summary'];
		$milestones->number = $data['number'];
		$milestones->status = $data['status'];
		$milestones->save();
		Session::flash('ServiceSuccess');
		return redirect('cd-admin/view-milestones');
	}


	public function editMilestones($id)
	{
		$data = Request()->validate([
			'summary' => 'required',
			'number' => 'required',
			'status' => 'required',

		]);
		$milestones = Milestones::find($id);
		$milestones->summary = $data['summary'];
		$milestones->number = $data['number'];
		$milestones->status = $data['status'];
		$milestones->save();
		Session::flash('ServiceUpdateSuccess');
		return redirect('cd-admin/view-milestones');
	}

	public function deleteMilestones($id)
	{
		$milestones = Milestones::find($id);
		$milestones->delete();
		Session::flash('ServiceDeleteSuccess');
		return redirect('cd-admin/view-milestones');
	}
}
