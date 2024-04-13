<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){

        $users = [
            ['name' => 'Zaki',
              'age' => 20
            ],

            [
              'name' => 'athmane',
              'age' => 21
            ]
        ];



        return view('start',['users' => $users]);
    }
}
