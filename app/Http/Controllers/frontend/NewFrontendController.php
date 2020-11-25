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
use App\PublicationCategories;
use App\CaseStudy;
use App\CustomAboutPages;
use App\Events;
use App\Subscription;
use Session;
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


	public function ProjectVideoList($slug)
	{
		$finalVideoList['project'] = Projects::where('slug',$slug)->get()->first();
		$finalVideoList['list'] = VideoGallery::where('status','active')->where('project_id',$finalVideoList['project']['id'])->orderBy('id','desc')->paginate(6);
		return view('project.project-video-list',compact('finalVideoList'));
	}

	public function ProjectPublicationList($slug)
	{
		$finalPublicationList['project'] = Projects::where('slug',$slug)->get()->first();
		$finalPublicationList['list'] = Publications::where('status','active')->where('project_id',$finalPublicationList['project']['id'])->orderBy('id','desc')->paginate(6);
		return view('project.project-publication-list',compact('finalPublicationList'));
	}

	public function ProjectCaseStudyList($slug)
	{
		$finalCaseStudyList['project'] = Projects::where('slug',$slug)->get()->first();
		$finalCaseStudyList['list'] = CaseStudy::where('status','active')->where('project_id',$finalCaseStudyList['project']['id'])->orderBy('id','desc')->paginate(6);
		return view('project.case-list',compact('finalCaseStudyList'));
	}

	public function PublicationsCategory($slug)
	{
		$finalPublication['category'] = PublicationCategories::where('slug',$slug)->get()->first();
		$finalPublication['list'] = Publications::where('category_id',$finalPublication['category']['id'])->orderBy('id','desc')->paginate(6);
		return view('publication.national-list',compact('finalPublication'));
	}

	public function aboutPages($slug)
	{
		$finalAbout = [];
		$finalAbout['detail'] = CustomAboutPages::where('slug',$slug)->get()->first();
		return view('about.about-us',compact('finalAbout'));
	}

	public function noticeList()
	{
		$finalNotice = [];
		$finalNotice['list'] = Notice::where('status','active')->orderBy('id','desc')->get();
		return view('notice.notice-list',compact('finalNotice'));
	}

	public function eventList()
	{
		$eventList = [];
		$eventList['list']  = Events::where('status','active')->orderBy('id','desc')->get();
		return view('event.event-list',compact('eventList'));
	}

	public function eventDetail($slug)
	{
		$eventDetail = [];
		$eventDetail['detail']  = Events::where('slug',$slug)->get()->first();
		return view('event.event',compact('eventDetail'));
	}

	public function subscribeToUnHabitat()
	{
		$data = Request()->validate([
			'email' => 'required|email',
		]);
		$subscription = new Subscription();
		$subscription->email = $data['email'];
		$subscription->save();
		Session::flash("SubscriptionSuccess");
		return redirect()->back();
	}




}
