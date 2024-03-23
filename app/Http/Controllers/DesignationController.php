<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DesignationController extends Controller
{
    public function index()
    {
        return Inertia::render("Setting/DesignationPage", [

        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_name' => 'required|string|unique:departments,name',
        ]);
        Department::create([
            'name' => $request->input("department_name"),
        ]);
    }
}
