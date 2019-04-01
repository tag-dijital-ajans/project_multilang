<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Input;
>>>>>>> master
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


    public function store(Request $request)
    {
<<<<<<< HEAD
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


=======
        // getting all of the post data
        $files = Input::file('images');
        // Making counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;

        foreach ($files as $file) {
            $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            $validator = Validator::make(array('file'=> $file), $rules);
            if($validator->passes()){

                $galeri = new Gallery();
                $dosya_adi = 'galeri' . '-' . microtime(true)  . '.' . $file->extension();
                $hedef_klasor = 'uploads/gallery';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $file->move($hedef_klasor, $dosya_adi);
                $galeri->image = $dosya_yolu;
                $galeri->order = '1';

                $galeri->save();
>>>>>>> master
            }

            $gallery->save();

        }
<<<<<<< HEAD








=======
        if($galeri){
            return back()->with('success','Fotoğraflar Eklendi');
        } else {
            return back()->with('error','Fotoğraflar Eklenmedi');
        }



>>>>>>> master

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
<<<<<<< HEAD
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
=======

>>>>>>> master
    }


    public function destroy($id)
    {
        Gallery::destroy($id);
        return back()->with('success','Fotoğraf Silinidi');
    }
}
