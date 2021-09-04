<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\News as ModelsNews;
use DateTime;

class Front extends BaseController
{
    public function index()
    {
        return view('front/v_wrapper');
    }

    public function view_news()
    {
        // $data['item'] = $this->db->query("select * from tb_galeri")->getResult(); 
        $data['item'] = $this->news->get()->getResult();
        return view('front/v_wrapper', $data);
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
        $data = array(
            'id_news' => $this->news->find($id_news)
        );
        // $news['detail'] = $this->db->("select * from tb_news where id_news = '$id_news'")->getRow();
        // $news['detail'] = $this->db->table('tb_news')->where('id_news', $id_news)->get()->getRowArray();
        // $data['detail'] = $this->news->get($id_news)->getRow();
        // $data['detail'] = $this->news->get($id_news)->getRow();
        return view('front/v_detail', $data);
    }
    public function update_news_1($id_news)
    {
        $pen = $this->request->getPost('penulis');
        $images = $this->request->getFile('image');

        $content = $this->request->getPost('content');
        $name = $images->getRandomName();
        $path = "./image/";

        $moved = $images->move($path, $name);
        // if ($image->getError() == 4) {
        //     $data = array(
        //         'id_news' => $id_news,
        //         'penulis' => $pen,
        //         'content_news' => $content

        //     );
        //     $this->news->update($data);
        // } else {
        //     $data = array(
        //         'id_news' => $id_news,
        //         'penulis' => $pen,
        //         'content_news' => $content,
        //         'image' => $name
        //     );
        //     $image->move($path, $name);
        //     $this->news->update($data);
        //     return redirect()->to('news');
        // }


        if ($moved) {
            $data = array(
                'penulis' => $pen,
                'content_news' => $content,
                'image' => $name
            );
        } else {

            $data = array(
                'penulis' => $pen,
                'content_news' => $content,
                'image' => $images

            );
        }
        $this->news->update($id_news, $data);
        return redirect()->to('news');
    }
    public function update_news($id_news)
    {
        $pen = $this->request->getPost('penulis');
        $images = $this->request->getFile('image');
        $content = $this->request->getPost('content');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == false) {
            $data = array(
                'penulis' => $pen,
                'content_news' => $content,
                'tgl_news' => date('Y-m-d H:i:s')
            );
        } else {
            $path = "./image/";
            $name = $images->getRandomName();
            unlink($path . $name);
            $upload = $this->request->getFile('file_upload');
            $upload->move($path . './image/');
            $data = array(
                'penulis' => $pen,
                'content_news' => $content,
                'image' => $upload->getName(),
                'tgl_news' => date('Y-m-d H:i:s')

            );
        }
        $this->news->update($id_news, $data);
        return redirect()->to('news');
    }

    public function prosesUpdatenews($id)
    {
        $judul = $this->request->getPost('penulis');
        $cover = $this->request->getFile('image');
        $isi = $this->request->getPost('content');
        $slug = $this->request->getPost('slug');

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);


        if ($validation == FALSE) {
            $data = [
                'judul_berita' => $judul,
                'isi' => $isi,
                'slug' => $slug
            ];
        } else {

            $path = "./image/";
            $name = $cover->getRandomName();
            @unlink($path . $name);
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . './image/');
            $data = [
                'judul_berita' => $judul,
                'isi' => $isi,
                'slug' => $slug,
                'cover_berita' => $upload->getName()
            ];
        }
    }
}
