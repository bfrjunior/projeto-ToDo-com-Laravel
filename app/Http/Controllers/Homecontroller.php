<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class Homecontroller extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::all()->take(4);

        return view('home', ['tasks' => $tasks]);
    }
}
