<?php

namespace App\Http\Controllers\Main;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class MainpageController extends Controller
{


    public function index()
    {
        return view('main.index');
    }

    public function projects(){
        return view('main.projects');
    }

    public function project(){
        return view('main.project');
    }

    public function page()
    {
        return view('main.page');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function contactform(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if (!$validator->passes()) {
           return back()->with('error',__('general.formnotsend'));
        }

        $setting = Setting::find(1);
        $sitename = $setting->translate('tr')->sitename;
        $siteemail = $setting->email;

        $sended = array (

            'name'=>request('name'),
            'email'=>request('email'),
            'subject'=>request('subject'),
            'message'=>request('message'),
            'sitename'=>$sitename,
            'siteemail'=>$siteemail,
        );

         $mail = Mail::to($siteemail)->send(new \App\Mail\ContactForm($sended));

         if($mail){

             alert()
                 ->success(__('contact.send') ,__('contact.formsend'))
                 ->autoClose(1000);
             return back();
         }else{
             alert()
                 ->error(__('contact.error') ,__('contact.formnotsend'))
                 ->autoClose(1000);
             return back();
         }


    }

    public function services()
    {
        return view('main.services');
    }

    public function service()
    {
        return view('main.service');
    }

    public function blog()
    {
        return view('main.blog');
    }

    public function post()
    {
        return view('main.post');
    }

    public function gallery()
    {
        return view('main.gallery');
    }


}
