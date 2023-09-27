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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function(){
Route::get('login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get("/", "AdminController@show")->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::prefix('student')->group(function(){
Route::get('login' , 'Auth\StudentLoginController@showLoginForm')->name('student.login');
Route::post('login' , 'Auth\StudentLoginController@login')->name('student.login.submit');
Route::get('/logout','Auth\StudentLoginController@logout')->name('student.logout');
});
Route::prefix('trainer')->group(function(){
Route::get('login' , 'Auth\TrainerLoginController@showLoginForm')->name('trainer.login');
Route::post('login' , 'Auth\TrainerLoginController@login')->name('trainer.login.submit');
Route::get('/logout','Auth\TrainerLoginController@logout')->name('student.logout');
});
//// startAdmin Route
Route::post("/admin/create","AdminController@store")->middleware('auth:admin');
// Route::get("/admin","AdminController@show");
Route::delete("/delete/{id}","AdminController@destroy")->middleware('auth:admin');
Route::get("/edit/{id}","AdminController@edit")->middleware('auth:admin');
Route::post("/update/{id}","AdminController@update")->middleware('auth:admin');
////EndAdmin Route

Route::group(['middleware' => 'isStudent'], function() {
   
    Route::post("/Course","CourseController@store");
    Route::get("/Course","CourseController@show")->name('trainer.dashboard');
  
    Route::delete("/deletecourse/{id}","CourseController@destroy");
    Route::get("/courseedit/{id}", "CourseController@edit");
    Route::post("/updatecourse/{id}","CourseController@update");
    Route::get('tasks','TaskController@showall');
    Route::post("/library","LibraryController@store");
    Route::get("/library","LibraryController@show");
    Route::get("/librayedit/{id}","LibraryController@edit");
    Route::post("/updatelibray/{id}","LibraryController@update");
    Route::delete("librarydelete/{id}","LibraryController@destroy");
   Route::get("/videoedit/{id}","VideoController@edit");
   Route::post("/updatevedio/{id}","VideoController@update");
   Route::delete("/deletevedio/{id}","VideoController@destroy");
  Route::post("/videos","VideoController@store");
  Route::get("/videos","VideoController@show");
  });


Route::get("/AllCourses","CourseController@showall")->middleware('auth:student');
// Route::delete("/deletecourse/{id}","CourseController@destroy");
// Route::get("/courseedit/{id}", "CourseController@edit");
// Route::post("/updatecourse/{id}","CourseController@update");
// Route::get("/Allvedio/{Course_id}","CourseController@showvideo");
Route::get("/ALLvideo/{id}","CourseController@Showall");
Route::get('/search','CourseController@search');
//End CourseRoute
//Start Event Route
// Route::post('/Event/create' ,'EventController@store')->middleware('auth:admin');
// Route::get('/Event','EventController@show')->middleware('auth:admin');
// Route::get("/editevent/{id}","EventController@edit")->middleware('auth:admin');
// Route::post("/update/{id}","EventController@update")->middleware('auth:admin');
// Route::get("/Event","EventController@showall");
// Route::delete('deleteevent/{id}','EventController@destroy')->middleware('auth:admin');
///End Event Rpute
// StartStudentRoute
Route::post("/student/create","StudentController@store")->middleware('auth:admin');
Route::get("/student","StudentController@show")->middleware('auth:admin');
Route::get("studentedit/{id}","StudentController@edit")->middleware('auth:admin');
Route::post("/updatestudent/{id}","StudentController@update")->middleware('auth:admin');
Route::delete("/studentsdelete/{id}","StudentController@destroy")->middleware('auth:admin');
///End Event Route

// StartTrainer Route
Route::post("/Trainer/create","TrainerController@store")->middleware('auth:admin');
Route::get("/Trainer","TrainerController@show")->middleware('auth:admin');
 Route::get("/home","TrainerController@showall")->name('student.home')->middleware('auth:student');
// Route::get("/test","TrainerController@showall");
Route::get("traineredit/{id}","TrainerController@edit")->middleware('auth:admin');
Route::post("updateTrainer/{id}","TrainerController@update")->middleware('auth:admin');
Route::delete("Trainerdelete/{id}","TrainerController@delete")->middleware('auth:admin');
//End Trainer Route
//Start task Route
// Route::get('tasks','TaskController@showall');//admin //trainer;
Route::get('task','TaskController@show');
Route::post('/task/create','TaskController@store');
//End task Route
//post Route
Route::post('/post','PostController@store')->middleware('auth:student');
Route::get('/chat','PostController@show')->middleware('auth:student');
Route::get('/posts','PostController@showall')->middleware('auth:admin');
Route::get('/post/show/{id}','PostController@singlepost')->name('post.show')->middleware('auth:student');
Route::delete("/deletepost/{id}","PostController@delete")->middleware('auth:student');
Route::get('/editpost/{id}',"PostController@edit")->middleware('auth:student');
Route::post('updatepost/{id}',"PostController@update")->middleware('auth:student');
//End postRoute
//comment Route
Route::post('/comment/create','CommentController@store')->middleware('auth:student')->name('comments.store');
Route::get('/comments','CommentController@show')->middleware('auth:student');
Route::get('/editcomment/{id}','CommentController@edit')->middleware('auth:student');
Route::post('/updatecomment/{id}','CommentController@update')->middleware('auth:student');
Route::delete('deletecomment/{id}','CommentController@destroy')->middleware('auth:student');
Route::get('/Allcomment/{id}',"CommentController@Showall");
Route::get('Showcomment','CommentController@Showcomment');
// Route::get('/Allcomment/{id}',"CommentController@Showall");
// Endcomment Route

// startLibrary Route
// Route::post("/library","LibraryController@store");
// Route::get("/library","LibraryController@show");
// Route::get("/librayedit/{id}","LibraryController@edit");
// Route::post("/updatelibray/{id}","LibraryController@update");
// Route::delete("librarydelete/{id}","LibraryController@destroy");
Route::get('/Resource',"LibraryController@showallbooks")->middleware('auth:student');
//  Route::get('/file/download/{id}','LibraryController@download')->name('downloadfile');
//End libraryRoute

// startVideo Route
// Route::post("/videos","VideoController@store");
// Route::get("/videos","VideoController@show");
//  Route::get("/ALLvideo/{id}","VideoController@Showall");
Route::get('/Allvideo/{id}',"VideoController@Showall")->middleware('auth:student');
Route::get('searchvideo','VideoController@search');
Route::get('searchbook','LibraryController@search');
// Route::get("/videoedit/{id}","VideoController@edit");
// Route::post("/updatevedio/{id}","VideoController@update");
// Route::delete("/deletevedio/{id}","VideoController@destroy");
//End video Route
Route::get("profilestudent/{id}",'StudentController@Profile')->name('student.profile')->middleware('auth:student');




;

Route::get('rel',function(){
    return view('Publicsite.Front-end.com');

});

