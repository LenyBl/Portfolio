<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/profil.php', [
            'title' => 'Profil'
        ]);

    }

    public function projets()
    {
        return view('pages/projets.php', [
            'title' => 'Projets'
        ]);
    }
}
