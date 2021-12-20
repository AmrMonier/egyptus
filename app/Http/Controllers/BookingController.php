<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class BookingController extends Controller
{
    public function trips()
    {
        return view('booking.trips', ['trips' =>  Trip::paginate(10)]);
    }
}
