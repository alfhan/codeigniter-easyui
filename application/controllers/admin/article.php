<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'=>'Article Management',
			);
		$list['content']=$this->load->view('admin/article',$data,true);
		$this->load->view('admin/index',$list);
	}

}