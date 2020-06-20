<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Component;
use App\Contactus;
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

    public function finish($id)
    {
        $app = Application::find($id);
        $app->finished = 1;
        $app->save();
        return redirect('application');
    }


    public function ship(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);

        // Ship order...

        Mail::to($request->user())->send(new OrderShipped($order));
    }


}
