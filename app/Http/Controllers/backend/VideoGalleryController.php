<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VideoGallery;
use Session;
use Carbon\Carbon;
class VideoGalleryController extends Controller
{
	public function addVideoGalleryForm()
	{
		return view('cd-admin.videogallery.add-video-gallery');
	}

	public function viewVideoGallery()
	{
		$video = VideoGallery::get();
		return view('cd-admin.videogallery.view-video-gallery',compact('video'));
	}
	public function editVideoGalleryForm($id)
	{
		$data = VideoGallery::find($id);
		return view('cd-admin.videogallery.edit-video-gallery',compact('data'));
	}
	public function addVideoGallery()
	{
		$data = Request()->validate([
			'url' => 'required',
			'status' => 'required',
			'title' => 'required',
		]);
		$new_url = str_replace('watch?v=','embed/', $data['url']);
		$video_id = substr($data['url'], 32);
		$gallery = new VideoGallery();
		$gallery->title = $data['title'];
		$gallery->url = $data['url'];
		$gallery->embeded_url = $new_url;
		$gallery->video_id = $video_id;
		$gallery->status = $data['status'];
		$gallery->save();
		Session::flash('VideoAddSuccess');
		return redirect()->route('view-video-gallery');
	}

	public function viewOneVideoGallery($id)
	{
		$video = VideoGallery::find($id);
		return view('cd-admin.videogallery.view-one-video',compact('video'));
	}

	public function updateStatus($id)
	{
		$data = VideoGallery::find($id);
		if ($data['status'] == 'active') 
		{
			$a['status'] = 'inactive';
		}
		else
		{
			$a['status'] = 'active';
		}
		$data->status = $a['status'];
		$data->save();
		Session::flash('VideoEditSuccess');
		return redirect()->back();
	}

	public function editVideoGallery($id)
	{
		$data = Request()->validate([
			'url' => 'required',
			'status' => 'required',
			'title' => 'required',
		]);
		$new_url = str_replace('watch?v=','embed/', $data['url']);
		$video_id = substr($data['url'], 32);
		$gallery = VideoGallery::find($id);
		$gallery->title = $data['title'];
		$gallery->url = $data['url'];
		$gallery->embeded_url = $new_url;
		$gallery->video_id = $video_id;
		$gallery->status = $data['status'];
		$gallery->save();
		Session::flash('VideoEditSuccess');
		return redirect()->route('view-video-gallery');
	}

	public function deleteVideoGallery($id)
	{
		$data = VideoGallery::find($id);
		$data->delete();
		Session::flash('VideoDeleteSuccess');
		return redirect()->route('view-video-gallery');
	}
}
