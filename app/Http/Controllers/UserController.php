<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class UserController extends Controller
{
    public function profile()
    {
        return Inertia::render('User/ProfilePage', [
        ]);
    }

    public function education()
    {
        return Inertia::render('User/EduacationPage', [
        ]);
    }
}
