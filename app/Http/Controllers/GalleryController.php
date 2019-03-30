<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galleries = $request->file([]);

        foreach ($galleries as $gallery) {

            $gallery = new Gallery();
            $extension = $gallery->getClientOriginalExtension();
            $product = Str::random(10);
            $file = $product. '.'.$extension;
            $target = 'uploads/galeri';
            $filepath = $target.'/'.$file;
            $gallery->move($target,$file);

            $gallery->image = $filepath;




            foreach(config('translatable.locales') as $langs)

            {
                $gallery->{'title:'.$langs } = 'Galeri' ;


            }

            $gallery->save();

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
       /* $gallery  = Gallery::find($id);


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
                $gallery->image = $filepath;

            }
        }
        foreach(config('translatable.locales') as $langs)

        {
            $gallery->{'title:'.$langs } = $request->get('title')[$langs];


        }

        $gallery->save();
        return back()->with('success','Sayfa Güncellendi');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gallery::destroy($id);
        return back()->with('success','Sayfa Silinidi');
    }
}
