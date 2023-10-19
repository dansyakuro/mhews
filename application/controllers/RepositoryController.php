

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RepositoryController extends CI_Controller {
	public function index()
	{
		$data = array(
			'title'=>'Repository',
			'app' => 'repository/index'
		);
		$this->load->view('main', $data);
	}
}