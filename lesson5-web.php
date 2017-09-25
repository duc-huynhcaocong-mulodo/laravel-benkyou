<?php

use App\Task;

Route::get('/tasks', function () {
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
	$tasks = Task::all();


	return view('tasks.index', compact('tasks'));



});

Route::get('tasks/{task}', function ($id) {
	//$task = DB::table('tasks')->find($id);
	$task = Task::find($id);

	//dd($task);
	return view('tasks.show', compact('task'));
});
