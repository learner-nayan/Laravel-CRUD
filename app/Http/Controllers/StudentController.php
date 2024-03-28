<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        $name = $request->name;
        $roll_no = $request->roll_no;
        $gpa = $request->gpa;
        $status = $request->status=='on'?1:0;

        $student = new Student();
        $student->name = $name;
        $student->roll_no = $roll_no;
        $student->gpa = $gpa;
        $student->status = $status;

        $student->save();
        return redirect()->back()->with('message', 'Record creates with name '.$name);
    }
}
