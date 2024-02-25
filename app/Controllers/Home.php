<?php

namespace App\Controllers;

use App\Models\FluxRssModel;

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

    public function veille()
    {

        $fluxrss = new FluxRssModel();
        $flux = $fluxrss->read(["https://www.kdnuggets.com/feed"]);

        return view('pages/veille_technologique.php', [
            'title' => 'Veille Technologique',
            'fluxrss' => $flux
        ]);
    }

    public function e4()
    {

        return view('pages/E4.html');
    }

    public function btsSlam()
    {
        return view('pages/bts_slam.php', [
            'title' => 'BTS SLAM'
        ]);
    }

    public function btsSisr()
    {
        return view('pages/bts_sisr.php', [
            'title' => 'BTS SISR'
        ]);
    }
}
