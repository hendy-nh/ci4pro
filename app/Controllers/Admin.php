<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/v_wrapper');
    }
    public function view_news()
    {
        $data['item'] = $this->news->get()->getResult();
        return view('admin/v_news_1', $data);
    }
    public function news_add()
    {
        return view('admin/v_news_add');
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
            return redirect()->to('admin_news');
        }
    }
    public function delete_news($id_news)
    {

        $this->news->delete($id_news);
        return redirect()->to('admin_news');
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
        return view('admin/v_admin_edit_news', $data);
    }
    public function update_news($id_news)
    {
        $pen = $this->request->getPost('penulis');
        $images = $this->request->getFile('image');
        $content = $this->request->getPost('content');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        $name = $images->getRandomName();


        $path = "./image/";

        $moved = $images->move($path, $name);
        if ($moved) {
            $data = array(
                'penulis' => $pen,
                'content_news' => $content,
                'tgl_news' => date('Y-m-d H:i:s'),
                'image' => $name
            );
        } else {

            $data = array(
                'penulis' => $pen,
                'content_news' => $content,
                'tgl_news' => date('Y-m-d H:i:s')

            );
        }
        $this->news->update($id_news, $data);
        return redirect()->to('admin_news');
    }
}
