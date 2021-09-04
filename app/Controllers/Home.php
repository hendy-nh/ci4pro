<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = array(
			'data_news' => $this->news->get()->getResult(),
		);
		return view('front/v_wrapper', $data);
	}
	public function detail_news($id_news)
	{
		$data = array(
			'id_news' => $this->news->find($id_news),

		);
		return view('front/v_detail_news', $data);
	}
}
