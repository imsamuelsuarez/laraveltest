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

Route::get('/jobs/edit/{id}', function($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

Route::get('/job/{id}', function ($id)  {

            $job = Job::find($id);

            return view('jobs.show', ['job' => $job]);
    
});

Route::post('/jobs', function () {

    request()->validate([
        'title' => ['required', 'min:3', 'max:64'],
        'salary' => ['required', 'numeric'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

});

Route::patch('/jobs', function ($request) {

    request()->validate([
        'title' => ['required', 'min:3', 'max:64'],
        'salary' => ['required', 'numeric'],
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs' . $job->id);

});



Route::get('/', function () {
    return view('contact');
});
