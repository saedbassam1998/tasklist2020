<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index()
    {
        $tasks=DB::table('tasks')->get();
        return view('welcome',compact('tasks'));
    }
}
