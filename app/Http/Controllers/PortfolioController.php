<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller{
    public function index() {

        $header = "Nayan Khanal";
        $logo = "Nayan Khanal";
        $welcome_text = "Welcome to the world as seen through the lens of Nayan Khanal, an acclaimed backend developer specializing in both tech and society, Nayan possesses an innate ability to encapsulate the essence of tech's beautiful works in his portfolio.";
        $portfolio_text = "This online portfolio is an exploration into Kōsuke's unique photographic perspective. A journey into the spaces we inhabit, the people we encounter, and the collective stories we share. We invite you to browse through the collection, feel the passion behind each photograph, and embark on a visual journey like no other.
        ";

        return view('portfolio.index', compact('header', 'logo', 'welcome_text', 'portfolio_text'));
    }
}