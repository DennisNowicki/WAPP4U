<?php

namespace App\Http\Controllers;
use App\Application;
use App\Contactus;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $applications = Application::all();
        $notFinished = Application::where('finished','0')->get();
        $admin = Application::where('adminBoolean','1')->get();
        $calendar = Application::where('calendarBoolean','1')->get();
        $cart = Application::where('cartBoolean','1')->get();
        $chat = Application::where('chatboxBoolean','1')->get();
        $data = Application::where('databaseBoolean','1')->get();
        $geo = Application::where('geolocationBoolean','1')->get();
        $language = Application::where('multilanguageBoolean','1')->get();
        $login = Application::where('loginBoolean','1')->get();
        $media = Application::where('mediaBoolean','1')->get();
        $notification = Application::where('notificationBoolean','1')->get();
        $payment = Application::where('paymentBoolean','1')->get();
        $stats = Application::where('statsBoolean','1')->get();
        $support = Application::where('supportBoolean','1')->get();
        $file = Application::where('fileBoolean','1')->get();
        $user = Application::where('userBoolean','1')->get();
        $contact = Contactus::all();

        return view('dashboard')
        ->with('applications', $applications)
        ->with('admin', $admin)
        ->with('calendar', $calendar)
        ->with('cart', $cart)
        ->with('chat', $chat)
        ->with('data', $data)
        ->with('geo', $geo)
        ->with('language', $language)
        ->with('login', $login)
        ->with('media', $media)
        ->with('notification', $notification)
        ->with('payment', $payment)
        ->with('stats', $stats)
        ->with('support', $support)
        ->with('file', $file)
        ->with('user', $user)
        ->with('notFinished', $notFinished)
        ->with('contact', $contact)
        ;
    }
}
