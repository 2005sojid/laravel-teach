<?php

namespace App\Http\Controllers;

use App\Models\Application;

class MainController extends Controller
{

    public function index()
    {
        return redirect('dashboard');
    }


    public function dashboard()
    {
        return view('dashboard')->with([
            'applications' => Application::latest()->paginate(2),
        ]);
    }
}
