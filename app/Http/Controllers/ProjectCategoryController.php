<?php

namespace App\Http\Controllers;

use App\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectcategorys = ProjectCategory::all();
        return view ('admin.projectcategory.index',compact('projectcategorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.projectcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projectcategory  = new ProjectCategory();



        foreach(config('translatable.locales') as $langs)

        {
            $projectcategory->{'title:'.$langs } = $request->get('title')[$langs];
            $projectcategory->{'slug:'.$langs} = Str::slug($request->get('title')[$langs]);

        }

        $projectcategory->save();
        return back()->with('success','Kategori Eklendi');

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
        $projectcategory = ProjectCategory::find($id);
        return view('admin.projectcategory.edit',compact('projectcategory'));
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
        $projectcategory  = ProjectCategory::find($id);



        foreach(config('translatable.locales') as $langs)

        {
            $projectcategory->{'title:'.$langs } = $request->get('title')[$langs];
            $projectcategory->{'slug:'.$langs} = Str::slug($request->get('title')[$langs]);

        }

        $projectcategory->save();
        return back()->with('success','Kategori Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectCategory::destroy($id);
        return back()->with('success','Kategori Silinidi');
    }
}
