<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Employee;

class EmployeeController extends Controller
{
    public function create() {
        return view('employees.create');
    }

    public function add(Request $request) {
        $name = $request->name;
        $salary = $request->salary;
        $department = $request->department;

        $employee = new Employee();
        $employee->name = $name;
        $employee->salary = $salary;
        $employee->department = $department;

        $employee->save();
        return redirect()->back()->with('message', 'Employee record saved.');
    }
}
