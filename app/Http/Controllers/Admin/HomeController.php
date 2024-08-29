<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    public function home_banner(){

        $home_banner=DB::table('home_banner')->get();

        $data['home_banner']=$home_banner;

        return view('admin.home_banner',$data);
    }

    public function add_home_banner_data($id){
        
        if($id==0){

            $data['video']='';

            $data['id']=$id;
        }
        else{

            $home_banner=DB::table('home_banner')->where('id',$id)->get();

            $data['id']=$home_banner[0]->id;

            $data['video']=$home_banner[0]->video;
        }

        return view('admin.add_home_banner_data',$data);
    }


    public function store_add_home_banner_data(Request $request,$id){

        if($id ==0){

            $validated=$request->validate([
                'video'=>'required',
            ]);

            $file=$request->file('video');

            $videoname='';

            if($file !=''){

                $destination_path='uploads';

                $videoname=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$videoname);

            }

            
            DB::table('home_banner')->insert(['video'=>$videoname]);

            return redirect('/admin/home_banner')->with('error','data submitted successfully!!');
        }

        else{

            $file=$request->file('video');

            $oldvideo=$request->input('oldvideo');

            $videoname='';

            if($file !=''){

                $destination_path='uploads';

                $videoname=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$videoname);

                if($oldvideo !=''){

                    unlink(public_path('/uploads/'.$oldvideo));
                }

                DB::table('home_banner')->where('id',$id)->update(['video'=>$videoname ]);

            }

            return redirect('/admin/home_banner')->with('error','data updated successfully!!');
        }
    }





    public function home_land(){

        $home_land=DB::table('home_land')->paginate(5);

        $data['home_land']=$home_land;

        return view('admin.home_land',$data);
    }


    public function add_home_land_data($id){
        
        if($id==0){

            $data['image']='';

            $data['title']='';

            $data['description']='';

            $data['id']=$id;
        }
        else{

            $home_land=DB::table('home_land')->where('id',$id)->get();

            $data['id']=$home_land[0]->id;

            $data['image']=$home_land[0]->image;

            $data['title']=$home_land[0]->title;

            $data['description']=$home_land[0]->description;
        }

        return view('admin.add_home_land_data',$data);
    }


    public function store_add_home_land_data(Request $request,$id){

        if($id ==0){

            $validated=$request->validate([
                'image'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            $file=$request->file('image');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

            }
        
            DB::table('home_land')->insert(['image'=>$imagename,'title'=>$title,'description'=>$description]);

            return redirect('/admin/home_land')->with('error','data submitted successfully!!');
        }

        else{

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage !=''){

                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_land')->where('id',$id)->update(['image'=>$imagename ]);

            }


            DB::table('home_land')->where('id',$id)->update(['title'=>$title,'description'=>$description]);

            return redirect('/admin/home_land')->with('error','data updated successfully!!');
        }
    }

    

    public function delete_home_land($id){

        $userdata=DB::table('home_land')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('home_land')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);
    }




    public function home_feature(){

        $home_feature=DB::table('home_feature')->get();

        $data['home_feature']=$home_feature;

        return view('admin.home_feature',$data);
    }

    public function add_home_feature_data($id){
        
        if($id==0){

            $data['image']='';

            $data['title']='';

            $data['features']='';

            $data['id']=$id;
        }
        else{

            $home_feature=DB::table('home_feature')->where('id',$id)->get();

            $data['id']=$home_feature[0]->id;

            $data['image']=$home_feature[0]->image;
            
            $data['title']=$home_feature[0]->title;

            $data['features']=DB::table('features')->where('list_id',$id)->get();

        }

        return view('admin.add_home_feature_data',$data);
    }


    public function store_add_home_feature_data(Request $request,$id){

        if($id ==0){

            $validated=$request->validate([
                'image'=>'required',
                'title'=>'required',
                'features'=>'required',
            ]);

            $title=$request->input('title');

            $file=$request->file('image');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

            }

            DB::table('home_feature')->insert(['image'=>$imagename,'title'=>$title,]);


            $list_id=DB::table('home_feature')->max('id');


            $features=$request->input('features');

            $count=0;


            if($features !=''){

                $count=count($features);

                for($i=0 ; $i<$count;$i++){

                   $description=$features[$i];
                   
                   DB::table('features')->insert(['list_id'=>$list_id,'description'=>$description]);

                }
            }


            return redirect('/admin/home_feature')->with('error','data submitted successfully!!');
        }

        else{

            $validated=$request->validate([
                'title'=>'required',
                'features'=>'required',
            ]);

            $title=$request->input('title');

            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage !=''){
                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_feature')->where('id',$id)->update(['image'=>$imagename]);

            }

            DB::table('home_feature')->where('id',$id)->update(['title'=>$title]);


            DB::table('features')->where('list_id',$id)->delete();

            $list_id=$id;

            $features=$request->input('features');

            $count=0;


            if($features !=''){

                $count=count($features);

                for($i=0 ; $i<$count;$i++){

                    $description=$features[$i];

                   DB::table('features')->insert(['list_id'=>$list_id,'description'=>$description]);

                }
            }


            return redirect('/admin/home_feature')->with('error','data updated successfully!!');
        }
    }

    

    public function delete_home_feature($id){

        $home_feature=DB::table('home_feature')->where('id',$id)->get();

        $image=$home_feature[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('features')->where('list_id',$id)->delete();

        DB::table('home_feature')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);
    }



    public function add_feature(){
        
        return response()->json([
            'success'=>'200',
        ]);
    }



    public function remove_feature(){
        
        return response()->json([
            'success'=>'200',
        ]);
    }



    public function view_home_feature($id){

        $data['home_feature']=DB::table('home_feature')->where('id',$id)->get();

        $data['id']=$id;

        $data['features']=DB::table('features')->where('list_id',$id)->get();

        return view('admin.view_home_feature',$data);
    }










    public function home_config(){

        $data['home_config']=DB::table('home_config')->get();

        $data['home_config_description']=DB::table('home_config_description')->get();

        return view('admin.home_config',$data);
    }




    public function update_home_config_description_data($id){

        $home_config_description=DB::table('home_config_description')->where('id',$id)->get();

        if(count($home_config_description) !=0){

            $data['id']=$home_config_description[0]->id;

            $data['title']=$home_config_description[0]->title;

            $data['image']=$home_config_description[0]->image;

        }

        $data['empty']='empty';

        return view('admin.add_home_config_description_data',$data);
    }


    public function store_update_home_config_description_data(Request $request,$id){

            $validated=$request->validate([
                'title'=>'required',
            ]);

            $title=$request->input('title');

            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage !=''){
                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_config_description')->where('id',$id)->update(['image'=>$imagename]);

            }

            DB::table('home_config_description')->where('id',$id)->update(['title'=>$title]);

            return redirect('/admin/home_config')->with('error','data updated successfully!!');
    }



    public function add_home_config_data($id){
        
        if($id==0){

            $data['area']='';

            $data['configuration']='';

            $data['id']=$id;
        }
        else{
            $home_config=DB::table('home_config')->where('id',$id)->get();
            
            $data['id']=$home_config[0]->id;
        
            $data['area']=$home_config[0]->area;

            $data['configuration']=$home_config[0]->configuration;

        }

        return view('admin.add_home_config_data',$data);
    }


    public function store_add_home_config_data(Request $request,$id){

        if($id ==0){

            $validated=$request->validate([
                'configuration'=>'required',
                'area'=>'required',
            ]);

            $configuration=$request->input('configuration');
            $area=$request->input('area');

            
            DB::table('home_config')->insert(['configuration'=>$configuration,'area'=>$area]);

            return redirect('/admin/home_config')->with('error','data submitted successfully!!');
        }

        else{

            $validated=$request->validate([
                'configuration'=>'required',
                'area'=>'required',
            ]);

            $configuration=$request->input('configuration');
            $area=$request->input('area');

            DB::table('home_config')->where('id',$id)->update(['configuration'=>$configuration,'area'=>$area]);

            return redirect('/admin/home_config')->with('error','data updated successfully!!');
        }
    }

    

    public function delete_home_config($id){

        DB::table('home_config')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);
    }








    public function home_gallery(){

        $data['home_gallery']=DB::table('home_gallery')->get();

        $data['home_gallery_description']=DB::table('home_gallery_description')->get();

        return view('admin.home_gallery',$data);
    }




    public function update_home_gallery_description_data($id){

        $home_gallery_description=DB::table('home_gallery_description')->where('id',$id)->get();

        if(count($home_gallery_description) !=0){

            $data['id']=$home_gallery_description[0]->id;

            $data['title']=$home_gallery_description[0]->title;

        }

        $data['empty']='empty';

        return view('admin.add_home_gallery_description_data',$data);
    }


    public function store_update_home_gallery_description_data(Request $request,$id){

            $validated=$request->validate([
                'title'=>'required',
            ]);

            $title=$request->input('title');

            DB::table('home_gallery_description')->where('id',$id)->update(['title'=>$title]);

            return redirect('/admin/home_gallery')->with('error','data updated successfully!!');
    }



    public function add_home_gallery_data($id){
        
        if($id==0){

            $data['image']='';

            $data['id']=$id;
        }
        else{
            $home_gallery=DB::table('home_gallery')->where('id',$id)->get();
            
            $data['id']=$home_gallery[0]->id;
        
            $data['image']=$home_gallery[0]->image;

        }

        return view('admin.add_home_gallery_data',$data);
    }


    public function store_add_home_gallery_data(Request $request,$id){

        if($id ==0){

            $validated=$request->validate([
                'image'=>'required',
            ]);

            $file=$request->file('image');

            if($file !=''){

                foreach($file as $f){

                    $imagename='';

                    $destination_path='uploads';

                    $imagename=time().'_'.$f->getClientOriginalName();

                    $f->move($destination_path,$imagename);

                    DB::table('home_gallery')->insert(['image'=>$imagename]);
                }
            }

            return redirect('/admin/home_gallery')->with('error','data submitted successfully!!');
        }

        else{

            return redirect('/admin/home_gallery')->with('error','data updated successfully!!');
        }
    }

    

    public function delete_home_gallery($id){

        $user_data=DB::table('home_gallery')->where('id',$id)->get();

        $image=$user_data[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('home_gallery')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);
    }







    public function home_plan(){

        $data['home_plan']=DB::table('home_plan')->get();

        $data['home_plan_description']=DB::table('home_plan_description')->get();

        return view('admin.home_plan',$data);
    }




    public function update_home_plan_description_data($id){

        $home_plan_description=DB::table('home_plan_description')->where('id',$id)->get();

        if(count($home_plan_description) !=0){

            $data['id']=$home_plan_description[0]->id;

            $data['title']=$home_plan_description[0]->title;

            $data['image']=$home_plan_description[0]->image;

        }

        $data['empty']='empty';

        return view('admin.add_home_plan_description_data',$data);
    }


    public function store_update_home_plan_description_data(Request $request,$id){

            $validated=$request->validate([
                'title'=>'required',
            ]);

            $title=$request->input('title');

            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage !=''){
                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_plan_description')->where('id',$id)->update(['image'=>$imagename]);

            }

            DB::table('home_plan_description')->where('id',$id)->update(['title'=>$title]);

            return redirect('/admin/home_plan')->with('error','data updated successfully!!');
    }



    public function add_home_plan_data($id){
        
        if($id==0){

            $data['id']=$id;
        }
        else{
            $home_plan=DB::table('home_plan')->where('id',$id)->get();
            
            $data['id']=$home_plan[0]->id;
        
        }

        return view('admin.add_home_plan_data',$data);
    }


    public function store_add_home_plan_data(Request $request,$id){

        if($id ==0){

            $validated=$request->validate([
                'image'=>'required',
            ]);

            $file=$request->file('image');

            if($file !=''){

                foreach($file as $f){

                    $imagename='';

                    $destination_path='uploads';

                    $imagename=time().'_'.$f->getClientOriginalName();

                    $f->move($destination_path,$imagename);

                    DB::table('home_plan')->insert(['image'=>$imagename]);
                }
            }

            return redirect('/admin/home_plan')->with('error','data submitted successfully!!');
        }

        else{

            return redirect('/admin/home_plan')->with('error','data updated successfully!!');
        }
    }

    

    public function delete_home_plan($id){

        DB::table('home_plan')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);
    }









    /*public function home_overview(){
        
        $data['home_overview_description']=DB::table('home_overview_description')->get();

        return view('admin.home_overview',$data);
    }




    public function update_home_overview_description_data($id){

        $home_overview_description=DB::table('home_overview_description')->where('id',$id)->get();

        if(count($home_overview_description) !=0){

            $data['id']=$home_overview_description[0]->id;

            $data['image']=$home_overview_description[0]->image;

            $data['title1']=$home_overview_description[0]->title1;

            $data['title2']=$home_overview_description[0]->title2;

            $data['description1']=$home_overview_description[0]->description1;

            $data['description2']=$home_overview_description[0]->description2;

        }

        $data['empty']='empty';

        return view('admin.add_home_overview_description_data',$data);
    }


    public function store_update_home_overview_description_data(Request $request,$id){

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
                'description1'=>'required',
                'description2'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

            $description1=$request->input('description1');

            $description2=$request->input('description2');



            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage !=''){
                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_overview_description')->where('id',$id)->update(['image'=>$imagename]);

            }

            DB::table('home_overview_description')->where('id',$id)->update(['title1'=>$title1,'title2'=>$title2,'description1'=>$description1,'description2'=>$description2,]);

            return redirect('/admin/home_overview')->with('error','data updated successfully!!');
    }*/



    public function add_section(){
        
        return response()->json([
            'success'=>'200',
        ]);
    }



    public function remove_section(){
        
        return response()->json([
            'success'=>'200',
        ]);
    }




    public function home_overview(){
        
        $data['home_overview_description']=DB::table('home_overview_description')->get();

        $data['description_list']=DB::table('description_list')->get();

        return view('admin.home_overview',$data);
    }




    public function update_home_overview_description_data($id){

        $home_overview_description=DB::table('home_overview_description')->where('id',$id)->get();

        $data['description_list']=DB::table('description_list')->where('list_id',$id)->get();

        if(count($home_overview_description) !=0){

            $data['id']=$home_overview_description[0]->id;

            $data['image']=$home_overview_description[0]->image;

            $data['title1']=$home_overview_description[0]->title1;

            $data['title2']=$home_overview_description[0]->title2;

            $data['description1']=$home_overview_description[0]->description1;

            $data['description2']=$home_overview_description[0]->description2;

        }

        $data['empty']='empty';

        return view('admin.add_home_overview_description_data',$data);
    }


    public function store_update_home_overview_description_data(Request $request,$id){

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');



            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage !=''){
                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_overview_description')->where('id',$id)->update(['image'=>$imagename]);

            }

            DB::table('home_overview_description')->where('id',$id)->update(['title1'=>$title1,'title2'=>$title2,]);


            DB::table('description_list')->where('list_id',$id)->delete();

            $description_id=$id;

            $description=$request->input('description');

            $count=0;


            if($description !=''){

                $count=count($description);

                for($i=0 ; $i<$count;$i++){

                   $description_1=$description[$i];
                   
                   DB::table('description_list')->insert(['list_id'=>$description_id,'description'=>$description_1]);

                }
            }

            return redirect('/admin/home_overview')->with('error','data updated successfully!!');
    }




    public function home_amenities(){

        $data['home_amenities']=DB::table('home_amenities')->get();

        $data['home_amenities_description']=DB::table('home_amenities_description')->get();

        return view('admin.home_amenities',$data);
    }




    public function update_home_amenities_description_data($id){

        $home_amenities_description=DB::table('home_amenities_description')->where('id',$id)->get();

        if(count($home_amenities_description) !=0){

            $data['id']=$home_amenities_description[0]->id;

            $data['title']=$home_amenities_description[0]->title;

        }

        $data['empty']='empty';

        return view('admin.add_home_amenities_description_data',$data);
    }


    public function store_update_home_amenities_description_data(Request $request,$id){

            $validated=$request->validate([
                'title'=>'required',
            ]);

            $title=$request->input('title');

            DB::table('home_amenities_description')->where('id',$id)->update(['title'=>$title]);

            return redirect('/admin/home_amenities')->with('error','data updated successfully!!');
    }



    public function add_home_amenities_data($id){
        
        if($id==0){

            $data['image']='';

            $data['title']='';

            $data['id']=$id;
        }
        else{
            $home_amenities=DB::table('home_amenities')->where('id',$id)->get();
            
            $data['id']=$home_amenities[0]->id;
        
            $data['image']=$home_amenities[0]->image;

            $data['title']=$home_amenities[0]->title;

        }

        return view('admin.add_home_amenities_data',$data);
    }


    public function store_add_home_amenities_data(Request $request,$id){

        if($id ==0){

            $validated=$request->validate([
                'image'=>'required',
                'title'=>'required',
            ]);

            $title=$request->input('title');

            $file=$request->file('image');
            
            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

            }
           

            DB::table('home_amenities')->insert(['image'=>$imagename,'title'=>$title]);

            return redirect('/admin/home_amenities')->with('error','data submitted successfully!!');
        }

        else{

            $validated=$request->validate([
                'title'=>'required',
            ]);

            $title=$request->input('title');


            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage !=''){
                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_amenities')->where('id',$id)->update(['image'=>$imagename]);

            }

            DB::table('home_amenities')->where('id',$id)->update(['title'=>$title]);

            return redirect('/admin/home_amenities')->with('error','data updated successfully!!');
        }
    }

    

    public function delete_home_amenities($id){

        $user_data=DB::table('home_amenities')->where('id',$id)->get();

        $image=$user_data[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('home_amenities')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);
    }









    public function home_contact(){

        $data['location']=DB::table('location')->get();

        $data['contact_title']=DB::table('contact_title')->get();

        return view('admin.home_contact',$data);
    }




    public function update_contact_title_data($id){

        $contact_title=DB::table('contact_title')->where('id',$id)->get();

        if(count($contact_title) !=0){

            $data['id']=$contact_title[0]->id;

            $data['title1']=$contact_title[0]->title1;

            $data['title2']=$contact_title[0]->title2;

            $data['description']=$contact_title[0]->description;

        }

        $data['empty']='empty';

        return view('admin.add_contact_title_data',$data);
    }


    public function store_update_contact_title_data(Request $request,$id){

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
                'description'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

            $description=$request->input('description');

            DB::table('contact_title')->where('id',$id)->update(['title1'=>$title1,'title2'=>$title2,'description'=>$description]);

            return redirect('/admin/home_contact')->with('error','data updated successfully!!');
    }



    public function add_location_data($id){
        
        if($id==0){

            $data['name']='';

            $data['distance']='';

            $data['id']=$id;
        }
        else{
            $location=DB::table('location')->where('id',$id)->get();
            
            $data['id']=$location[0]->id;
        
            $data['name']=$location[0]->name;

            $data['distance']=$location[0]->distance;

        }

        return view('admin.add_location_data',$data);
    }


    public function store_add_location_data(Request $request,$id){

        if($id ==0){

            $validated=$request->validate([
                'name'=>'required',
                'distance'=>'required',
            ]);

            $distance=$request->input('distance');

            $name=$request->input('name');
                       

            DB::table('location')->insert(['name'=>$name,'distance'=>$distance]);

            return redirect('/admin/home_contact')->with('error','data submitted successfully!!');
        }

        else{

            $validated=$request->validate([
                'name'=>'required',
                'distance'=>'required',
            ]);

            $distance=$request->input('distance');

            $name=$request->input('name');


            DB::table('location')->where('id',$id)->update(['name'=>$name,'distance'=>$distance]);

            return redirect('/admin/home_contact')->with('error','data updated successfully!!');
        }
    }

    

    public function delete_location($id){

        DB::table('location')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);
    }








    public function inquiry(){

        $data['inquiry']=DB::table('contact_admin')->orderBy('id','desc')->paginate(10);

        return view('admin.inquiry',$data);
    }


    public function delete_inquiry($id){

        DB::table('contact_admin')->where('id',$id)->delete();

        return response()->json([
            'success'=>'Record has been deleted successfully!'
        ]);
    }




    public function price_inquiry(){

        $data['price_inquiry']=DB::table('price_inquiry')->orderBy('id','desc')->paginate(10);

        return view('admin.price_inquiry',$data);
    }


    public function delete_price_inquiry($id){

        DB::table('price_inquiry')->where('id',$id)->delete();

        return response()->json([
            'success'=>'Record has been deleted successfully!'
        ]);
    }

}
