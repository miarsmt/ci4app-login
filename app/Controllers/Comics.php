<?php

namespace App\Controllers;

use App\Models\ComicsModel;

class Comics extends BaseController
{
    protected $comicsModel;

    public function __construct()
    {
        $this->comicsModel = new ComicsModel();
    }

    public function index()
    {
        // $comics = $this->comicsModel->findAll();

        $data = [
            'title' => 'List Of Comics',
            'comics' => $this->comicsModel->getComics()
        ];


        return view('comics/index', $data);
    }

    public function details($slug)
    {

        $data = [
            'title' => 'Detail Comics',
            'comics' => $this->comicsModel->getComics($slug)
        ];

        return view('comics/detail', $data);
    }
}
