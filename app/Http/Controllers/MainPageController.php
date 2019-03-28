<?php

namespace App\Http\Controllers;

use App\MainPage;
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
        $mainpages = MainPage::all();
        return view('admin.mainpage.index',compact('mainpages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainpage = MainPage::find(1);
        return view('admin.mainpage.create',compact('mainpage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mainpage  = new MainPage();


        foreach(config('translatable.locales') as $langs)

        {
            $mainpage->{'textheader:'.$langs } = $request->get('textheader')[$langs];
            $mainpage->{'text:'.$langs} = $request->get('text')[$langs];

        }

        $mainpage->save();
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
        $mainpage = MainPage::find($id);
        return view('admin.mainpage.edit',compact('mainpage'));
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
        $mainpage  = MainPage::find($id);



        foreach(config('translatable.locales') as $langs)

        {
            $mainpage->{'textheader:'.$langs } = $request->get('textheader')[$langs];
            $mainpage->{'text:'.$langs} = $request->get('text')[$langs];


        }

        $mainpage->save();
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
        MainPage::destroy($id);
        return back()->with('success','Sayfa Silinidi');
    }
}
