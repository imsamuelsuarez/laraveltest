<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;



Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->get()
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/job/{id}', function ($id)  {

            $job = Job::find($id);

            return view('jobs.show', ['job' => $job]);
    
});

Route::post('/jobs/create', function () {
    dd(request()->all());
});


Route::get('/', function () {
    return view('contact');
});
