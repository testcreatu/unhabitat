<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Carousel;
use App\Blog;
use App\Projects;
use App\Publications;
use App\Features;
use App\Goals;
use App\VideoGallery;
use App\About;
use App\PhotoGallery;
use App\Notice;
use App\CustomPages;
use App\Newsletter;
use App\CaseStudy;
class NewFrontendController extends Controller
{
	public function viewCustomPage($slug)
	{
		$details = CustomPages::where('slug',$slug)->get()->first();
		return view('custom_pages.custom_page',compact('details'));
	}

	public function NewsletterDetail($slug)
	{
		$finalNewsLetter['detail'] = NewsLetter::where('slug',$slug)->get()->first();
		$finalNewsLetter['project'] = Projects::find($finalNewsLetter['detail']['project_id']);
		return view('project.newsletter-list-detail',compact('finalNewsLetter'));
	}
	public function CaseStudyDetail($slug)
	{
		$finalCaseStudy['detail'] = CaseStudy::where('slug',$slug)->get()->first();
		$finalCaseStudy['project'] = Projects::find($finalCaseStudy['detail']['project_id']);
		return view('project.case-list-detail',compact('finalCaseStudy'));
	}


	public function ProjectNewsList($slug)
	{
		$finalNewsList['project'] = Projects::where('slug',$slug)->get()->first();
		$finalNewsList['list'] = Blog::where('status','active')->where('project_id',$finalNewsList['project']['id'])->paginate(6);
		return view('project.project-news-list',compact('finalNewsList'));
	}

	public function ProjectNewsletterList($slug)
	{
		$finalNewsLetterList['project'] = Projects::where('slug',$slug)->get()->first();
		$finalNewsLetterList['list'] = Newsletter::where('status','active')->where('project_id',$finalNewsLetterList['project']['id'])->paginate(6);
		return view('project.newsletter-list',compact('finalNewsLetterList'));
	}



}
