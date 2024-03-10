<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AttendanceController extends Controller
{

    public function onlineAttendance()
    {
        return Inertia::render('Attendance/OnlineAttendance', [

        ]);
    }

    public function attendanceRegularization()
    {
        return Inertia::render('Attendance/AttendanceRegularization', [

        ]);
    }

    public function timeSheetEntry()
    {
        return Inertia::render('Attendance/TimeSheetEntry', [

        ]);
    }

    public function attendanceReport()
    {
        return Inertia::render('Attendance/Reports', [

        ]);
    }
}
