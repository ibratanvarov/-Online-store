<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        return view('basket');
    }

    public function basketplace()
    {
        return view('order');
    }
}
