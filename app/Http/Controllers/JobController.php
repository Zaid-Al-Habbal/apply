<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'jobs' => Job::latest()->with(['employer', 'tags'])->get(),
            'tags' => Tag::all()
        ]);
    }

    public function create(){
        return view('jobs.create');
    }

    public function store(Request $request){

        $jobAttributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required'],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable']
        ]);

        $jobAttributes['featured'] = $request->has('featured');
        $job = Auth::user()->employer->jobs()->create(Arr::except($jobAttributes, 'tags'));
        if ($jobAttributes['tags'] ?? false) {
            foreach (explode(',', $jobAttributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');

    }
    public function destroy(Job $job){
        $job->delete();

        return redirect('/');
    }

}
