<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Profile_picController;
use App\Http\Controllers\ticketController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\srequirementController;
use App\Http\Controllers\PersanalInfocontroller;
use App\Http\Controllers\QualificationController;

use App\Http\Controllers\JsgridController;
use App\Http\Controllers\SearchBlog;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Profile_Controller;
use App\Http\Controllers\Student_controller;
use App\Http\Controllers\emp_post_job;
use App\Http\Controllers\header_controller;
use App\Http\Controllers\Searchcontroller;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Connectcontroller;
use App\Http\Controllers\GetdeatilsController;
use App\Http\Controllers\findjobController;
use App\Http\Controllers\GlobleassController;
use App\Http\Controllers\Globleass_Getdat_Controller;
use App\Http\Controllers\CandiateController;
use App\Http\Controllers\SubmitUserController;
use App\Http\Controllers\Ratingsubmit;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Blogs_Controller;
use App\Http\Controllers\findstdController;
use App\Http\Controllers\news_Controller;
use App\Http\Controllers\linkedController;
use App\Http\Controllers\saveController;
use App\Http\Controllers\sovequestion;
use App\Http\Controllers\facebookController;
use App\Http\Controllers\storeEmailController;
use App\Http\Controllers\CheckedController;
use App\Http\Controllers\BotManChatController;
use App\Http\Controllers\sitemapcontroller;
use App\Http\Controllers\CalendarController;






/*
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
//main middleware

// post job route
Route::post('/newpostjob',[emp_post_job::class,'addrequirment'])->name('New-post-job');
Route::match(['get', 'post'], '/botman-chat', 'BotManChatController@invoke');

 Route::post('/storeEmail',[storeEmailController::class,'email'])->name('store-Email');

 Route::get('/facebooklogin',[facebookController::class,'facebookLogin']);
Route::post('/submit/user-details',[SubmitUserController::class, 'store_user_details'])->name('feel-free');




Route::group(['middleware'=>['dashboardprotect']],function(){
    Route::get('/dashboard', function () {
        return view('pages/dashboard');
    });
    Route::get('/scontact',[ticketController::class,'ticketview']);
    Route::get('/schats',function(){
    
    
    return view('student/schats');
    
    });
    
  Route::get('/srefer', function () {
    return view('student/refferal');
});
    

Route::get('/rate',[Ratingsubmit::class, 'viewRating']);

// rating submit
Route::post('/ratingsubmit',[Ratingsubmit::class, 'saveRating'])->name('rating-submit');
Route::get('/rating/{id}',function(){
    return view('pages/give_rating');
});
//edit Rating
Route::get('/editrating/{id}',function(){
    return view('pages/edit_rating');
});
Route::any('/rating-update',[Ratingsubmit::class, 'editRating']);

//membership
Route::get('/upgrade', function () {
    return view('tutor/upgrade');
});
//
Route::any('/addPayment',[PaymentController::class, 'createPayment']);



Route::get('/Eadv', [emp_post_job::class,'Eadv']);

Route::get('advertisment',function(){
    return view('tutor/adv');
});









Route::get('/profile',[Profile_Controller::class,'profile']);

Route::get('/get-jobshikher-details/{id}', [GetdeatilsController::class, 'getjobshikherData']);

//linked user

Route::post('/linkedstd',[linkedController::class,'linkedstd']);
Route::post('/linkedtutor',[linkedController::class,'linkedtutor']);




//emp-apply-job

//recent checked
Route::post('/recent-checked',[CheckedController::class,'recent'])->name('recent-checked');

Route::get('/account',[AccountController::class,'account']);
Route::delete('/delete-accountbyid/{id}',[AccountController::class,'deletebyid']);
});


//end main middleware
//Tutor middleware
Route::group(['middleware'=>['tutor']],function(){
    



Route::get('/analytics', function () {
    return view('tutor/analytics');
});
Route::get('/refferal', function () {
    return view('tutor/refferal');
});
Route::get('/media', function () {
    return view('tutor/media');
});
Route::get('/chat', function () {
    return view('tutor/chat');
});
Route::get('/chatus', function () {
    return view('tutor/chatus');
});
Route::get('/cont', function () {
    return view('tutor/contact');
});
Route::get('/slist',[findstdController::class,'findstudet']);
Route::get('/hslist',[findstdController::class,'saveStudent']);

Route::get('/testm', function () {
    return view('tutor/testm');
});
Route::get('/studentlist', function () {
    return view('pages/studentlist');
    
});
Route::get('/tasks', function () {
    return view('tutor/tasks');
});
//Apply-tutor-for tuetion
Route::post('/applytuition',[findjobController::class,'applyTuition'] )->name('apply-tuition'); 

 
    Route::get('/save-tuition/{id}',[saveController::class,'savetuition']);
    
    //calender
   
Route::post('/calendar/create', [CalendarController::class, 'create']);
Route::put('/calendar/update/{id}', [CalendarController::class, 'update']);
Route::delete('/calendar/delete/{id}', [CalendarController::class, 'delete']);
});
// end tutor middleware

//jobsheekhar middleware

Route::group(['middleware'=>['jobshikhar']],function(){
    
    Route::get('/save-job/{id}',[saveController::class,'savejob']);
    
    Route::get('/ajjobs',[findjobController::class,'filter_jobshikher'] );
Route::get('/apjobs',[findjobController::class,'filter_applyjob'] ); 
Route::get('/comjobs', [saveController::class,'comjob']);
Route::get('/sjjobs',[saveController::class,'savejobfind']); 
Route::get('/jchats', function () {
    return view('jobseeker/chat');
});
Route::get('/ljobs', function () {
    return view('jobseeker/ljobs');
});
Route::get('/crv', function () {
    return view('jobseeker/crv');
});
Route::get('/train', function () {
    return view('jobseeker/train');
});
Route::get('/jchatus', function () {
    return view('jobseeker/chatus');
});
Route::get('/jrefer', function () {
    return view('jobseeker/jrefer');
});
Route::get('/jupgrade', function () {
    return view('jobseeker/upgrade');
});
Route::get('/jprofile', function () {
    return view('jobseeker/user_profile');
});
Route::get('/jcontact', function () {
    return view('jobseeker/contact');
});
//job shikher
Route::post('/apply-now',[GetdeatilsController::class, 'applyjob'])->name('apply-job');
});
//end jobshikher middle ware
//student middleware
Route::group(['middleware'=>['student']],function(){
    
    Route::get('/save-tutor/{id}',[saveController::class,'savetutor']);
    
    
    route::get('/question_solved',function(){
 return view('student/getQuestionSolved');  
});



Route::post('/questions',  [sovequestion::class,'sendQuestion'])->name('question');

    Route::get('/insight', function () {
    return view('student/analytics');
});
Route::get('/post/tution/req',  [emp_post_job::class,'tution_post']);



Route::get('/sprofile', function () {
    return view('student/user_profile');
});
Route::get('/atutors', [Connectcontroller::class, 'filter_tutordash']);

Route::get('/ftutors', [findstdController::class,'ftutor']);
Route::get('/rtutors',[findstdController::class,'recentCtutor']);
Route::get('/stutors', [findstdController::class,'stutor']);
Route::get('/sspostnew', function () {
    return view('student/spostnew');
});
Route::post('/sspostnew',[Student_controller::class,'newpost']);
Route::get('/fpostnew', function () {
    return view('student/fpostnew');
});

Route::get('/badges', function () {
    return view('student/badges');
});


//student route begins
Route::get('/apostnew',[findjobController::class,'filter_requirement']);
});

//employee middleware
Route::group(['middleware'=>['employeer']],function(){
   //Employee
Route::get('epostnew', [emp_post_job::class,'view_post']);
Route::get('editpostnew/{id}',function(){
   return view('employer.editjob');
});
   


Route::post('/EditNewpost/{id}',[emp_post_job::class,'Editrequirment'])->name('Edit-New-post-job');


//



Route::get('/ajobs',[findjobController::class,'filter_postjob'] );
Route::get('/candidates',[findjobController::class,'filter_condidate'] );

Route::get('/rjobs',[findjobController::class,'filter_postclose']);
Route::get('/deletejob/{id}',[findjobController::class,'deletejob']);

Route::get('/sjobs',[CandiateController::class,'hirecon']);
Route::get('/approve/{id}',[CandiateController::class,'approve']);
Route::get('/reject/{id}',[CandiateController::class,'reject']);


Route::get('/fjobs', function () {
    return view('employer/fjobs');
});

Route::get('/itv', function () {
    return view('employer/itv');
});
Route::get('/resume', function () {
    return view('employer/resume');
});
Route::get('/econtact', function () {
    return view('employer/contact');
});
Route::get('/echat', function () {
    return view('employer/chat');
});
Route::get('/eprofile', function () {
    return view('employer/user_profile');
});

});

//end midddleware

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', function () {
    return view('pages/home');
});

Route::post('/login','LoginController@login' )->name('login.perform');
Route::get('/register', 'RegisterController@show')->name('register.show');
Route::get('/logout', 'LogoutController@perform')->name('logout.now');
Route::get('/windows-is-close','LogoutController@windowsclose');
//category
Route::get('/category', function (){
    return view('pages/categories');

});
Route::post('/category', 'CategoryController@add')->name('category.perform');

Route::any('/update', 'RegisterController@updateuser')->name('update.perform');




    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
     


        

    });
    
    
    Route::get('/login', function(){
        return view('pages/signin');
    }
    )->name('login.show');
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        

        /**
         * Verification Routes
         */
        Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
        Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');
    });

    // Route::group(['middleware' => ['auth','verified']], function() {
    //     /**
    //      * Dashboard Routes
    //      */
    //     Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    // });
});


Route::prefix('google')->name('google.')->group(function(){
    Route::get('auth/google',[GoogleController::class,'loginwithgoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');

});
//facebook 
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [GoogleController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [GoogleController::class, 'callbackFromFacebook'])->name('callback');
});

//insta
Route::prefix('instagram')->name('instagram.')->group(function(){
    Route::get('auth/instagram',[GoogleController::class,'loginwithinsta'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFrominsta'])->name('callback');

});


// Route::get('/dashboard', function () {
//     return view('pages/dashboard');
// });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  
Route::controller(App\Http\Controllers\AuthOtpController::class)->group(function(){
    Route::get('otp/login', 'login')->name('otp.login');
    Route::post('otp/generate', 'generate')->name('otp.generate');
    Route::get('otp/verification/{user_id}', 'verification')->name('otp.verification');
    Route::post('otp/login', 'loginWithOtp')->name('otp.getlogin');
});

Route::get('my-notification/{type}', 'App\Http\Controllers\HomeController@myNotification');




     

//ends
Route::post('update-image',[Profile_picController::class,'update_image'])->name('update-image');
Route::post('details',[Profile_picController::class,'details_update'])->name('details-update');
//jobshikher
Route::post('jobshikhar-details',[Profile_picController::class,'jobshikher_update'])->name('jobshikher-update');
//

Route::post('fetch_job_details',[JsgridController::class,'fjobsdet'])->name('fetch_job_details');
Route::post('fetch_data',[JsgridController::class,'ajobs'])->name('fetch_data');
Route::post('fetch_data_tutor',[JsgridController::class,'atutor'])->name('fetch_data_tutor');
Route::post('fetch_data_closed',[JsgridController::class,'rjobs'])->name('fetch_data_closed');
//employee profile
Route::post('store_appli_job', [JsgridController::class,'store_appli'])->name('store_appli_job');
Route::post('msg_send',[ChatController::class,'send'])->name('msg_send');
Route::post('msg_hist',[ChatController::class,'history'])->name('msg_hist');
Route::post('msg_rec',[ChatController::class,'rec'])->name('msg_rec');
Route::post('store_form', [Profile_picController::class,'store_form'])->name('store_form');
Route::post('ticket',[ticketController::class,'ticket'])->name('ticket-add');
Route::post('addrequirment',[srequirementController::class,'addrequirment'])->name('add_requirment');
Route::post('add_application',[QualificationController::class,'add_application'])->name('add_application');
Route::post('job_post',[srequirementController::class,'job_post'])->name('job_post');
Route::delete('deleterequirement/{id}',[srequirementController::class,'deleterequirement'])->name('deleterequirement');
//ends


Route::get('/Jadv', [emp_post_job::class,'Jadv']);
Route::get('/adv', [emp_post_job::class,'Tadv']);

// end tutor
//media route
Route::post('/media/{id}','App\Http\Controllers\Profile_picController@mediafile')->name('media.perform');

Route::post('tmedia',[TutorController::class,'upload_media'])->name('Tutor_media');
Route::post('addinfo',[PersanalInfocontroller::class,'addinfo'])->name('add_info');
//Route::get('update-image',[Profile_picController::class,'update_image'])->name('update-image');
Route::post('addQualification',[QualificationController::class,'addQualification'])->name('add_Qualification');



// home page route
//find tution
Route::get('/tutors', [findjobController::class,'filter_tuision']);
Route::get('/tutors-details/{id}', [findjobController::class, 'tutorsgetData']);

Route::get('/blog',[SearchBlog::class,'searchh']);

Route::get('/about', function () {
    return view('pages/about');
    
});



  
//find job
Route::any('/find-job', [findjobController::class,'filter_result']);
Route::get('/find-job-details/{id}', [findjobController::class, 'findjobgetData']);    

Route::get('/find-work', [findjobController::class,'filter_work']);
Route::get('/find-work-details/{id}', [findjobController::class, 'findworkgetData']); 

Route::get('/study-material',[header_controller::class,'study_material']);
// 
    
Route::get('/about', function () {
    return view('pages/about');
    
});


//job seeker





Route::post('store_rating',[ticketController::class,'rating'])->name('store_rating');

//forget
Route::get('/fpass', function () {
    return view('pages/forgotpass');
});

Route::get('/resetpass', function () {
    return view('pages/passwordreset');
});
// working progress
Route::get('/working-progress', [emp_post_job::class,'fview_post']);



Route::post('/fpass',[LoginController::class,'forget'])->name('forget.perform');

Route::post('/fverify',[LoginController::class,'verifytoken'])->name('verify.Token');

Route::post('/resetpass',[LoginController::class,'resetpassword'])->name('resetpass.perform');

Route::get('/fverify',function () {

 return view('pages/Otpverify');

});

//new Route
Route::get('/language', function () {
    return view('pages/language');
});

Route::get('/help', function () {
    return view('pages/help');
});

Route::get('/contactus', function () {
    return view('pages/contactus');
});

Route::get('/stories', function () {
    return view('pages/stories');
});

Route::get('/news', [news_Controller::class,'allnews']);
Route::post('/news-post', [news_Controller::class,'newspost']);

//basic detail linlk of website
Route::get('/refondpolicy', function () {
    return view('pages/refond');
});








Route::get('/projects', function () {
    return view('pages/projects');
});

Route::get('/localjob', function () {
    return view('pages/localjob');
});

Route::get('/postjob', function () {
    return view('pages/postjob');
});

Route::get('/hire', function () {
    return view('pages/hire');
});

Route::get('/questsolve', function () {
    return view('pages/questsolve');
});

Route::get('/language', function () {
    return view('pages/language');
});

Route::get('/help', function () {
    return view('pages/help');
});

Route::get('/contactus', function () {
    return view('pages/contactus');
});



Route::get('/study-material', function () {
    return view('pages/study-material');

});


//view help chats
// job R
Route::get('/pramote/yourself', function () {
    return view('job/pramote');
});

Route::get('/connect/with', function () {
    return view('job/connectwith');
});

Route::get('/candidate', function () {
    return view('job/candidate');
});

Route::get('/resume', function () {
    return view('job/resume');
});

// tution R


Route::get('/promote/yourself', function () {
    return view('tution/promote_yourself');
});



Route::get('/freelancing/promote/fee', function () {
    return view('freelancing/pramote_fee');
});

Route::get('/study-material', [Searchcontroller::class, 'show']);


//account

//Route
Route::get('/connect/tution',[Connectcontroller::class, 'filter_result']);
Route::get('/get-details/{id}', [GetdeatilsController::class, 'getData']);



//jobsheekher

Route::get('/get-free-details/{id}', [GetdeatilsController::class, 'getfreeData']);
//tuition
Route::get('/get-tuition-details/{id}', [GetdeatilsController::class, 'gettuitionData']);
Route::get('/get-tutor-details/{id}', [GetdeatilsController::class, 'gettutorData']);


//emp
Route::get('/connect/emp',[Connectcontroller::class, 'filter_emp']);
//freelancer
Route::get('/connect/freelancer',[Connectcontroller::class, 'filter_tutor']);
// candidate
Route::get('/candidate',[CandiateController::class, 'Diasplay']); 

// globle_ass
Route::get('/globel/assignment', [GlobleassController::class, 'filter_result']);
Route::get('/globel-assignment/{id}', [Globleass_Getdat_Controller::class, 'getData']); 

//aboutus
Route::get('/aboutus', function () {
    return view('pages/test');
});

// user submit details homepage



//blogs
Route::post('update-blog',[SearchBlog::class,'update_blog'])->name('update-blog');

Route::get('/blog/single/{id}',[SearchBlog::class,'singlepost']);

Route::any("/bloglike/{id}", [SearchBlog::class, 'like']);

Route::post('update_comment',[SearchBlog::class,'update_comment'])->name('update_comment');
Route::post('update_rating',[SearchBlog::class,'update_rating'])->name('update_rating');
Route::get('/career',[SearchBlog::class,'career']);
Route::get('deleteblog/{id}',[SearchBlog::class,'delete_blog']);
Route::get('/edit-blogs-form/{id}',[SearchBlog::class,'edit_form']);
Route::post('/edit-blogs',[SearchBlog::class,'edit_blog']);

//emp job detail
Route::get('/get-job-details/{id}', [GetdeatilsController::class, 'getjobData']);

//site map
Route::get('/cancellation', function () {
    return view('pages/cancellation');
});

Route::get('/refund', function () {
    return view('pages/refond');
});

Route::get('/terms', function () {
    return view('pages/terms');
});

Route::get('/privacy', function () {
    return view('pages/privacy');
});

Route::get('/copyright', function () {
    return view('pages/copyright');
});

Route::get('/codeconduct', function () {
    return view('pages/codeconduct');
});

Route::get('/security', function () {
    return view('pages/security');
});




