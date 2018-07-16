<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends CI_Controller {

	const BODY_CLASS = 'movie'; 

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$content = array();
		$content['body_class'] = self::BODY_CLASS;

		$view['content'] = $this->load->view('movie/index', $content, TRUE);

		$this->load->view('main', $view);
	}

	public function more(){
		$content = array();
		$content['body_class'] = self::BODY_CLASS;

		$view['content'] = $this->load->view('movie/more', $content, TRUE);
		$view['js'] = array(
			'cgv/movie/more.js'
		);

		$this->load->view('main', $view);

	}

	public function test(){
		echo "testing";
	}
}
