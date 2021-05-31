<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function getIndex()
    {
        return view(
            'welcome'
        );
    }
    public function getAbout()
    {
        $first = 'Rodney';
        $last = 'Kaneene';
        $fullname = $first . " " . $last;
        return view(
            'about'
        )->with("fullname", $fullname);
    }
    public function getContact()
    {
        return view(
            'contact'
        );
    }
}