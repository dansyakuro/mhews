

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengetahuanController extends CI_Controller {
	public function index()
	{
		$data = array(
			'title'=>'Pengetahuan',
			'app' => 'pengetahuan/index'
		);
		$this->load->view('main', $data);
	}
}