<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});

Route::get('home', function () {
    return view('home.home');
});

Route::get('home', function () {
    return view('home.home');
});

Route::get('about_us', function () {
    return view('about.about-us');
});

Route::get('featured_news', function () {
    return view('news.featured-news-list');
});

Route::get('recent_publish', function () {
    return view('news.recent-publish-list');
});

Route::get('our_video', function () {
    return view('news.our-video-list');
});

Route::get('featured_news_detail', function () {
    return view('news-detail.featured-news-detail');
});

Route::get('images', function () {
    return view('gallery.gallery');
});

Route::get('recent_publish_detail', function () {
    return view('news-detail.recent-publish-detail');
});

Route::get('notice', function () {
    return view('notice.notice');
});

Route::get('focus_area', function () {
    return view('focus-area.focus-area');
});

Route::get('project_detail', function () {
    return view('project.project-detail');
});

Route::get('project_detail_content', function () {
    return view('project.project-detail-content');
});

Route::get('case_list', function () {
    return view('project.case-list');
});

Route::get('case_list_detail', function () {
    return view('project.case-list-detail');
});

Route::get('newsletter_list', function () {
    return view('project.newsletter-list');
});

Route::get('covid-19_response', function () {
    return view('covid-19.covid-19');
});

Route::get('event', function () {
    return view('event.event');
});






Route::get('link', function () {
    return view('link.link');
});