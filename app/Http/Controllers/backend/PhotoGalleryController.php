<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PhotoGallery;
use Session;
use Carbon\Carbon;
use App\Http\Controllers\backend\ImageController;
class PhotoGalleryController extends Controller
{
	use ImageController;
	public function addPhotoGalleryForm()
	{
		return view('cd-admin.photogallery.add-photo-gallery');
	}

	public function viewPhotoGallery()
	{
		$photo = PhotoGallery::get();
		return view('cd-admin.photogallery.view-photo-gallery',compact('photo'));
	}
	public function editPhotoGalleryForm($id)
	{
		$data = PhotoGallery::find($id);
		return view('cd-admin.photogallery.edit-photo-gallery',compact('data'));
	}
	public function addPhotoGallery()
	{
		$data = Request()->validate([
			'image' => '',
			'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
		]);
		foreach($data['image'] as $photo)
		{
			$gallery = new PhotoGallery();
			$gallery->image = $this->uploadImage($photo,'uploads/photo-gallery');
			$gallery->save();
		}
		Session::flash('PhotoAddSuccess');
		return redirect()->route('view-photo-gallery');
	}

	public function viewOnePhotoGallery($id)
	{
		$photo = PhotoGallery::find($id);
		return view('cd-admin.photogallery.view-one-photo',compact('photo'));
	}

	public function updateStatus($id)
	{
		$data = PhotoGallery::find($id);
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
		Session::flash('PhotoEditSuccess');
		return redirect()->back();
	}

	public function editPhotoGallery($id)
	{
		$data = Request()->validate([
			'url' => 'required',
			'status' => 'required',
			'title' => 'required',
		]);
		$new_url = str_replace('watch?v=','embed/', $data['url']);
		$photo_id = substr($data['url'], 32);
		$gallery = PhotoGallery::find($id);
		$gallery->title = $data['title'];
		$gallery->url = $data['url'];
		$gallery->embeded_url = $new_url;
		$gallery->photo_id = $photo_id;
		$gallery->status = $data['status'];
		$gallery->save();
		Session::flash('PhotoEditSuccess');
		return redirect()->route('view-photo-gallery');
	}

	public function deletePhotoGallery($id)
	{
		$data = PhotoGallery::find($id);
		$data->delete();
		Session::flash('PhotoDeleteSuccess');
		return redirect()->route('view-photo-gallery');
	}
}
