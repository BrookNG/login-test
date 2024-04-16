<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class IdeaController extends Controller
{
    public function store(){
        request()->validate([
            'idea' => 'required|min:3|max:240',
        ]);
        $idea = Idea::create([
            'content' => request()->get('idea',''),
          ]);
        return redirect()->route('home')->with('success' , "Idea Tweeted Successfully.");
    }

    public function index(){
        $ideas = Idea::orderBy('created_at' , 'DESC')->paginate(5);
        return view('start', [
            'i' => $ideas
        ]);
    }
}
