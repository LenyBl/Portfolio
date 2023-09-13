<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function view()
    {
        echo view('templates/header.php');
        echo view('pages/contact.php');
        echo view('templates/footer.php');
    }
}
