<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class HomePage extends Controller
{
    public function home()
    {
        $emp = Employee::all();
        return view('views.home', compact('emp'));
    }

    public function worker($id)
    {
        $worker = Employee::findOrFail($id);
        return view('views.worker', compact('worker'));
    }
}
