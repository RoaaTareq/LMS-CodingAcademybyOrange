// Route::get('rel/{id}',function($id){
//     $course=\App\Trainer::where('id',$id)->with('Course')->first();
//     dd($course->toArray());

// });


// Route::get("/post",function(){
//     return view('Dashboard.Backend.Post');
// });

// Route::get("/Event",function(){
//     return view('Dashboard.Backend.Event');
// });
// Route::get("/task",function(){
//     return view('Dashboard.Backend.task');
// });
// Route::get("/tasks",function(){
//     return view('Publicsite.Front-end.task');
// });
// Route::get("/comment",function(){
//     return view('Dashboard.Backend.Comment');
// });
// Route::get("/comments",function(){
//     return view('Publicsite.Front-end.Comment');
// });

// Route::get('rel',function(){
//     $course=\App\Course::with('Trainer')->get();
//     dd($course->toArray());

// });

// Route::get('tutor',function(){
//     $course=\App\Library::with('Tutor')->get();
//     dd($course->toArray());

// });
//  Route::get('tutors',function(){
//         $course=\App\Trainer::with('Tutor')->get();
//         dd($course->toArray());
    
//     });
    

// Route::get('rel',function(){
//     $course=\App\Trainer::with('Course')->get();
//     dd($course->toArray());


// });


// Route::get('rel',function(){
//     $course=\App\Trainer::with('Videos')->get();
//     dd($course->toArray());

// });

// Route::get('rel',function(){
//     $course=\App\Video::with('Coach')->get();
//     dd($course->toArray());

// });



// Route::get('form', function () {
//     return view('form');
// });

// Route::get('lib', function () {
//     return view('lib');
// });


// Route::get("admin/login",function(){
//     return view('Dashboard.Backend.login-admin');
// });
// Route::get("chat",function(){
//     return view('Publicsite.Front-end.Chat');
// });

// $phone = User::find(1)->phone;
// dd($phone);

// Route::get('rel',function(){
//     $course=\App\Student::with('Profile')->get();
//     dd($course->toArray());

// });

// Route::get('rel',function(){
//     $course=\App\Profile::with('student')->get();
//     dd($course->toArray());

// })


// Route::middleware(['Admin', 'Student'])->group(function () {

// Route::post("/Trainer/create","TrainerController@store");
// Route::get("/Trainer","TrainerController@show");
//  Route::get("/home","TrainerController@showall")->name('student.home');
// // Route::get("/test","TrainerController@showall");
// Route::get("traineredit/{id}","TrainerController@edit");
// Route::post("updateTrainer/{id}","TrainerController@update");
// Route::delete("Trainerdelete/{id}","TrainerController@delete");
    
// });



// Route::get('std', function () {
//     return view('std');
// });


// Route::get('video', function () {
//     return view('video');
// });

// Route::get('index', function () {
//     return view('index');
// });


// Route::get('gallery', function () {
//     return view('gallery');
// });

// Route::get('editor', function () {
//     return view('editor');
// });



// Route::get('card', function () {
//     return view('allpages.publicpages.card');
// });
// Route::get('video1', function () {
//     return view('videoedit');
// });




////
// Route::get('/search', function () {
//     return view('search');
// });


// Route::get('/home', function () {
//     return view('Front-end.home');
// });


Route::get('/public', function () {
    return view('layoutpublic.public');
});
Route::get('/Cards', function () {
    return view(' Publicsite.Front-end.Card');
});

Route::get('/login', function () {
    return view(' Publicsite.Front-end.Login');
});
Route::get('/loginstudent', function () {
    return view(' Publicsite.Front-end.Loginstudent');
});


// Route::get('/Resource', function () {
//     return view('Front-end.Course');
// });


// Route::get("/chat",function(){
//     return view('Publicsite.Front-end.Chat');
// });
Route::get("/updatprofile",function(){
    return view('Publicsite.Front-end.Updateprofile');
});

// ?>