<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seat extends MY_Controller {

	const BODY_CLASS = 'seat'; 

	/**
	 * ORIGINAL TEMPLATE: http://175.139.178.22/website_cgv/seat.php
	 * Refer EMP Controller: 
	 * 1. ticketing/seatplan/:show_id
	 */
	public function index()
	{
        $content = array();
		$content['body_class'] = self::BODY_CLASS;
		$content['partials'] = array(
			'seat/partials/partial_view'
		);

		/* Add custom JS file */
		/* JS files located on assets/js/cgv */
		$content['js'] = array(
			'hammer.min.js',
			'cgv/seat/seat.js'
		);

		$this->render($content, 'seat/index');
	}

	
}
