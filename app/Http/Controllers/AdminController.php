<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    function index (){
        $blogs=Room::get();
        return view ('/admin/layout-static', compact('blogs'));
    }

    function delete ($id) {
        DB::table('rooms')->where('id',$id)->delete();
        return redirect('/admin/layout-static');
    }

    function create (Request $request){
        $path =$request->file('formFile')->store('public/img');
        
        $data=[
            'img'=>$path,
            'type'=>$request->type,
            'room_number'=>$request->room_number,
            'support'=>$request->support,
            'air'=>$request->air,
            'space'=>$request->space,
            'price'=>$request->price,
            'max_amount'=>'1,2',
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s"),
        ];
        // dd($data);
        DB::table('rooms')->insert($data);
        return redirect ('/admin/layout-static');
    }

    function findone($id){
        $room = DB::table('rooms')->where('id',$id)->first();
        // dd($blog);
        return view('/admin/layout-edit-static', compact('room'));
    }

    function update (Request $request,$id){
        $path =$request->file('formFile')->store('public/img');
        
        $data=[
            'img'=>$path,
            'type'=>$request->type,
            'room_number'=>$request->room_number,
            'support'=>$request->support,
            'air'=>$request->air,
            'space'=>$request->space,
            'price'=>$request->price,
            'max_amount'=>'12',
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s"),
        ];
        // dd($data);
        DB::table('rooms')->where('id',$id)->update($data);
        return redirect ('/admin/layout-static');
    }
}