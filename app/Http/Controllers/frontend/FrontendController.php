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
use App\FilesCategory;
use App\Files;
use App\Newsletter;
use App\CaseStudy;
use App\CustomPages;
use App\PageTitle;
use App\Milestones;

class FrontendController extends Controller
{
	public function home()
	{
		$finalHome = [];
		$finalHome['carousel'] = Carousel::where('status','active')->get();
		$finalHome['projects'] = Projects::where('status','active')->where('is_trending','yes')->orderBy('id','desc')->get();
		$finalHome['blog'] = Blog::where('status','active')->orderBy('id','desc')->take(3)->get();
		$finalHome['publications'] = Publications::where('status','active')->where('show_in_homepage','show')->orderBy('id','desc')->take(4)->get();
		$finalHome['features'] = Features::where('status','active')->get();
		$finalHome['goals'] = Goals::orderBy('priority_no','asc')->get();
		$finalHome['milestones'] = Milestones::where('status','active')->take(6)->get();
		$finalHome['features_desc'] = PageTitle::where('page_name','Features')->get()->first();
		$finalHome['milestones_desc'] = PageTitle::where('page_name','Milestones')->get()->first();
		$finalHome['video-gallery'] = VideoGallery::where('status','active')->take(3)->get();
		return view('home.home',compact('finalHome'));
	}

	public function projectDetail($slug)
	{

		$finalProject['detail'] = Projects::where('slug',$slug)->get()->first();
		$finalProject['news'] = Blog::where('status','active')->where('project_id',$finalProject['detail']['id'])->take(3)->get();
		$finalProject['status']['news_status'] = count($finalProject['news']) == 0 ?0:1;
		$finalProject['publications'] = Publications::where('status','active')->where('project_id',$finalProject['detail']['id'])->take(3)->get();
		$finalProject['status']['publications_status'] = count($finalProject['publications']) == 0 ?0:1;
		$finalProject['newsletter'] = Newsletter::where('status','active')->where('project_id',$finalProject['detail']['id'])->take(3)->get();
		$finalProject['status']['newsletter_status'] = count($finalProject['newsletter']) == 0 ?0:1;
		$finalProject['project_report_categories'] = FilesCategory::where('status','active')->where('project_id',$finalProject['detail']['id'])->get();
		$finalProject['videos'] = VideoGallery::where('project_id',$finalProject['detail']['id'])->take(3)->get();
		$finalProject['status']['videos_status'] = count($finalProject['videos']) == 0 ?0:1;

		$finalProject['case_study'] = CaseStudy::where('project_id',$finalProject['detail']['id'])->take(3)->get();
		$finalProject['status']['case_study_tab'] = count($finalProject['case_study']) == 0 ?0:1;

		$finalProject['custom_pages'] = CustomPages::where('project_id',$finalProject['detail']['id'])->where('page_for','project')->get();
		foreach($finalProject['project_report_categories'] as $reportCategory)
		{
			$reportCategory['files'] = Files::where('status','active')->where('category_id',$reportCategory['id'])->get();
		}
		return view('project.project-detail-content',compact('finalProject'));
	}

	public function publicationDetail($slug)
	{

		$finalPublication['detail'] = Publications::where('slug',$slug)->get()->first();
		$finalPublication['latest_news'] = Blog::where('status','active')->take(3)->get();
		$finalPublication['projects'] = Projects::where('status','active')->take(3)->get();
		$finalPublication['notice'] = Notice::where('status','active')->take(5)->get();

		return view('news-detail.recent-publish-detail',compact('finalPublication'));
	}

	public function featuredNewsList()
	{
		$finalNewsList = Blog::where('status','active')->orderBy('id','desc')->paginate(9);
		return view('news.featured-news-list',compact('finalNewsList'));
	}

	public function publicationList()
	{
		$finalPublicationList = Publications::where('status','active')->orderBy('id','desc')->paginate(9);
		return view('news.recent-publish-list',compact('finalPublicationList'));
	}

	public function aboutUs()
	{
		$finalAbout = [];
		$finalAbout['detail'] = About::get()->first();
		$finalAbout['detail']['title'] = "About Us";
		return view('about.about-us',compact('finalAbout'));
	}

	public function photoGallery()
	{
		$photoGallery = PhotoGallery::get();
		return view('gallery.gallery',compact('photoGallery'));

	}

	public function videoGallery()
	{
		$videoGallery = VideoGallery::where('status','active')->paginate(9);
		return view('news.our-video-list',compact('videoGallery'));
	}

	public function newsDetail($slug)
	{
		$finalNewsDetail = [];
		$finalNewsDetail['detail'] = Blog::where('slug',$slug)->get()->first();
		$finalNewsDetail['latest_projects'] = Projects::where('status','active')->take(3)->get();
		$finalNewsDetail['publications'] = Publications::where('status','active')->take(3)->get();
		$finalNewsDetail['notice'] = Notice::where('status','active')->take(5)->get();
		return view('news-detail.featured-news-detail',compact('finalNewsDetail'));
	}

	public function noticeDetail($slug)
	{
		$notice = Notice::where('slug',$slug)->get()->first();
		$other_notice = Notice::where('status','active')->where('id','!=',$notice['id'])->get();
		return view('notice.notice',compact('notice','other_notice'));
	}
}
