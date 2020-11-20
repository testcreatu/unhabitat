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
}
