

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengetahuanController extends CI_Controller {
	public function tampilkan_pengetahuan()
	{
		$data = array(
			'title'=>'Landing Page',
			'app' => 'pengetahuan'
		);
		$this->load->view('main', $data);
	}
}