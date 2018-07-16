<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends MY_Controller {

	const BODY_CLASS = 'thanks';

	/**
	 * ORIGINAL TEMPLATE: http://175.139.178.22/website_cgv/payment.php
	 * Refer EMP Controller: 
	 * 1. ticketing/payment/payment_success
	 * 2. ticketing/payment/payment_failed
	 */
	public function index()
	{
        $content = array();
		$content['body_class'] = self::BODY_CLASS;

		$this->render($content, 'purchase/success');
	}

	
}
