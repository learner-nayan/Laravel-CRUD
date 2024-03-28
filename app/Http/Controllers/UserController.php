<?php

namespace App\Http\Controllers;

class UserController extends Controller{
    public function index() {

        $text = "Hello Sathiharu";

        $index_records = [
            [
                "Raj Mangal",
                "Rajesh",
                "Raju",
                "Rajendra",
                "Rajaram"
            ],
            [
                "Baitha",
                "Bhattarai",
                "Dahal",
                "Dhamala",
                "Hamala"
            ]
            ];

        return view("users.index",compact('index_records','text'));
    }
}