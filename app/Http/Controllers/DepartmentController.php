<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deparments = Department::select("id", "name", "status")->orderByDesc('created_at')->get();
        return Inertia::render('Setting/DepartmentPage', [
            'departments' => $deparments,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'unique:departments'],
        ]);
        Department::create([
            'name' => $request->input("name"),
        ]);

        $this->successResponse("Created successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', Rule::unique('departments')->ignore($id)],
        ]);
        Department::where("id", $id)->first()->update([
            "name" => $request->input("name"),
        ]);
        $this->successResponse("Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Department::where("id", $id)->first()->delete();
        $this->successResponse("Deleted successfully");
    }
}
