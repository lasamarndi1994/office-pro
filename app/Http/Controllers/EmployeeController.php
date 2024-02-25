<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class EmployeeController extends Controller
{
    public function index()
    {
        return Inertia::render('Employee/AllEmployee', [

        ]);
    }
}
