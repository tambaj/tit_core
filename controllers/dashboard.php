<?php 

class Dashboard extends Controller{
	
	function __construct(){
		
		parent::__construct();
		Auth::handleLogin();
		$this->view->js = array('dashboard/js/default.js');
	}
	function index(){
		$this->view->title = 'Dashboard';
		$this->view->render('header');
		$this->view->countMember = $this->model->countMember();
		$this->view->countOffer = $this->model->countOffer();
		$this->view->countPayment = $this->model->countPayment();
		$this->view->render('dashboard/index');
		$this->view->render('footer');
	}

	function logout(){
		session_destroy();
		header('location: '. URL .'login');
		exit();
	}
}