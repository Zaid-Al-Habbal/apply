<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('jobs.index', [
            'jobs' => Job::all(),
            'tags' => Tag::all()
        ]);
    }

}
