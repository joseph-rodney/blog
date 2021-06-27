<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view("welcome");
    }

    public function getAbout(){
        $first = "Joseph";
        $last = "Kaneene";
        $full = $first . " " . $last;
        $email = "blog@gmail.com";
        return view("about")->with("fullname", $full)->with("email", $email);
    }

    public function getContact(){
        return view("contact");
    }
}
