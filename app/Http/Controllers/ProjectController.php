<?php

namespace App\Http\Controllers;


use App\Project;
use App\ProjectCategory;
use App\ProjectGalery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $images = ProjectGalery::all();
        return view ('admin.project.index',compact('projects','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectcategory = ProjectCategory::find(1);
        return view('admin.project.create',compact('project','projectcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project  = new Project();

        if (request()->hasFile('image')) {

            $validator = Validator::make($request->all(), [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            if (!$validator->passes()) {

                return back()->with('error','Fotoğraf Yüklenmedi');
            }

            $image = request()->file('image');
            $filename = 'image' . '-' . time() . '.' . $image->extension();

            if ($image->isValid()) {

                $target = 'uploads/page';
                $filepath = $target . '/' . $filename;
                $image->move($target, $filename);
                $project->image = $filepath;

            }
        }
        $project->date = request('date');
        foreach(config('translatable.locales') as $langs)

        {
            $project->{'title:'.$langs } = $request->get('title')[$langs];
            $project->{'client:'.$langs } = $request->get('client')[$langs];
            $project->{'location:'.$langs } = $request->get('location')[$langs];
            $project->{'type:'.$langs } = $request->get('type')[$langs];
            $project->{'content:'.$langs} = $request->get('content')[$langs];
            $project->{'slug:'.$langs} = Str::slug($request->get('title')[$langs]);

        }
        $project->date = request('date');
        $project->save();
        return back()->with('success','Proje Eklendi');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project  = Project::find($id);


        if (request()->hasFile('image')) {

            $validator = Validator::make($request->all(), [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            if (!$validator->passes()) {

                return back()->with('error','Fotoğraf Yüklenmedi Max 1024bayt olmalı');
            }

            $image = request()->file('image');
            $filename = 'image' . '-' . time() . '.' . $image->extension();

            if ($image->isValid()) {

                $target = 'uploads/page';
                $filepath = $target . '/' . $filename;
                $image->move($target, $filename);
                $project->image = $filepath;

            }
        }
        foreach(config('translatable.locales') as $langs)

        {
            $project->{'title:'.$langs } = $request->get('title')[$langs];
            $project->{'client:'.$langs } = $request->get('client')[$langs];
            $project->{'location:'.$langs } = $request->get('location')[$langs];
            $project->{'type:'.$langs } = $request->get('type')[$langs];
            $project->{'content:'.$langs} = $request->get('content')[$langs];
            $project->{'slug:'.$langs} = Str::slug($request->get('title')[$langs]);

        }
        $project->date = request('date');
        $project->save();
        return back()->with('success','Proje Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
        return back()->with('success','Sayfa Silinidi');
    }
}
