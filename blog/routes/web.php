<?php

//use App\Task;


//dd(resolve('App\Billing\Stripe'));

Route::get('/', 'PostsController@index')->name('home');

Route::get('/tasks', 'TasksController@index');
Route::get('tasks/{task}', 'TasksController@show');

Route::get('/post/create', 'PostsController@create');
Route::get('/post/{post}', 'PostsController@show');
Route::post('/post', 'PostsController@store');
Route::post('/post/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

//Route::get('/tasks', function () {
	//step 1:
    //return view('welcome')->with('name', 'World');

	//step 2
	//return view('welcome',[
	//'name' => 'Duc']);

	//step 3
	//$name = 'Duc';
	//return view('welcome', ['name' => $name]);
	//step 3.1
	//return view('welcome', compact('name'));

	//step 4
	//$tasks = [
	//'Goto the store',
	//'Finish my screencast',
	//'Clean the house'
	//];

	//step 5
	//$tasks = DB::table('tasks')->latest()->get();

	//task 6

	//$tasks = Task::all();
	//return view('tasks.index', compact('tasks'));


//});

//Route::get('tasks/{task}', function ($id) {
	//$task = DB::table('tasks')->find($id);
	//$task = Task::find($id);

	//dd($task);
	//return view('tasks.show', compact('task'));
//});
