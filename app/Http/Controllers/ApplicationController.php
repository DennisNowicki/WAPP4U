<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Component;    
use PDF;

class ApplicationController extends Controller
{
    public function overview()
    {
        $applications = Application::orderBy('id','DESC')->get();
        $finished = Application::where('finished','1')->get();
        $notFinished = Application::where('finished','0')->get();
        return view('application.overview')
        ->with('applications', $applications)
        ->with('notFinished', $notFinished)
        ->with('finished', $finished);
    }

    public function pdf($id)
    {
        $application = Application::find($id);
        $component = Component::get();
        $pdf = PDF::loadView('application.pdf', [
            'application' => $application,
            'component' => $component, 
            ])->setPaper('a4', 'portrait');
        $filename = $application->name;
        return $pdf->stream($filename . '.pdf');
    }
}
