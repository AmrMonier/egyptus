<?php

namespace App\Http\Controllers;

use App\Mail\NotifyBooking;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function trips()
    {
        return view('booking.trips', ['trips' =>  Trip::where('available_seats', '<>', 0)->orderBy('available_seats', 'asc')->paginate(10)]);
    }

    public function bookTrip(Trip $trip)
    {
        $order = Order::create([
            'client_id' => request()->user()->id,
            'trip_id' => $trip->id,
            'seats' => request()->seats,
            'price' => request()->seats * $trip->price,
        ]);

        $trip->update(['available_seats' => $trip->available_seats - request()->seats]);
        session()->flash('booked', 'Trip Booked successfully !');
        Mail::to('a.monier2107@gmail.com')
        ->send(new NotifyBooking([
            'trip' => $trip,
            'client' => request()->user(),
            'order' => $order
        ]));
        return redirect('/trips');
    }
}
