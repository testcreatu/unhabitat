<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SocialLinks;
use Session;
class SocialLinksController extends Controller
{

	public function view()
	{
		$social = SocialLinks::orderBy('id','desc')->get()->first();
		return view('cd-admin.social_links.view-all-social-links',compact('social'));
	}
	public function addsocialLinksForm()
	{
		return view('cd-admin.social_links.add-new-social_link');
	}

	public function editsocialLinksForm($id)
	{
		$data = SocialLinks::find($id);
		return view('cd-admin.social_links.edit-social_links',compact('data'));
	}

	public function store()
	{
		$data = Request()->validate([
			'fb_link' => '',
			'twitter_link' => '',
			'insta_link' => '',
			'youtube_link' => '',
			'linkedin_link' => '',
			'show_status' => 'required',
		]);
		$social_links = new SocialLinks();
		$social_links->fb_link = $data['fb_link'];
		$social_links->twitter_link = $data['twitter_link'];
		$social_links->insta_link = $data['insta_link'];
		$social_links->youtube_link = $data['youtube_link'];
		$social_links->linkedin_link = $data['linkedin_link'];
		$social_links->show_status = $data['show_status'];
		$social_links->save();
		Session::flash('storeSuccess');
		return redirect('/cd-admin/view-social-links');
	}

	public function update($id)
	{
		$data = Request()->validate([
			'fb_link' => '',
			'twitter_link' => '',
			'insta_link' => '',
			'youtube_link' => '',
			'linkedin_link' => '',
			'show_status' => 'required',
		]);
		$social_links = SocialLinks::find($id);
		$social_links->fb_link = $data['fb_link'];
		$social_links->twitter_link = $data['twitter_link'];
		$social_links->insta_link = $data['insta_link'];
		$social_links->youtube_link = $data['youtube_link'];
		$social_links->linkedin_link = $data['linkedin_link'];
		$social_links->show_status = $data['show_status'];
		$social_links->save();
		Session::flash('updateSuccess');
		return redirect('/cd-admin/view-social-links');
	}
}
