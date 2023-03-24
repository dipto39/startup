<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\category;
use App\Models\claint;
use App\Models\contactaUs;
use App\Models\contactDetails;
use App\Models\Portfolio;
use App\Models\pricing;
use App\Models\carousel;
use App\Models\Team;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
   // show home page
   public function index()
   {
      return view('admin.index');
   }
   //    show setting page 
   public function getSetting()
   {
      return view('admin.setting');
   }

   // get appinntment
   public function getappointment()
   {
      $contact = contactaUs::get()->all();
      $data = compact('contact');
      return view('admin.query')->with($data);
   }

   // delete appintment
   public function deleteAppointment($id)
   {
      $contact = contactaUs::find($id)->delete();
      return redirect()->back();
   }
   // get team
   public function getteam()
   {
      $team = Team::get()->all();
      $data = compact('team');
      return view('admin.team')->with($data);
   }
   // add team
   public function addteam()
   {
      $title = "Add new Team member";
      $url = "admin/teamstore";
      $btn = "Add";
      $data = compact('title', 'url', 'btn');
      return view('admin.addteam')->with($data);
   }
   // store team 

   public function storeteam(Request $req)
   {
      $req->validate([
         'name' => 'required',
         'desi' => 'required'
      ]);
      $team = new Team();

      $team['name'] = $req['name'];
      $team['desi'] = $req['desi'];



      if (!file_exists(public_path('assets/images/team'))) {
         mkdir(public_path('assets/images/team'), 0777, true);
      }


      if (!empty($req->img)) {

         $image = $req->img;
         $name = $image->getClientOriginalName();
         $imagename = time() . "_" . $name;
         $destination = public_path('assets/images/team');
         $image->move($destination, $imagename);
         $team['img'] = 'assets/images/team/' . $imagename;
      }


      if (!empty($req->fb)) {
         $team['fb'] = $req['fb'];
      }
      if (!empty($req->tw)) {
         $team['tw'] = $req['tw'];
      }
      if (!empty($req->li)) {
         $team['li'] = $req['li'];
      }
      if (!empty($req->in)) {
         $team['in'] = $req['in'];
      }

      $team->save();
      return redirect()->route('team');
   }
   // get update 
   public function getupdate($id)
   {
      $title = "Update  Team member";
      $url = "admin/updatetaam/" . $id;
      $btn = "Update";
      $teamdata = Team::find($id);
      $data = compact('title', 'url', 'btn', 'teamdata');
      return view('admin.addteam')->with($data);
   }
   // update team 
   public function updateteam(Request $req, $id)
   {
      $req->validate([
         'name' => 'required',
         'desi' => 'required'
      ]);
      $team = Team::find($id);

      $team['name'] = $req['name'];
      $team['desi'] = $req['desi'];



      if (!file_exists(public_path('assets/images/team'))) {
         mkdir(public_path('assets/images/team'), 0777, true);
      }


      if (!empty($req->img)) {

         $image = $req->img;
         $name = $image->getClientOriginalName();
         $imagename = time() . "_" . $name;
         $destination = public_path('assets/images/team');
         $image->move($destination, $imagename);
         $team['img'] = 'assets/images/team/' . $imagename;
      }


      if (!empty($req->fb)) {
         $team['fb'] = $req['fb'];
      }
      if (!empty($req->tw)) {
         $team['tw'] = $req['tw'];
      }
      if (!empty($req->li)) {
         $team['li'] = $req['li'];
      }
      if (!empty($req->in)) {
         $team['in'] = $req['in'];
      }

      $team->update();
      return redirect()->route('team');
   }
   // delete team
   public function teamdelete($id)
   {
      Team::find($id)->delete();
      return redirect()->back();
   }

   // controller for blog section 

   // get blog
   public function getblog()
   {
      $blog = blog::get()->all();
      $data = compact('blog');
      return view('admin.blog')->with($data);
   }
   // add blog
   public function addblog()
   {
      $title = "Add new blog";
      $url = "admin/blogstore";
      $btn = "Add";
      $category = category::get()->all();
      $data = compact('title', 'url', 'btn', 'category');
      return view('admin.addblog')->with($data);
   }
   // store blog 

   public function storeblog(Request $req)
   {
      $req->validate([
         'title' => 'required',
         'auth' => 'required',
         'img' => 'required',
         'cata' => 'required',
         'details' => 'required'
      ]);
      $blog = new blog();

      $blog['title'] = $req['title'];
      $blog['auth'] = $req['auth'];
      $blog['cata'] = $req['cata'];
      $blog['details'] = $req['details'];



      if (!file_exists(public_path('assets/images/blog'))) {
         mkdir(public_path('assets/images/blog'), 0777, true);
      }


      if (!empty($req->img)) {

         $image = $req->img;
         $name = $image->getClientOriginalName();
         $imagename = time() . "_" . $name;
         $destination = public_path('assets/images/blog');
         $image->move($destination, $imagename);
         $blog['img'] = 'assets/images/blog/' . $imagename;
      }


      $blog->save();
      return redirect()->route('blog');
   }
   // edit blog
   // get update 
   public function editblog($id)
   {
      $title = "Update Blog";
      $url = "admin/updateblog/" . $id;
      $btn = "Update";
      $category = category::get()->all();
      $blogdata = blog::find($id);
      $data = compact('title', 'url', 'btn', 'blogdata', 'category');
      return view('admin.addblog')->with($data);
   }
   // update team 
   public function updateblog(Request $req, $id)
   {
      $req->validate([
         'title' => 'required',
         'auth' => 'required',
         'cata' => 'required',
         'details' => 'required'
      ]);
      $blog = blog::find($id);

      $blog['title'] = $req['title'];
      $blog['auth'] = $req['auth'];
      $blog['cata'] = $req['cata'];
      $blog['details'] = $req['details'];



      if (!file_exists(public_path('assets/images/blog'))) {
         mkdir(public_path('assets/images/blog'), 0777, true);
      }


      if (!empty($req->img)) {

         $image = $req->img;
         $name = $image->getClientOriginalName();
         $imagename = time() . "_" . $name;
         $destination = public_path('assets/images/blog');
         $image->move($destination, $imagename);
         $blog['img'] = 'assets/images/blog/' . $imagename;
      }


      $blog->update();
      return redirect()->route('blog');
   }
   // delete blog
   public function blogdelete($id)
   {
      blog::find($id)->delete();
      Alert::success('Delete', 'Success to Delete Blog');
      return redirect()->back();
   }
   // add contact Details

   public function contactDetails()

   {
      $contactDetails = contactDetails::get()->all();
      if (count($contactDetails) > 0) {
         $title = "Update Contact Details";
         $url = "admin/contact/update";
         $btn = "Update";
         $contactdata = contactDetails::get()->all();

         $data = compact('title', 'url', 'btn', 'contactdata');

         return view('admin.contactform')->with($data);
      } else {
         $title = "Add Contact Details";
         $url = "admin/contact/add";
         $btn = "Add";
         $data = compact('title', 'url', 'btn');
         return view('admin.contactform')->with($data);
      }
   }
   public function addcontact(Request $req)
   {
      $req->validate([
         'location' => 'required',
         'phone' => 'required',
         'email' => 'required',
      ]);
      $contact = new contactDetails();
      $contact['location'] = $req['location'];
      $contact['phone'] = $req['phone'];
      $contact['email'] = $req['email'];

      if (!empty($req->fb)) {
         $contact['fb'] = $req['fb'];
      }
      if (!empty($req->tw)) {
         $contact['tw'] = $req['tw'];
      }
      if (!empty($req->in)) {
         $contact['in'] = $req['in'];
      }
      if (!empty($req->li)) {
         $contact['li'] = $req['li'];
      }
      if (!empty($req->yo)) {
         $contact['yo'] = $req['yo'];
      }

      $contact->save();
      Alert::success('Success', 'Contact Details Add successfully');
      return redirect()->back();
   }
   public function updatecontact(Request $req)
   {
      $req->validate([
         'location' => 'required',
         'phone' => 'required',
         'email' => 'required',
      ]);
      $contact = contactDetails::find($req['id']);
      $contact['location'] = $req['location'];
      $contact['phone'] = $req['phone'];
      $contact['email'] = $req['email'];

      if (!empty($req->fb)) {
         $contact['fb'] = $req['fb'];
      }
      if (!empty($req->tw)) {
         $contact['tw'] = $req['tw'];
      }
      if (!empty($req->in)) {
         $contact['in'] = $req['in'];
      }
      if (!empty($req->li)) {
         $contact['li'] = $req['li'];
      }
      if (!empty($req->yo)) {
         $contact['yo'] = $req['yo'];
      }

      $contact->update();
      Alert::success('Success', 'Contact Details Update successfully');
      return redirect()->back();
   }

   // add portfolio details
   public function portfolio()

   {
      $portfolio = Portfolio::get()->all();
      if (count($portfolio) > 0) {
         $title = "Update portfolio Details";
         $url = "admin/portfolio/update";
         $btn = "update";
         $portfolio = Portfolio::get()->all();

         $data = compact('title', 'url', 'btn', 'portfolio');

         return view('admin.portfolio')->with($data);
      } else {
         $title = "Add portfolio Details";
         $url = "admin/portfolio/add";
         $btn = "add";
         $data = compact('title', 'url', 'btn');
         return view('admin.portfolio')->with($data);
      }
   }
   public function addPortfolio(Request $req)
   {
      $req->validate([
         'hc' => 'required',
         'pd' => 'required',
         'wa' => 'required',
      ]);
      $portfolio = new portfolio();
      $portfolio['hc'] = $req['hc'];
      $portfolio['pd'] = $req['pd'];
      $portfolio['wa'] = $req['wa'];

      $portfolio->save();
      // Alert::success('Success', 'Contact Details Add successfully');
      return redirect()->back();
   }
   public function updatePortfolio(Request $req)
   {
      $req->validate([
         'hc' => 'required',
         'pd' => 'required',
         'wa' => 'required',
      ]);
      $portfolio = portfolio::find($req['id']);
      $portfolio['hc'] = $req['hc'];
      $portfolio['pd'] = $req['pd'];
      $portfolio['wa'] = $req['wa'];

      $portfolio->update();
      // Alert::success('Success', 'Contact Details u successfully');
      return redirect()->back();
   }

   /// claint section start
   // get claint 

   public function get_claint()
   {
      $claint = claint::get()->all();
      $data = compact('claint');
      return view('admin.claint')->with($data);
   }
   // add claint
   public function claint_add()
   {
      $title = "Add new Claint";
      $url = "admin/claint-store";
      $btn = "Add";
      $data = compact('title', 'url', 'btn');
      return view('admin.Claint_add')->with($data);
   }
   // store claint 

   public function claint_store(Request $req)
   {
      $req->validate([
         'name' => 'required',
         'Profession' => 'required',
         'quote' => 'required',
         'img' => 'required'
      ]);
      $claint = new claint();

      $claint['name'] = $req['name'];
      $claint['pro'] = $req['Profession'];
      $claint['qu'] = $req['quote'];
      if (!file_exists(public_path('assets/images/claints'))) {
         mkdir(public_path('assets/images/claints'), 0777, true);
      }


      if (!empty($req->img)) {

         $image = $req->img;
         $name = $image->getClientOriginalName();
         $imagename = time() . "_" . $name;
         $destination = public_path('assets/images/claints');
         $image->move($destination, $imagename);
         $claint['img'] = 'assets/images/claints/' . $imagename;
      }
      $claint->save();
      return redirect()->route('Claint');
   }
   // get update 
   public function claint_edit($id)
   {
      $title = "Update Claint";
      $url = "admin/claint-update";
      $btn = "Update";
      $claintData = claint::find($id);
      $data = compact('title', 'url', 'btn', 'claintData');
      return view('admin.Claint_add')->with($data);
   }
   // update claint
   public function claint_update(Request $req)
   {
      $req->validate([
         'id' => 'required',
         'name' => 'required',
         'Profession' => 'required',
         'quote' => 'required'
      ]);
      $claint = claint::find($req->id);

      $claint['name'] = $req['name'];
      $claint['pro'] = $req['Profession'];
      $claint['qu'] = $req['quote'];
      if (!file_exists(public_path('assets/images/claints'))) {
         mkdir(public_path('assets/images/claints'), 0777, true);
      }


      if (!empty($req->img)) {

         $image = $req->img;
         $name = $image->getClientOriginalName();
         $imagename = time() . "_" . $name;
         $destination = public_path('assets/images/claints');
         $image->move($destination, $imagename);
         $blog['img'] = 'assets/images/claints/' . $imagename;
      }
      $claint->save();
      return redirect()->route('Claint');
   }
   // delete claint
   public function claint_delete($id)
   {
      claint::find($id)->delete();
      Alert::success('Delete', 'Success to Delete Blog');
      return redirect()->back();
   }

   /// pricing section start
   // get pricing 
   public function get_pricing()
   {
      $pricing = pricing::get()->all();
      $data = compact('pricing');
      return view('admin.pricing')->with($data);
   }
   // add pricing
   public function pricing_add()
   {
      $title = "Add new pricing";
      $url = "admin/pricing-store";
      $btn = "Add";
      $data = compact('title', 'url', 'btn');
      return view('admin.Pricing_add')->with($data);
   }
   // store pricing 

   public function pricing_store(Request $req)
   {

      $req->validate([
         'name' => 'required',
         'ptitle' => 'required',
         'cost' => 'required',
      ]);
      $pricing = new pricing();

      $pricing['pname'] = $req['name'];
      $pricing['title'] = $req['ptitle'];
      $pricing['amount'] = $req['cost'];

      if (!empty($req['html'])) {
         $pricing['html'] = 1;
      }
      if (!empty($req['boot'])) {
         $pricing['boot'] = 1;
      }
      if (!empty($req['res'])) {
         $pricing['res'] = 1;
      }
      if (!empty($req['cross'])) {
         $pricing['cross'] = 1;
      }
      $pricing->save();
      return redirect()->route('pricing');
   }
   // get update 
   public function pricing_edit($id)
   {
      $title = "Update pricing";
      $url = "admin/pricing-update";
      $btn = "Update";
      $pricingData = pricing::find($id);
      $data = compact('title', 'url', 'btn', 'pricingData');
      return view('admin.Pricing_add')->with($data);
   }
   // update pricing
   public function pricing_update(Request $req)
   {
      $req->validate([
         'name' => 'required',
         'ptitle' => 'required',
         'cost' => 'required',
      ]);
      $pricing = pricing::find($req->id);

      $pricing['pname'] = $req['name'];
      $pricing['title'] = $req['ptitle'];
      $pricing['amount'] = $req['cost'];

      if (!empty($req['html'])) {
         $pricing['html'] = 1;
      }
      if (!empty($req['boot'])) {
         $pricing['boot'] = 1;
      }
      if (!empty($req['res'])) {
         $pricing['res'] = 1;
      }
      if (!empty($req['cross'])) {
         $pricing['cross'] = 1;
      }
      $pricing->update();
      return redirect()->route('pricing');
   }
   // delete pricing
   public function pricing_delete($id)
   {
      pricing::find($id)->delete();
      Alert::success('Delete', 'Success to Delete Blog');
      return redirect()->back();
   }
      /// carousel section start
   // get carousel 
   public function get_carousel()
   {
      $carousel = carousel::get()->all();
      $data = compact('carousel');
      return view('admin.carousel')->with($data);
   }
   // add carousel
   public function carousel_add()
   {
      $title = "Add new carousel";
      $url = "admin/carousel-store";
      $btn = "Add";
      $data = compact('title', 'url', 'btn');
      return view('admin.carousel_add')->with($data);
   }
   // store carousel 

   public function carousel_store(Request $req)
   {

      $req->validate([
         'mh' => 'required',
         'sh' => 'required',
         'img' => 'required',
      ]);
      $carousel = new carousel();

      $carousel['h1'] = $req['mh'];
      $carousel['h2'] = $req['sh'];
      if (!file_exists(public_path('assets/images/carousels'))) {
         mkdir(public_path('assets/images/carousels'), 0777, true);
      }


      if (!empty($req->img)) {

         $image = $req->img;
         $name = $image->getClientOriginalName();
         $imagename = time() . "_" . $name;
         $destination = public_path('assets/images/carousels');
         $image->move($destination, $imagename);
         $carousel['img'] = 'assets/images/carousels/' . $imagename;
      }

      $carousel->save();
      return redirect()->route('carousel');
   }
   // get update 
   public function carousel_edit($id)
   {
      $title = "Update carousel";
      $url = "admin/carousel-update";
      $btn = "Update";
      $carouselData = carousel::find($id);
      $data = compact('title', 'url', 'btn', 'carouselData');
      return view('admin.carousel_add')->with($data);
   }
   // update carousel
   public function carousel_update(Request $req)
   {
      $req->validate([
         'mh' => 'required',
         'sh' => 'required',
      ]);
      $carousel = carousel::find($req->id);

      $carousel['h1'] = $req['mh'];
      $carousel['h2'] = $req['sh'];
      if (!file_exists(public_path('assets/images/carousels'))) {
         mkdir(public_path('assets/images/carousels'), 0777, true);
      }


      if (!empty($req->img)) {

         $image = $req->img;
         $name = $image->getClientOriginalName();
         $imagename = time() . "_" . $name;
         $destination = public_path('assets/images/carousels');
         $image->move($destination, $imagename);
         $carousel['img'] = 'assets/images/carousels/' . $imagename;
      }
      $carousel->update();
      return redirect()->route('carousel');
   }
   // delete carousel
   public function carousel_delete($id)
   {
      carousel::find($id)->delete();
      Alert::success('Delete', 'Success to Delete Blog');
      return redirect()->back();
   }
}
