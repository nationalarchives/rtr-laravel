<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index()
    {
        $department = Department::first();
        return view('departments.show', compact('department'));
    }

    public function show(Department $department)
    {
        $department->load('transfers');
        return view('departments.show', compact('department'));
    }

    public function select_department(Request $request)
    {
        $department = $request['department'];
        return redirect()->route('departments.show', ['department' => $department]);
    }
}
