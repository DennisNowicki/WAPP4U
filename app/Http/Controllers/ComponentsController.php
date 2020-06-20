<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Component;
use App\Application;
use App\Http\Resources\Component as ComponentResource;

class ComponentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = Component::paginate(50);

        return ComponentResource::collection($components);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $component = $request->isMethod('put') ? Component::findOrFail
        ($request->component_id) : new Component;

        $component->id = $request->input('component_id');
        $component->name = $request->input('name');
        $component->path = $request->input('path');
        $component->fee = $request->input('fee');
        $component->minHours = $request->input('minHours');
        $component->maxHours = $request->input('maxHours');

        if($component->save()) {
            return new ComponentResource($component);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $component = Component::findorFail($id);

        return new ComponentResource($component);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $component = Component::findorFail($id);

        if($component->delete()) {
            return new ComponentResource($component);
        }
    }

    public function comp(){

        $components = Component::all();
        $notFinished = Application::where('finished','0')->get();
        return view('component.component')
        ->with('notFinished', $notFinished)
        ->with('components', $components);

    }

    public function update(Request $request, $id){

        $component = Component::find($id);
        $component->fee = $request->input('fee');
        $component->minHours = $request->input('minHours');
        $component->maxHours = $request->input('maxHours');
        $component->save();
        return redirect('/components');
    }
}
