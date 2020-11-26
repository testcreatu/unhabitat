<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\Newsletter;
use App\Projects;
use App\VideoGallery;
use App\Publications;
use App\CaseStudy;
use App\Notice;
class SearchController extends Controller
{

	public function searchAll()
	{
		$finalSearch = [];
		$data = Request()->all();
		$search_term = $data['search_tag'];
		$finalSearch['news'] = Blog::where('status','active')->where('title','LIKE','%'.$search_term.'%')->get();	
		$finalSearch['project'] = Projects::where('status','active')->where('title','LIKE','%'.$search_term.'%')->get();
		$finalSearch['case_study'] = CaseStudy::where('status','active')->where('title','LIKE','%'.$search_term.'%')->get();	
		$finalSearch['newsletter'] = NewsLetter::where('status','active')->where('title','LIKE','%'.$search_term.'%')->get();	
		$finalSearch['publications'] = Publications::where('status','active')->where('title','LIKE','%'.$search_term.'%')->get();	
		$finalSearch['notice'] = Notice::where('status','active')->where('title','LIKE','%'.$search_term.'%')->get();	
		$finalSearch['videos'] = VideoGallery::where('status','active')->where('title','LIKE','%'.$search_term.'%')->get();	
		return view('search.search',compact('finalSearch'));
	}
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

	public function searchProjectVideo()
	{
		$finalVideoList= [];
		$data = Request()->all();
		$search_term = $data['search_term'];
		$project_name = $data['project_name'];
		$type = $data['type'];
		$finalVideoList['project'] = Projects::where('slug',$project_name)->get()->first();
		$finalVideoList['list'] = VideoGallery::where('status','active')->where('project_id',$finalVideoList['project']['id'])->where('title','LIKE','%'.$search_term.'%')->get();
		$finalVideoList['search_term'] = $search_term;
		$finalVideoList['search_type'] = 'search';
		return view('project.project-video-list',compact('finalVideoList'));
	}

	public function searchProjectVideoYear()
	{
		$finalVideoList= [];
		$data = Request()->all();
		$year = $data['year'];
		$project_name = $data['project_name'];
		$type = $data['type'];
		$finalVideoList['project'] = Projects::where('slug',$project_name)->get()->first();
		$finalVideoList['list'] = VideoGallery::where('status','active')->where('project_id',$finalVideoList['project']['id'])->whereYear('created_at', '=', date($year))->get();
		$finalVideoList['search_term'] = $year;
		$finalVideoList['search_type'] = 'year';
		return view('project.project-video-list',compact('finalVideoList'));
	}


	public function searchProjectCaseStudy()
	{
		$finalCaseStudyList= [];
		$data = Request()->all();
		$search_term = $data['search_term'];
		$project_name = $data['project_name'];
		$type = $data['type'];
		$finalCaseStudyList['project'] = Projects::where('slug',$project_name)->get()->first();
		$finalCaseStudyList['list'] = CaseStudy::where('status','active')->where('project_id',$finalCaseStudyList['project']['id'])->where('title','LIKE','%'.$search_term.'%')->get();
		$finalCaseStudyList['search_term'] = $search_term;
		$finalCaseStudyList['search_type'] = 'search';
		return view('project.case-list',compact('finalCaseStudyList'));
	}

	public function searchProjectCaseStudyYear()
	{
		$finalCaseStudyList= [];
		$data = Request()->all();
		$year = $data['year'];
		$project_name = $data['project_name'];
		$type = $data['type'];
		$finalCaseStudyList['project'] = Projects::where('slug',$project_name)->get()->first();
		$finalCaseStudyList['list'] = CaseStudy::where('status','active')->where('project_id',$finalCaseStudyList['project']['id'])->whereYear('created_at', '=', date($year))->get();
		$finalCaseStudyList['search_term'] = $year;
		$finalCaseStudyList['search_type'] = 'year';
		return view('project.case-list',compact('finalCaseStudyList'));
	}
}
