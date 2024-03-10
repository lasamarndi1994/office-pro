<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DepartmentController extends Controller
{
    public function index()
    {
        return Inertia::render('Setting/DepartmentPage', [

        ]);
    }
}
