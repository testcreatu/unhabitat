<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Projects;
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
        View::share('finalHeader',$finalHeader);

    }
}
