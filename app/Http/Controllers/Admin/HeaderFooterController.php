<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class HeaderFooterController extends Controller
{
    public function footer_description(){

        $data['footer_description']=DB::table('footer_description')->get();

        return view('admin.footer_description',$data);
    }

    public function add_footer_description_data($id){

        
        $footer_description=DB::table('footer_description')->where('id',$id)->get();

        $data['title']=$footer_description[0]->title;

        $data['description']=$footer_description[0]->description;

        $data['id']=$footer_description[0]->id;
              

        return view('admin.add_footer_description_data',$data);
    }

    public function store_add_footer_description_data(Request $request,$id){

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('footer_description')->where('id',$id)->update(['title'=>$title,'description'=>$description,]);

            return redirect('/admin/footer_description')->with('error','data updated successfully!!!');
        
    }






    public function footer_address(){

        $data['footer_address']=DB::table('footer_address')->get();

        return view('admin.footer_address',$data);
    }

    public function add_footer_address_data($id){

        
        $footer_address=DB::table('footer_address')->where('id',$id)->get();

        $data['title']=$footer_address[0]->title;

        $data['address']=$footer_address[0]->address;

        $data['id']=$footer_address[0]->id;
              

        return view('admin.add_footer_address_data',$data);
    }

    public function store_add_footer_address_data(Request $request,$id){

            $validated=$request->validate([
                'title'=>'required',
                'address'=>'required',
            ]);

            $address=$request->input('address');

            $title=$request->input('title');
           
            DB::table('footer_address')->where('id',$id)->update(['title'=>$title,'address'=>$address,]);

            return redirect('/admin/footer_address')->with('error','data updated successfully!!!');
        
    }
}
