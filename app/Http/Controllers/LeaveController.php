<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class LeaveController extends Controller
{
    public function applyLeave()
    {
        return Inertia::render('Leave/ApplyLeave', [

        ]);
    }
    public function leaveApplication()
    {
        return Inertia::render('Leave/LeaveApplication', [

        ]);
    }

    public function leaveBalanceReport()
    {
        return Inertia::render('Leave/LeaveApplicationReport', [

        ]);
    }

}
