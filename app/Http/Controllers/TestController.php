<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $countries = Country::with('cities')->get();
        return view('index',compact('countries'));
    }
}
