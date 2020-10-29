<?php 

class Payment extends Controller{
	
	public function __construct(){
		
		parent::__construct();
		Auth::handleLogin();
	}
	public function index(){
		$this->view->title = 'Payment';
		$this->view->render('header');
		$this->view->paymentList = $this->model->paymentList();
		$this->view->render('payment/index');
		$this->view->render('footer');
	}

	public function singlePayment($transactionid){
		$this->view->title = 'Sinle Payment';
		$this->view->render('header');
		$this->view->singlePayment = $this->model->singlePayment($transactionid);
		$this->view->render('payment/singlePayment');
		$this->view->render('footer');
	}
}