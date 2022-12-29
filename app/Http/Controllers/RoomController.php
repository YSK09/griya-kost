<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function dashboard(){


    $data = Room::with('customer')->get();
    $status = Room::with('customer')->get('bookingstatus') ;
    // dd($status);
    foreach ($status as $bookingstatus) {
        if ($bookingstatus->bookingstatus != 1) {
            return view('modals.order');
        }

    }

    return view('layout.dashboard',compact('data'));

    }

    public function rooms(){

        $rooms = Room::with('customer')->get();

        return view('layout.rooms',compact('rooms'));
    }



}