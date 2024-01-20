<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function dashboard()
    {
        return view('guest.dashboard');
    }
}
