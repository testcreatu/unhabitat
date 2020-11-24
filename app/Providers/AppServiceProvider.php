<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Projects;
use App\CustomPages;
use View;
use App\PublicationCategories;
use App\CustomAboutPages;
use App\SocialLinks;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $finalHeader = [];
        $finalHeader['ongoing'] = Projects::where('status','active')->where('project_status','ongoing')->get();
        $finalHeader['completed'] = Projects::where('status','active')->where('project_status','completed')->get();
        $finalHeader['about_pages'] = CustomAboutPages::where('status','active')->orderBy('priority_no','asc')->take(2)->get();
        $finalFooter = [];
        $finalFooter['custom_pages'] = CustomPages::where('status','active')->where('page_for','menu')->get();
        $finalFooter['about_pages'] = CustomAboutPages::where('status','active')->orderBy('priority_no','asc')->skip(2)->take(30)->get();
        $finalHeader['social_links'] = SocialLinks::get()->first();
        $finalFooter['publication_category'] = PublicationCategories::where('status','active')->get();
        View::share('finalHeader',$finalHeader);
        View::share('finalFooter',$finalFooter);

    }
}
