<?php

namespace App\Http\Controllers;

use App\Models\Cant_Miss_Event;
use App\Models\Event;
use App\Models\Featured_content;
use App\Models\Top_Slider;
use App\Models\You_tube;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    //
    public function index()
    {
       
        return view('app');
    }
}
