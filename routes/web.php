<?php



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

Route::get('/','frontend\FrontendController@home');

Route::get('home','frontend\FrontendController@home');

Route::get('about_us','frontend\FrontendController@aboutUs');

Route::get('featured_news','frontend\FrontendController@featuredNewsList');

Route::get('recent_publish','frontend\FrontendController@publicationList');

Route::get('our_video', 'frontend\FrontendController@videoGallery');

Route::get('featured_news_detail/{slug}','frontend\FrontendController@newsDetail');

Route::get('images','frontend\FrontendController@photoGallery');

Route::get('recent_publish_detail/{slug}','frontend\FrontendController@publicationDetail');

Route::get('notice/{slug}', 'frontend\FrontendController@noticeDetail');

Route::get('focus_area', function () {
    return view('focus-area.focus-area');
});

Route::get('project_detail/{slug}', 'frontend\FrontendController@projectDetail');

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

Route::get('newsletter_list_detail', function () {
    return view('project.newsletter-list-detail');
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
Auth::routes(['register' => false]);

Route::group(['middleware'=>'auth'], function(){


    Route::get('/cd-admin/dashboard', 'HomeController@index')->name('dashboard');


    //About
    Route::get('/cd-admin/add-about','backend\AboutController@aboutform');
    Route::get('/cd-admin/view-about','backend\AboutController@view');
    Route::post('/cd-admin/add-about','backend\AboutController@store');
    Route::get('/cd-admin/edit-about/{id}','backend\AboutController@edit');
    Route::post('/cd-admin/edit-about/{id}','backend\AboutController@update');


  //Carousel
    Route::get('/cd-admin/add-carousel','backend\CarouselController@addCarouselForm')->name('add-carousel-form');
    Route::post('/cd-admin/add-carousel','backend\CarouselController@addCarousel')->name('add-carousel');
    Route::get('/cd-admin/view-carousel','backend\CarouselController@viewCarousel')->name('view-carousel');
    Route::get('/cd-admin/edit-carousel/{id}','backend\CarouselController@editCarouselForm')->name('edit-carousel-form');
    Route::post('/cd-admin/edit-carousel/{id}','backend\CarouselController@editCarousel')->name('edit-carousel');
    Route::get('/cd-admin/delete-carousel/{id}','backend\CarouselController@deleteCarousel')->name('delete-carousel');

    //Blog
    Route::get('/cd-admin/add-blog','backend\BlogController@addBlogForm')->name('add-blog-form');
    Route::post('/cd-admin/add-blog','backend\BlogController@addBlog')->name('add-blog');
    Route::get('/cd-admin/view-blog','backend\BlogController@viewBlog')->name('view-blog');
    Route::get('/cd-admin/edit-blog/{id}','backend\BlogController@editBlogForm')->name('edit-blog-form');
    Route::post('/cd-admin/edit-blog/{id}','backend\BlogController@editBlog')->name('edit-blog');
    Route::get('/cd-admin/delete-blog/{id}','backend\BlogController@deleteBlog')->name('delete-blog');


        //Projects
    Route::get('/cd-admin/add-projects','backend\ProjectsController@addProjectsForm')->name('add-projects-form');
    Route::post('/cd-admin/add-projects','backend\ProjectsController@addProjects')->name('add-projects');
    Route::get('/cd-admin/view-projects','backend\ProjectsController@viewProjects')->name('view-projects');
    Route::get('/cd-admin/edit-projects/{id}','backend\ProjectsController@editProjectsForm')->name('edit-projects-form');
    Route::post('/cd-admin/edit-projects/{id}','backend\ProjectsController@editProjects')->name('edit-projects');
    Route::get('/cd-admin/delete-projects/{id}','backend\ProjectsController@deleteProjects')->name('delete-projects');


        //Publications
    Route::get('/cd-admin/add-publications','backend\PublicationsController@addPublicationsForm')->name('add-publications-form');
    Route::post('/cd-admin/add-publications','backend\PublicationsController@addPublications')->name('add-publications');
    Route::get('/cd-admin/view-publications','backend\PublicationsController@viewPublications')->name('view-publications');
    Route::get('/cd-admin/edit-publications/{id}','backend\PublicationsController@editPublicationsForm')->name('edit-publications-form');
    Route::post('/cd-admin/edit-publications/{id}','backend\PublicationsController@editPublications')->name('edit-publications');
    Route::get('/cd-admin/delete-publications/{id}','backend\PublicationsController@deletePublications')->name('delete-publications');

        // Features
    Route::get('/cd-admin/view-features','backend\FeaturesController@viewFeatures')->name('view-features');
    Route::get('/cd-admin/add-features','backend\FeaturesController@addFeaturesForm')->name('add-features-form');
    Route::post('/cd-admin/add-features','backend\FeaturesController@addFeatures')->name('add-features');
    Route::get('/cd-admin/edit-features/{id}','backend\FeaturesController@editFeaturesForm')->name('edit-features-form');
    Route::post('/cd-admin/edit-features/{id}','backend\FeaturesController@editFeatures')->name('edit-features');
    Route::get('/cd-admin/delete-features/{id}','backend\FeaturesController@deleteFeatures')->name('delete-features');

            // Goals
    Route::get('/cd-admin/view-goals','backend\GoalsController@viewGoals')->name('view-goals');
    Route::get('/cd-admin/add-goals','backend\GoalsController@addGoalsForm')->name('add-goals-form');
    Route::post('/cd-admin/add-goals','backend\GoalsController@addGoals')->name('add-goals');
    Route::get('/cd-admin/edit-goals/{id}','backend\GoalsController@editGoalsForm')->name('edit-goals-form');
    Route::post('/cd-admin/edit-goals/{id}','backend\GoalsController@editGoals')->name('edit-goals');
    Route::get('/cd-admin/delete-goals/{id}','backend\GoalsController@deleteGoals')->name('delete-goals');

    //Video Gallery
    Route::get('/cd-admin/add-video-gallery','backend\VideoGalleryController@addVideoGalleryForm')->name('add-video-gallery-form');
    Route::post('/cd-admin/add-video-gallery','backend\VideoGalleryController@addVideoGallery')->name('add-video-gallery');
    Route::get('/cd-admin/view-video-gallery','backend\VideoGalleryController@viewVideoGallery')->name('view-video-gallery');
    Route::get('/cd-admin/view/one-video-gallery/{id}','backend\VideoGalleryController@viewOneVideoGallery')->name('view-one-video-gallery');
    Route::get('/cd-admin/edit-video-gallery/{id}','backend\VideoGalleryController@editVideoGalleryForm')->name('edit-video-gallery-form');
    Route::post('/cd-admin/edit-video-gallery/{id}','backend\VideoGalleryController@editVideoGallery')->name('edit-video-gallery');
    Route::get('/cd-admin/delete-video-gallery/{id}','backend\VideoGalleryController@deleteVideoGallery')->name('delete-video-gallery');


            // Goals
    Route::get('/cd-admin/view-notice','backend\NoticeController@viewNotice')->name('view-notice');
    Route::get('/cd-admin/add-notice','backend\NoticeController@addNoticeForm')->name('add-notice-form');
    Route::post('/cd-admin/add-notice','backend\NoticeController@addNotice')->name('add-notice');
    Route::get('/cd-admin/edit-notice/{id}','backend\NoticeController@editNoticeForm')->name('edit-notice-form');
    Route::post('/cd-admin/edit-notice/{id}','backend\NoticeController@editNotice')->name('edit-notice');
    Route::get('/cd-admin/delete-notice/{id}','backend\NoticeController@deleteNotice')->name('delete-notice');

        //Photo Gallery
    Route::get('/cd-admin/add-photo-gallery','backend\PhotoGalleryController@addPhotoGalleryForm')->name('add-photo-gallery-form');
    Route::post('/cd-admin/add-photo-gallery','backend\PhotoGalleryController@addPhotoGallery')->name('add-photo-gallery');
    Route::get('/cd-admin/view-photo-gallery','backend\PhotoGalleryController@viewPhotoGallery')->name('view-photo-gallery');
    Route::get('/cd-admin/view/one-photo-gallery/{id}','backend\PhotoGalleryController@viewOnePhotoGallery')->name('view-one-photo-gallery');
    Route::get('/cd-admin/edit-photo-gallery/{id}','backend\PhotoGalleryController@editPhotoGalleryForm')->name('edit-photo-gallery-form');
    Route::post('/cd-admin/edit-photo-gallery/{id}','backend\PhotoGalleryController@editPhotoGallery')->name('edit-photo-gallery');
    Route::get('/cd-admin/delete-photo-gallery/{id}','backend\PhotoGalleryController@deletePhotoGallery')->name('delete-photo-gallery');

        //NewsLetter
    Route::get('/cd-admin/add-newsletter','backend\NewsLetterController@addNewsLetterForm')->name('add-newsletter-form');
    Route::post('/cd-admin/add-newsletter','backend\NewsLetterController@addNewsLetter')->name('add-newsletter');
    Route::get('/cd-admin/view-newsletter','backend\NewsLetterController@viewNewsLetter')->name('view-newsletter');
    Route::get('/cd-admin/edit-newsletter/{id}','backend\NewsLetterController@editNewsLetterForm')->name('edit-newsletter-form');
    Route::post('/cd-admin/edit-newsletter/{id}','backend\NewsLetterController@editNewsLetter')->name('edit-newsletter');
    Route::get('/cd-admin/delete-newsletter/{id}','backend\NewsLetterController@deleteNewsLetter')->name('delete-newsletter');


    //Case Study
    Route::get('/cd-admin/add-case-study','backend\CaseStudyController@addCaseStudyForm')->name('add-case-study-form');
    Route::post('/cd-admin/add-case-study','backend\CaseStudyController@addCaseStudy')->name('add-case-study');
    Route::get('/cd-admin/view-case-study','backend\CaseStudyController@viewCaseStudy')->name('view-case-study');
    Route::get('/cd-admin/edit-case-study/{id}','backend\CaseStudyController@editCaseStudyForm')->name('edit-case-study-form');
    Route::post('/cd-admin/edit-case-study/{id}','backend\CaseStudyController@editCaseStudy')->name('edit-case-study');
    Route::get('/cd-admin/delete-case-study/{id}','backend\CaseStudyController@deleteCaseStudy')->name('delete-case-study');

    //Publication Category
    Route::get('/cd-admin/add-publication-category','backend\PublicationCategoryController@addPublicationCategoryForm')->name('add-publication-category-form');
    Route::post('/cd-admin/add-publication-category','backend\PublicationCategoryController@addPublicationCategory')->name('add-publication-category');
    Route::get('/cd-admin/view-publication-category','backend\PublicationCategoryController@viewPublicationCategory')->name('view-publication-category');
    Route::get('/cd-admin/edit-publication-category/{id}','backend\PublicationCategoryController@editPublicationCategoryForm')->name('edit-publication-category-form');
    Route::post('/cd-admin/edit-publication-category/{id}','backend\PublicationCategoryController@editPublicationCategory')->name('edit-publication-category');
    Route::get('/cd-admin/delete-publication-category/{id}','backend\PublicationCategoryController@deletePublicationCategory')->name('delete-publication-category');

});
