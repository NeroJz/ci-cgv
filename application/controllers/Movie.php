<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends MY_Controller {

	const BODY_CLASS = 'movie'; 

	/**
	 * ORIGINAL TEMPLATE: http://175.139.178.22/website_cgv/movie.php
	 * Refer EMP Controller: 
	 * 1. ticketing/movie_detail (showing)
	 */
	public function index()
	{
		$content = array();
		$content['body_class'] = self::BODY_CLASS;
		$this->render($content, 'movie/index');
	}

	/**
	 * ORIGINAL TEMPLATE: http://localhost/cgv/more-movie.php
	 * Refer EMP Controller: 
	 * 1. ticketing/by_movie (showing)
	 * 2. ticketing/upcoming (upcoming show)
	 */
	public function more(){
		$content = array();
		$content['body_class'] = self::BODY_CLASS;
		$content['js'] = array(
			'cgv/movie/more.js'
		);

		$this->render($content, 'movie/more');

	}
}
