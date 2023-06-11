<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Titikom4'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me | Titikom4'
        ];

        return view('pages/about', $data);
    }
}
