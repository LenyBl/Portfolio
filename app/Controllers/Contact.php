<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function view()
    {
        return view('pages/contact.php', [
            'title' => 'Contact'
        ]);

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
            return view('pages/contact', ['validation' => $this->validator]);


        } else {
            if ($this->isOnline()) {

                $to = 'portfolio.bleeleny@gmail.com';
                $subject = 'Portfolio';
                $message = $this->request->getVar('message');

                $email = \Config\Services::email();

                $from = $this->request->getVar('email');
                $fromName = $this->request->getVar('name');


                $email->setTo($to);
                $email->setSubject($subject);
                $email->setMessage($message);
                $email->setFrom($from, $fromName);

                if ($email->send()) {

                    return redirect()->to('/')->with('succès', 'Email envoyé avec succès !');


                } else {

                    // $errors = $email->printDebugger(['headers']);
                    // echo $errors;
                    return redirect()->to('/contact')->with('error', 'Failed')->withInput();


                }

                // try {
                //     $email->send();
                //     echo 'ok';
                // } catch (\Exception $e){

                //     echo 'Erreur : ' . $e->getMessage();

                // }

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