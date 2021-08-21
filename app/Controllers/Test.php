<?php

namespace App\Controllers;


class Test extends BaseController
{
    public function view_home()
    {
        return view('home');
    }
    public function view_user()
    {
        return view('home');
    }
    public function proses_login()
    {
        echo "Proses Login";
    }
}
