<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geospasial extends CI_Controller {
	public function index()
	{
		$data = array(
			'title'=>'Geospasial Page',
			'app' => 'geospasial'
		);
		$this->load->view('main', $data);
	}
}