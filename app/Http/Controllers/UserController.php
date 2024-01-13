<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = auth()->user(); 
        return view('profile.profile', compact('user')); 
    }

    public function edit()
    {
        $user = auth()->user();
        return view('profile.edit', compact('user'));
    }
    
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id); 

        $data = $request->all();

        $user->update($data);

        return redirect()->route('profile', $id);
    }

    public function mybooking()
    {
        return view('profile.my bookings');
    }

    public function bookTable(Request $request)
    {
        $userId = Auth::id();

        $data = $request->all();

        // dd($userId, $data);

        $booking = new Booking();
        $booking->name = $data['name'];
        $booking->phone = $data['phone'];
        $booking->date = $data['date'];
        $booking->time = $data['time'];
        $booking->total_person = $data['total_person'];
        $booking->status = 0; 
        $booking->user_id = $userId; 
        $booking->save();

        return redirect('/mybooking');
    }

    public function myBookings()
    {
        $user = Auth::user();
        $bookings = $user->bookings;

        return view('profile.my bookings', compact('bookings'));
    }

}
