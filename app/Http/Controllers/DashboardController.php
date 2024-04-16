<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Zaki Le Zaki
    public function index(){
    return view('start');
    }
}
