<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends MY_Controller {

	const BODY_CLASS = 'payment'; 

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
		$content['js'] = array(
			'cgv/payment/payment.js'
		);

		$this->render($content, 'payment/index');
	}

	
}
