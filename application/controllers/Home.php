<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	const BODY_CLASS = 'home'; 

	/**
	 * ORIGINAL TEMPLATE: http://175.139.178.22/website_cgv/home.php
	 * Refer EMP FUNC: 
	 * 1. ticketing/by_movie (showing)
	 * 2. ticketing/upcoming (upcoming show)
	 */
	public function index()
	{
		$content = array();
		$content['body_class'] = self::BODY_CLASS;

		$content['sideBar'] = FALSE;
		$content['special_program'] = FALSE;
		$content['ads_content'] = FALSE;

		/* Add custom JS file */
		/* JS files located on assets/js/cgv */
		$content['js'] = array(
			'cgv/home/home.js'
		);

		$this->render($content, 'home/index');
		
	}

	
}
