<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function marketing()
    {
        return view('marketing.master');
    }

}
