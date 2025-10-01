<?php

use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {

    $jobs = Job::with('employer')->simplePaginate(3);

    return view('jobs',[
        'jobs' => $jobs
    ]);
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/job/{id}', function ($id){

    $job = Job::find($id);

    return view('job', [

        'job' => $job,
    ]);
});
