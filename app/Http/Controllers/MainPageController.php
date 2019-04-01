<?php

namespace App\Http\Controllers;

use App\MainPage;
use App\MpageSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $mainpagesetting = MainPage::find(1);
        return view('admin.mainpage.mainpagesetting',compact('mainpagesetting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $mainpagesetting = MainPage::find(1);
=======
        $mainpagesetting = MpageSetting::find(1);
        return view('admin.mainpagesetting.index',compact('mainpagesetting'));
    }



    public function update(Request $request)
    {
        $mainpagesetting = MpageSetting::find(1);

        foreach(config('translatable.locales') as $langs)

        {
            $mainpagesetting->{'title:'.$langs } = $request->get('title')[$langs];
            $mainpagesetting->{'text:'.$langs} = $request->get('text')[$langs];


        }

        $mainpagesetting->save();
        if ($mainpagesetting) {
>>>>>>> master

            return back()->with('success', 'Anasayfa  Ayarları Güncellendi');

<<<<<<< HEAD
        {
            $mainpagesetting->{'textheader:'.$langs } = $request->get('textheader')[$langs];
            $mainpagesetting->{'text:'.$langs} = $request->get('text')[$langs];


        }




        $mainpagesetting->blog = request('metin');
        $mainpagesetting->project = request('yorumlar');
        $mainpagesetting->service = request('galeri');

        $mainpagesetting->save();
        if ($mainpagesetting) {

            return back()->with('success', 'Anasayfa  Güncellendi');

        } else {
            return back()->with('error', 'Anasayfa Güncellenemedi');


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
=======
        } else {
            return back()->with('error', 'Anasayfa Ayarları Güncellenemedi');


        }
    }


>>>>>>> master
}
