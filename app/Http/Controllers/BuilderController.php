<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;


class BuilderController extends Controller
{
    //
    public function show() {
        return view('layouts.builder');
    }

    public function store(Request $request) {
        $post = new Application();
        $post->id = null;
        $post->applicationType = $request->type;
        $post->applicationDescription = $request->applicationDescription;
        $post->pageCount = $request->amountPages;
        $post->pageName = $request->pageNames;

        if($request->admin_ico === null) {
            $post->adminBoolean = 0;
        } else {
            $post->adminBoolean = $request->admin_ico;
        }

        if($request->calendar_ico === null) {
            $post->calendarBoolean = 0;
        } else {
            $post->calendarBoolean = $request->calendar_ico;
        }

        if($request->cart_ico === null) {
            $post->cartBoolean = 0;
        } else {
            $post->cartBoolean = $request->cart_ico;
        }

        if($request->chatbox_ico === null) {
            $post->chatboxBoolean = 0;
        } else {
            $post->chatboxBoolean = $request->chatbox_ico;
        }

        if($request->database_ico === null) {
            $post->databaseBoolean = 0;
        } else {
            $post->databaseBoolean = $request->database_ico;
        }

        if($request->geolocation_ico === null) {
            $post->geolocationBoolean = 0;
        } else {
            $post->geolocationBoolean = $request->geolocation_ico;
        }

        if($request->language_support_ico === null) {
            $post->multilanguageBoolean = 0;
        } else {
            $post->multilanguageBoolean = $request->language_support_ico;
        }

        if($request->login_system_ico === null) {
            $post->loginBoolean = 0;
        } else {
            $post->loginBoolean = $request->login_system_ico;
        }

        if($request->multimedia_intergration_ico === null) {
            $post->mediaBoolean = 0;
        } else {
            $post->mediaBoolean = $request->multimedia_intergration_ico;
        }

        if($request->notification_ico === null) {
            $post->notificationBoolean = 0;
        } else {
            $post->notificationBoolean = $request->notification_ico;
        }

        if($request->payment_service_ico === null) {
            $post->paymentBoolean = 0;
        } else {
            $post->paymentBoolean = $request->payment_service_ico;
        }

        if($request->statistics_ico === null) {
            $post->statsBoolean = 0;
        } else {
            $post->statsBoolean = $request->statistics_ico;
        }

        if($request->techsupport_ico === null) {
            $post->supportBoolean = 0;
        } else {
            $post->supportBoolean = $request->techsupport_ico;
        }

        if($request->upload_capabilities_ico === null) {
            $post->fileBoolean = 0;
        } else {
            $post->fileBoolean = $request->upload_capabilities_ico;
        }

        if($request->ux_ico === null) {
            $post->userBoolean = 0;
        } else {
            $post->userBoolean = $request->ux_ico;
        }
        $post->name = $request->name;
        $post->email = $request->email;
        $post->message = $request->message;
        $post->finished = 0;
        $post->save();
    }
}
