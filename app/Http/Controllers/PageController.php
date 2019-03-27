<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.page.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $page = Page::find(1);
        return view('admin.page.create',compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Yetki Kontrol
        /*if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }*/

        //Yetki Kontrol
        $this->validate(request(),array(
            'title'=>'required',
            'content'=>'required',


        ));

        $page  = new Page();
        $page->title = request('title');
        $page->content = request('content');

       /* $page->slug = str_slug (request('title'));*/
        $page->save();

        if (request()->hasFile('photo')) {

           /* $validator = Validator::make($request->all(), [
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }*/

            $photo = request()->file('photo');
            $filename = 'photo' . '-' . time() . '.' . $photo->extension();

            if ($photo->isValid()) {

                $target = 'uploads/folders/page';
                $filepath = $target . '/' . $filename;
                $photo->move($target, $filename);
                $page->photo = $filepath;


            }
        }
        $page->save();
        return back()->with('success','Sayfa Eklendi');


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
        $page = Page::find($id);
        return view('admin.page.edit',compact('page'));
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
        $this->validate(request(),array(
            'title'=>'required',
            'content'=>'required',

        ));
        $page = Page::find($id);
        $page->title = request('title');
        $page->content = request('content');

      /*  $page->slug = str_slug (request('title'));*/
        if (request()->hasFile('photo')) {

           /* $validator = Validator::make($request->all(), [
                'sayfa_one_cikan_foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }*/

            $photo = request()->file('photo');
            $filename = 'photo' . '-' . time() . '.' . $photo->extension();

            if ($photo->isValid()) {

                $target = 'uploads/folders/page';
                $filepath = $target . '/' . $filename;
                $photo->move($target, $filename);
                $page->photo = $filepath;



            }
        }
        $page->save();
        return back()->with('success','Sayfa Güncellendi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::destroy($id);
        return back()->with('success','Sayfa Silinidi');
    }
}
