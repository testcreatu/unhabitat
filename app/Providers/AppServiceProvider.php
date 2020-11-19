<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Projects;
use App\CustomPages;
use View;
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
        $finalFooter = [];
        $finalFooter['custom_pages'] = CustomPages::where('status','active')->where('page_for','menu')->get();
        View::share('finalHeader',$finalHeader);
        View::share('finalFooter',$finalFooter);

    }
}
