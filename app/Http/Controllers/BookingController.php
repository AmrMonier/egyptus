<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Trip;


class BookingController extends Controller
{
    public function trips()
    {        
        return view('booking.trips', ['trips' =>  Trip::where('available_seats', '<>', 0)->orderBy('available_seats', 'asc')->paginate(10)]);
    }
    public function bookTrip(Trip $trip)
    {
        Order::create([
            'client_id' => request()->user()->id,
            'trip_id' => $trip->id,
            'seats' => request()->seats,
            'price' => request()->seats * $trip->price,
        ]);

        $trip->update(['available_seats' => $trip->available_seats - request()->seats]);
        session()->flash('booked', 'Trip Booked successfully !');
        return redirect('/trips');
    }
}
