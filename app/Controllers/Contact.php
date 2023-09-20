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

    public function send()
    {

        $validation = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email',
            'message' => 'required'
        ]);

        if (!$validation) {

            echo view('templates/header.php');
            echo view('templates/footer.php');
            return view('pages/contact', ['validation' => $this->validator]);


        } else {
            if ($this->isOnline()) {

                $to = 'blee.leny@gmail.com';
                $message = $this->request->getVar('message');

                $email = \Config\Services::email();

                $email->setTo($to);
                $email->setForm($this->request->getVar('email'), $this->getVar('name'));
                $email->setMessage($message);

                if ($email->send()) {

                    return redirect()->to('/contact')->with('succès', 'Email envoyé avec succès !');

                } else {

                    return redirect()->to('/contact')->with('error', 'Failed')->withInput();
                }


            } else {
                return redirect()->to('/contact')->with('error', 'Check your internet connection')->withInput();
            }
        }
    }

    public function isOnline($site = "https://youtube.com")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}