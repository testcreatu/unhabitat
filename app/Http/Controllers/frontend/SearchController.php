<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\NewsLetter;
use App\Projects;
class SearchController extends Controller
{
	public function searchProjectNews()
	{
		$finalNewsList= [];
		$data = Request()->all();
		$search_term = $data['search_term'];
		$project_name = $data['project_name'];
		$type = $data['type'];
		$finalNewsList['project'] = Projects::where('slug',$project_name)->get()->first();
		$finalNewsList['list'] = Blog::where('status','active')->where('project_id',$finalNewsList['project']['id'])->where('title','LIKE','%'.$search_term.'%')->get();
		$finalNewsList['search_term'] = $search_term;
		$finalNewsList['search_type'] = 'search';
		return view('project.project-news-list',compact('finalNewsList'));
	}

	public function searchProjectNewsYear()
	{
		$finalNewsList= [];
		$data = Request()->all();
		$year = $data['year'];
		$project_name = $data['project_name'];
		$type = $data['type'];
		$finalNewsList['project'] = Projects::where('slug',$project_name)->get()->first();
		$finalNewsList['list'] = Blog::where('status','active')->where('project_id',$finalNewsList['project']['id'])->whereYear('created_at', '=', date($year))->get();
		$finalNewsList['search_term'] = $year;
		$finalNewsList['search_type'] = 'year';
		return view('project.project-news-list',compact('finalNewsList'));
	}

	public function searchProjectNewsLetter()
	{
		$finalNewsLetterList= [];
		$data = Request()->all();
		$search_term = $data['search_term'];
		$project_name = $data['project_name'];
		$type = $data['type'];
		$finalNewsLetterList['project'] = Projects::where('slug',$project_name)->get()->first();
		$finalNewsLetterList['list'] = NewsLetter::where('status','active')->where('project_id',$finalNewsLetterList['project']['id'])->where('title','LIKE','%'.$search_term.'%')->get();
		$finalNewsLetterList['search_term'] = $search_term;
		$finalNewsLetterList['search_type'] = 'search';
		return view('project.newsletter-list',compact('finalNewsLetterList'));
	}

	public function searchProjectNewsLetterYear()
	{
		$finalNewsLetterList= [];
		$data = Request()->all();
		$year = $data['year'];
		$project_name = $data['project_name'];
		$type = $data['type'];
		$finalNewsLetterList['project'] = Projects::where('slug',$project_name)->get()->first();
		$finalNewsLetterList['list'] = NewsLetter::where('status','active')->where('project_id',$finalNewsLetterList['project']['id'])->whereYear('created_at', '=', date($year))->get();
		$finalNewsLetterList['search_term'] = $year;
		$finalNewsLetterList['search_type'] = 'year';
		return view('project.newsletter-list',compact('finalNewsLetterList'));
	}
}
