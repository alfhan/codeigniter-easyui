<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'=>'Profile Application',
			'selected'=>2,
			);
		$list['content']=$this->load->view('admin/article',$data,true);
		$this->load->view('admin/index',$list);
	}

}