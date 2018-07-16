<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends MY_Controller {

	const BODY_CLASS = 'payment'; 

	/**
	 * ORIGINAL TEMPLATE: http://175.139.178.22/website_cgv/payment.php
	 * Refer EMP Controller: 
	 * 1. ticketing/payment/:show_id
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
