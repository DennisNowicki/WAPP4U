<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;    

class ApplicationController extends Controller
{
    public function overview()
    {
        $applications = Application::orderBy('id','DESC')->get();
        $finished = Application::where('finished','1')->get();
        return view('application.overview')
        ->with('applications', $applications)
        ->with('finished', $finished);
    }
}
