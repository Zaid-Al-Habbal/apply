<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function index(){
        return view('employer.index', [
            'logo' => Auth::user()->employer->logo,
            'jobs' => Auth::user()->employer->jobs,
            'name' => Auth::user()->employer->name,
        ]);
    }

}
