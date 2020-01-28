<?php

/**  FRONTED ROUTE
 * -- ex: route('frontend.homepage') // for homepage url.
 * -- ex: route('frontend.scholarship.index' // for scholarship page.
 **/
Route::group(['middleware' => ['locale']],function () {
    Route::name('frontend.')->group(function () {
        Route::get('/', 'HomeController@index')->name('homepage');
        Route::get('faculty-and-staff', 'HomeController@facultyAndStaff')->name('facultyAndStaff');

        Route::get('contact-us', 'ContactUsController@index')->name('contactUs'); // for page contactUs
        Route::post('contact-us','ContactUsController@storeQuestion')->name('postContactUs');; // for page contactUs submit message
        Route::get('about-us','HomeController@aboutUs')->name('aboutUs'); // for page aboutUs
        Route::get('scholarship/{link}','ScholarshipController@page_tab')->name('scholarship_alumini'); // for page scholarship
        Route::get('scholarship', 'ScholarshipController@index')->name('scholarship.index'); // for page scholarship

        Route::get('scholarships','ScholarshipsController@index')->name('scholarships.index');// new scholarship page
        Route::get('scholarships/{link}','ScholarshipsController@detail')->name('scholarships.detail'); //  scholarship function which link to show

        Route::get('faqs', 'FAQsController@getindex')->name('faq');
        Route::get('program', 'ProgramController@index')->name('program');
        Route::get('future-student', 'ProgramController@futureStudent')->name('futureStudent');
        Route::get('alumni', 'ProgramController@alumni')->name('alumni');
        Route::get('event', 'ProgramController@event')->name('event');

        Route::get('research', 'HomeController@research')->name('research');
        Route::get('project', 'HomeController@project')->name('project');
        Route::get('incubator', 'HomeController@incubator')->name('incubator');
        Route::get('seminar', 'HomeController@seminar')->name('seminar');

        Route::get('studentMessage','StudentMessageController@index')->name('studentMessage.index');

        Route::get('importantLink','ImportantLinkController@index')->name('importantLink.index');

        Route::get('staffMobility','StaffMobilityController@index')->name('staffmobility.index');
        Route::get('staffMobility/{link}','StaffMobilityController@detail')->name('staffmobility.detail');

        Route::get('gic-staff','GicStaffController@index')->name('gicStaff');
        Route::get('gic-staff/{link}','GicStaffController@detail')->name('gicStaff.detail');

        Route::get('alumni-list','AlumniListController@index')->name('alumni.index');

        Route::get('invited-professors','InvitedProfessorsController@index');
        Route::get('invited-professors/{link}','InvitedProfessorsController@detail');

        Route::get('awardee','AwardeeController@index');
        Route::get('awardee/{link}','AwardeeController@detail');

        Route::get('timetable','TimetableController@index');

        Route::get('gic-report','GicReportController@index');

        Route::get('calendar ','CalendarController@index');

        Route::get('gic-service ','GicServiceController@index');
        Route::get('gic-service/{link} ','GicServiceController@detail');

        Route::get('student-project','StudentProjectController@index');
        Route::get('student-project/{link}','StudentProjectController@detail');

        Route::get('who-we-are','HomeController@who_we_are')->name('whoWeAre');
        Route::get('missions','HomeController@mission')->name('mission');
        Route::get('visions','HomeController@vision')->name('vision');

        Route::get('logout', 'Auth\LoginController@logout')->name('logout');

        Route::get('locale/{locale}', function($locale) {
            session(['locale' => $locale]);
            return back();
        });

        // partners
        Route::get('partners/{type}', 'PartnerController@getIndex');

        // events
        Route::get('events', 'EventController@getIndex')->name('seminar');
        Route::get('events/{id}', 'EventController@getEventDetail');

        // events jqery
        Route::get('events-jquery/{id}', 'EventController@getEventDetailJqery');

        // gallery videos and photos
        Route::get('gallery/photos', 'GalleryController@getPhotos')->name('gallery.photo');
        Route::get('gallery/videos', 'GalleryController@getVideos')->name('gallery.video');

        // news
        Route::get('news', 'NewsController@getIndex')->name('news.index');
        Route::get('news/{id}', 'NewsController@show')->name('news.show');

        // products
        Route::get('products', 'ProductController@index');
        Route::get('products/{id}', 'ProductController@show');

        // academic
        Route::get('academic', 'AcademicController@index');
        Route::get('program/{id}/{field}', 'AcademicController@getProgramField');
        Route::get('degree/{id}/{field}', 'AcademicController@getFieldByDegree');

        // poster
        Route::get('posters', 'PosterController@index');

        // site content
        Route::get('site-content/{name}', 'SiteContentController@getPageByName');

        // site content for Jqery
        Route::get('site-content-jqery/{name}', 'SiteContentController@getPageByNameJqery');


        // gic project
        Route::get('gic-projects', 'GicProjectController@index')->name('project');
        Route::get('gic-projects/completed', 'GicProjectController@projectComplete')->name('project');
        Route::get('gic-projects/processing', 'GicProjectController@projectrocessing')->name('project');
        Route::get('gic-projects/{id}', 'GicProjectController@show');

        //Jqery gic project
        Route::get('gic-projects-jqery/{id}', 'GicProjectController@showJqery');
    });
    Auth::routes(['register' => false]);
});
/** END OF FRONTEND ROUTE */


/**
 * BACKEND OR ADMIN ROUTE SECTION
 *
 *
 * write ROUTE that have controller in "Backend" folder here!!!
 * ++++++++++++++ */
Route::namespace('Backend')->prefix('admin')->name('admin.')->group(function () {
    Route::get('contactus-message/{id}/setMark','ContactUsMessageController@setMark')->name('set-mark');
});

/**
 * Admin without namespace `Backend`
 * ++++++++++++++ */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('photo-albums/{id}/photos', 'Backend\PhotoAlbumController@postPhoto')->name('admin.photo-albums.post-photo');
    Route::delete('photo-albums/{id}/photos', 'Backend\PhotoAlbumController@deletePhoto')->name('admin.photo-albums.delete-photo');

    // redirect about-gic
    try {
        $aboutGic = \App\AboutGic::first();
        if ($aboutGic) {
            Route::redirect('about-gic', '/admin/about-gic/'. $aboutGic->id. '/edit');
        }
    } catch(Exception $e) {
        //
    }
    Route::get('aluminus/create/multiple', 'Backend\AlumnusController@createMultiple')->name('admin.aluminus.add-multiple');
    Route::post('aluminus/create/multiple', 'Backend\AlumnusController@storeMultiple')->name('admin.aluminus.add-multiple');
});

// ****************************************************************//
// IMPORTANT *** THIS ROUTE SHOULD BE IN 1 of the GROUP ROUTE ABOVE //
// ****************************************************************//
Route::post('admin/scholarship-alumini/{id}/edit','Backend\ScholarshipAlumniController@edit')->name('scholarship_alumini');
Route::get('/MissionVision','MissionVision@index');

Route::get('admin/scholarship-alumini/{id}/edit','Backend\ScholarshipAlumniController@edit');

Route::post('deploy', 'DeployController@deploy');
