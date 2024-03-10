<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DesignationController extends Controller
{
    public function index()
    {
        return Inertia::render("Setting/DesignationPage", [

        ]);
    }
}
