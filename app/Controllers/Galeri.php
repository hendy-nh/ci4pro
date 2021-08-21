<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Galeri extends BaseController
{
    public function view_galeri()
    {
        // $data['item'] = $this->db->query("select * from tb_galeri")->getResult(); 
        $data['item'] = $this->galeri_model->get()->getResult();
        return view('v_galeri', $data);
    }
}
