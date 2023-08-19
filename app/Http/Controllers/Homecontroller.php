<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index(Request $request)
    {
        if ($request->date) {
            $filteredDate = $request->date;
        } else {
            $filteredDate = date('Y-m-d');
        }

        $data['date_as_string'] = '23 de Out';
        $data['date_prev_button'] = '2022-11-01';
        $data['date_next_button'] = '2023-08-19';

        $data['tasks'] = Task::whereDate('due_date', $filteredDate)->get();

        $data['authUser'] = Auth::user();

        $data['tasks_count'] = $data['tasks']->count();
        $data['undone_tasks_count'] = $data['tasks']->where('is_done', false)->count();

        return view('home', $data);
    }
}
