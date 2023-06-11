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

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe'      => 'Rumah',
                    'alamat'    => 'Jl. Prana Kp. Babakan Jampang RT 001/RW 018',
                    'kota'       => 'Sukabumi'
                ],
                [
                    'tipe'      => 'Kantor',
                    'alamat'    => 'Jl. abc No. 123',
                    'kota'       => 'Sukabumi'
                ]

            ]
        ];

        return view('pages/contact', $data);
    }
}
