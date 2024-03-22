<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class OnboardController extends Controller
{
    public function index()
    {
        return Inertia::render("Onboard/OnboardPage", []);
    }
}
