<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class LandingController extends Controller
{
    public function index(){
$datas=Item::orderBy('id','DESC');
return view ('landing/show')->with('datas', $datas);
    }
}
