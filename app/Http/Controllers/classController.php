<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classRoom;

class classController extends Controller
{
    public function index()
    {
        $class = classRoom::all();
        return view('classroom', ['classList' => $class]);
    }
}
