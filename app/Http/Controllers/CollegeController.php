<?php
namespace App\Http\Controllers;

use App\Models\College;

class CollegeController extends Controller{
    public function index() {

        $raju = "Raj Mangal Baitha is our Class Representative. He is the smartest student of our class.";

        return view('colleges.index',compact('raju'));
    }

    public function create(){
        $college = new College();
        $college->name = "Kathmandu College of Technology";
        $college->email = "kct@edu.np";
        $college->address = "Lokanthali, Bhaktapur";
        $college->phone = "01383445";
        $college->open_hours = "6 AM";
        $college->close_hours = "2 PM";
        // dd($college);

        $college->save();
    }

}