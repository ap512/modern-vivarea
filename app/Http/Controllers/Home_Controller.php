<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\support\facades\Auth;
use App\Models\Admin;
use Illuminate\support\MessageBag;
use Illuminate\Support\Facades\Mail;
use Illuminate\support\facades\Input;
use DB;
use Hash;

use Carbon\Carbon;

class Home_Controller extends Controller
{
    public function index(){

        $data['home_banner']=DB::table('home_banner')->get();

        $data['home_land']=DB::table('home_land')->get();

        $data['home_feature']=DB::table('home_feature')->get();

        $data['features']=DB::table('features')->get();

        $home_config_description=DB::table('home_config_description')->get();

        if($home_config_description !=''){

            $data['home_config_title']=$home_config_description[0]->title;

            $data['home_config_image']=$home_config_description[0]->image;
        }

        $data['home_config']=DB::table('home_config')->get();



        $home_gallery_description=DB::table('home_gallery_description')->get();

        if($home_gallery_description !=''){

            $data['home_gallery_title']=$home_gallery_description[0]->title;
        }

        $data['home_gallery']=DB::table('home_gallery')->get();




        $home_plan_description=DB::table('home_plan_description')->get();

        if($home_plan_description !=''){

            $data['home_plan_title']=$home_plan_description[0]->title;

            $data['home_plan_image']=$home_plan_description[0]->image;
        }

        $data['home_plan']=DB::table('home_plan')->get();

        $data['home_overview_description']=DB::table('home_overview_description')->get();
        
        $data['description_list']=DB::table('description_list')->get();


        $contact_title=DB::table('contact_title')->get();

        if($contact_title !=''){

            $data['contact_title1']=$contact_title[0]->title1;

            $data['contact_title2']=$contact_title[0]->title2;

            $data['contact_description']=$contact_title[0]->description;
        }

        $data['location']=DB::table('location')->get();

        $home_amenities_description=DB::table('home_amenities_description')->get();

        if($home_amenities_description !=''){

            $data['home_amenities_title']=$home_amenities_description[0]->title;
        }

        $data['home_amenities']=DB::table('home_amenities')->get();




        $footer_description=DB::table('footer_description')->get();

        if($footer_description !=''){

            $data['footer_description_title']=$footer_description[0]->title;

            $data['footer_description']=$footer_description[0]->description;
        }

        $footer_address=DB::table('footer_address')->get();

        if($footer_address !=''){

            $data['footer_address']=$footer_address[0]->address;
        }


        $admins=DB::table('admins')->get();

        if($admins !=''){

            $data['admin_phone_no']=$admins[0]->phone_no;
        }


        return view('index',$data);
    }





    public function getinquiry(Request $request){

        
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required',
            'message' => 'required',
        ]);

        if ($validator->passes()) {

        $first_name=$request->first_name;
        $last_name=$request->last_name;
        $email=$request->email;
        $phone_no=$request->phone_no;
        $message=$request->message;
        $mytime = Carbon::now('Asia/Kolkata');

        $contact_admin=DB::table('contact_admin')->insert(['first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'phone_no'=>$phone_no,'message'=>$message,'date'=>$mytime,]);

        if($email){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;
            $aname=$admin_detail[0]->name;
            $aphone_no=$admin_detail[0]->phone_no;
       
            $meta['FROM_EMAIL']="jaypatel07072001@gmail.com";
            $meta['admin_email']="jaypatel07072001@gmail.com";
            $meta['subject']="Someone need expert help";
            $meta['name']=$aname;
            $meta['email']=$email;
            $meta['phone_no']=$phone_no;
            $meta['data']="New Inquiry !!";
             
                 
            Mail::send('email.new_email', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['admin_email']);
               $m->subject($meta['subject']);
            });




            $meta['FROM_EMAIL']="jaypatel07072001@gmail.com";
            $meta['client_email']="$email";
            $meta['subject']="New Get Started Inquiry"; 
            $meta['name']=$first_name;
            $meta['data']="Thank you for your response !!";
      
           Mail::send('email.new_email1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['client_email']);
               $m->subject($meta['subject']); 
             });
            

            return response()->json(['success'=>'Response Sent successfully.']);
            
        }
    }

        return response()->json(['error'=>$validator->errors()]);
        
    }







    public function price_inquiry(Request $request){

        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required',
        ]);

        if ($validator->passes()) {

        $name=$request->name;
        $email=$request->email;
        $phone_no=$request->phone_no;
        $mytime = Carbon::now('Asia/Kolkata');

        $price_inquiry=DB::table('price_inquiry')->insert(['name'=>$name,'email'=>$email,'phone_no'=>$phone_no,'date'=>$mytime,]);

        if($email){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;
            $aname=$admin_detail[0]->name;
            $aphone_no=$admin_detail[0]->phone_no;
       
            $meta['FROM_EMAIL']="jaypatel07072001@gmail.com";
            $meta['admin_email']="jaypatel07072001@gmail.com";
            $meta['subject']="Someone need help for Price Inquiry";
            $meta['name']=$aname;
            $meta['email']=$email;
            $meta['phone_no']=$phone_no;
            $meta['data']="New Inquiry !!";
             
                 
            Mail::send('email.new_email', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['admin_email']);
               $m->subject($meta['subject']);
            });




            $meta['FROM_EMAIL']="jaypatel07072001@gmail.com";
            $meta['client_email']="$email";
            $meta['subject']="New Get Started Inquiry"; 
            $meta['name']=$name;
            $meta['data']="Thank you for your response !!";
      
           Mail::send('email.new_email1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['client_email']);
               $m->subject($meta['subject']); 
             });
            

            return response()->json(['success'=>'Response Sent successfully.']);
            
        }
    }

        return response()->json(['error'=>$validator->errors()]);
        
    }
}
