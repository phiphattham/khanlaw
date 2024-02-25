<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class RoomController extends Controller
{
    function index()
    {
        $blogs = Room::orderByDesc('id')->get();
        return view('y_allroom', compact('blogs'));
    }

    function room_detail($id)
    {
        $room_detail = Room::get()->where('id', $id)->first();
        // dd($room_detail);
        return view('y_view_dt', compact('room_detail'));
    }

    //booking
    function booking(Request $request, $id)
    {
        $userId = Auth::id();

        $data = [
            'user_id' => $userId,
            'room_id' => $id,
            'room_number' => $request->room_number,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'amount' => $request->amount,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ];

        $new_booking = DB::table('bookings')->insertGetId($data);
        // dd($new_booking);

        //เอาอันที่สร้างใหม่ส่งไปหน้าถัดไป
        return redirect('again_dt/' . $new_booking);
    }

    function again_booking()
    {
        $booking_id = Route::current()->parameter('booking_id');
        $booking_data = DB::table('bookings')->where('id', $booking_id)->first();
        $room_data = DB::table('rooms')->where('id', $booking_data->room_id)->first();

        // dd($room_data);
        return view('again_dt', compact('booking_data', 'room_data'));
    }

    function check (Request $request, $id){
        

        
        $data = [
            'booking_id',
            'b_fname' => $request->b_fname, 
            'b_lname' => $request->b_lname,
            'b_tel' => $request->b_tel,
            'b_email' => $request->b_email,
        ];

        // dd($data);
        DB::table('guest_information')->insert($data);
        return redirect();
    }

}
