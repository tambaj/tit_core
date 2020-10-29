<?php 

/**
 * 
 */
class Index extends Controller{
	
	function __construct(){
		parent::__construct();
		Auth::handleLogin();
		
		// echo "We are in Index";
	}
	function index(){
		// echo Hash::create('sha256', 'ganza', HASH_PASSWORD_KEY);
		// echo "INSIDE INDEX INDEX ";
		$this->view->title = 'Home';
		$this->view->render('header');
		$this->view->render('index/index');
		$this->view->render('footer');
	}
}