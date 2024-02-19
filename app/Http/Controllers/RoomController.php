<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    function index(){
        $blogs=Room::orderByDesc('id')->get();
        return view('y_allroom',compact('blogs'));
    }
}
