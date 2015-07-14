<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category_article extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/category_article',$data);
	}
	public function loadData($value='')
	{
		$this->load->model('article_category_model');
		$rs = $this->article_category_model->getAll();
		echo json_encode($rs);
	}
}