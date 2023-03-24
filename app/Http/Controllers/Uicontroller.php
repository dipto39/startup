<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\claint;
use App\Models\contactaUs;
use App\Models\contactDetails;
use App\Models\Portfolio;
use App\Models\pricing;
use App\Models\Team;
use App\Models\carousel;
use App\Models\test;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Uicontroller extends Controller
{
   // show index page
   public function index()
   {
      $team = Team::get()->all();
      $blog = blog::get()->all();
      $contact = contactDetails::get()->all();
      $portfolio = Portfolio::get()->all();
      $claint = claint::get()->all();
      $pricing = pricing::orderBy('amount')->get()->all();
      $carousel = carousel::get()->all();
      $data = compact('team','blog','contact','portfolio','claint','pricing','carousel');
      return view('welcome')->with($data);
   }
  // show about page
  public function about()
  {
     $contact = contactDetails::get()->all();
     $data = compact('contact');
     return view('about')->with($data);
  }

    // show services page 
    public function services()
    {
       $contact = contactDetails::get()->all();
       $data = compact('contact');
       return view('services')->with($data);
    }
    // show contact-us page 
    public function contact()
    {
       $contact = contactDetails::get()->all();
       $data = compact('contact');
       return view('contact')->with($data);
    }

   // save appointment
   public function saveAppointment(Request $req)
   {
      $req->validate(
         [
            'name' => "required",
            'email' => "required|email",
            'service' => "required",
            'message' => "required",
         ],
         [
            'name.required' => 'Please enter your name'
         ]
      );
      $table = new contactaUs();

      $table['name'] = $req['name'];
      $table['email'] = $req['email'];
      $table['service'] = $req['service'];
      $table['message'] = $req['message'];

      $table->save();
      Alert::success('Success', 'Your appointment sent successfully');

      return redirect()->back();
   }
}
