<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\News as ModelsNews;

class News extends BaseController
{
    public function view_news()
    {
        // $data['item'] = $this->db->query("select * from tb_galeri")->getResult(); 
        $data['item'] = $this->news->get()->getResult();
        return view('v_news', $data);
    }
    public function insert()
    {
        // $data['item'] = $this->db->query("select * from tb_galeri")->getResult(); 

        return view('v_insert_news');
    }
    public function insert_news()
    {
        //proses
        return view('v_insert_news');
    }
    public function insert_news_data_1()
    {
        //proses
        $data = array(
            'penulis' => $this->request->getPost('penulis'),
            // 'tgl_news' => $this->request->getPost('tanggal'),
            'content_news' => $this->request->getPost('content'),
            'image' => $this->request->getPost('image')
        );
        $this->news->insert($data);
        return redirect()->to('news');
    }
    public function insert_news_data()
    {
        //proses
        $pen = $this->request->getPost('penulis');
        $image = $this->request->getFile('image');
        $content = $this->request->getPost('content');


        $name = $image->getRandomName();





        $path = "./image/";

        $moved = $image->move($path, $name);
        if ($moved) {
            $data = array(
                'penulis' => $pen,
                'content_news' => $content,
                'image' => $name
            );

            $this->news->insert($data);
            return redirect()->to('news');
        }
    }
    public function delete_news($id_news)
    {

        $this->news->delete($id_news);
        return redirect()->to('news');
    }
    public function detail_news($id_news)
    {

        // $news['detail'] = $this->db->("select * from tb_news where id_news = '$id_news'")->getRow();
        $news['detail'] = $this->db->table('tb_news')->where('id_news', $id_news)->get()->getRowArray();
        // $data['detail'] = $this->news->get($id_news)->getRow();
        // $data['detail'] = $this->news->get($id_news)->getRow();
        return view('v_edit_news', $news);
    }
}
