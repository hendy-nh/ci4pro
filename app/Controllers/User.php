<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function view_user()
    {

        $data['user'] = $this->M_user->get()->getResult();
        return view('v_user', $data);
    }
}
