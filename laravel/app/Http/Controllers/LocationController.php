<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Location;

class LocationController extends Controller
{
    public function index() {

        $locations = Location::all();

        return view('pages.location', compact('locations'));
    }
}
