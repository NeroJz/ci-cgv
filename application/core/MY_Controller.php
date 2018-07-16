<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function render($content, $template){

		$view['content'] = $this->load->view($template, $content, TRUE);

		if(isset($content['js']) && sizeof($content['js']) > 0){
			$view['js'] = $content['js'];
        }
        
        if(isset($content['partials']) && sizeof($content['partials']) > 0){
			$view['partials'] = $content['partials'];
        }

		$this->load->view('main', $view);

	}

}