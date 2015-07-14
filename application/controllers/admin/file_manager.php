<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_manager extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'=>'File & Image Manager',
			'selected'=>2,
			'data'=>$this->get_data_file(),
			);
		$list['content']=$this->load->view('admin/file_manager',$data,true);
		$this->load->view('admin/index',$list);
	}
	public function save($value='')
	{
		$this->load->library('upload');
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|xls|doc|docx|xlsx|pdf';
		$config['max_size']	= '5000';
		/*$config['max_width']  = '1024';
		$config['max_height']  = '768';*/
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('file'))
		{
			$error = array('error' => $this->upload->display_errors());

			echo json_encode(array('msg'=>$error));
		}
		else
		{
			$data = array('file' => $this->upload->data());

			echo json_encode(array('success'=>true));
		}
	}
	public function get_data_file($value='')
	{
		$files=glob("uploads/*.*");
		return ($files);
	}
	public function remove($value='')
	{
		$this->load->helper('file');
		@unlink($_POST['filename']);
	}
}