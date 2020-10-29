<?php 

class Offer extends Controller{
	
	public function __construct(){
		
		parent::__construct();
		Auth::handleLogin();
	}
	public function index(){
		$this->view->title = 'Offers';
		$this->view->render('header');
		$this->view->offerList = $this->model->offerList();
		$this->view->render('offer/index');
		$this->view->render('footer');
	}
	public function singleOffer($offerid){
		$this->view->title = 'Single Offer';
		$this->view->render('header');
		$this->view->singleOffer = $this->model->singleOffer($offerid);
		$this->view->singleSubscription = $this->model->singleSubscription($offerid);
		$this->view->singlePay = $this->model->singlePay($offerid);
		$this->view->countSubscription = $this->model->countSubscription($offerid);
		$this->view->countPaying = $this->model->countPaying($offerid);
		$this->view->sumPaying = $this->model->sumPaying($offerid);
		$this->view->render('offer/offerdash');
		$this->view->render('footer');
	}
	public function create(){
		$data = array(
			'date_created' => date('Y-m-d:i:s'),
		    'offer_name' => $_POST['offer_name'],
		    'min_units' => $_POST['min_units'],
		    'max_units' => $_POST['max_units'],
		    'offer_unit_price' => $_POST['offer_unit_price'],
		    'offer_target' => $_POST['offer_target'],
		    'units_offered' => $_POST['units_offered'],
		    'subscription_start_date' => $_POST['subscription_start_date'],
	        'units_subscribed' => $_POST['units_subscribed'],
		    'amount_subscribed' => $_POST['amount_subscribed'],
		    'subscription_end_date' => $_POST['subscription_end_date'],
		    'offer_status' => $_POST['offer_status'],
		    'last_updated' => date('Y-m-d:i:s')
		);
		$this->model->create($data);
		header('location:' . URL . 'offer');
	}
	public function formcreate(){
		$this->view->title = 'Create an Offer';
		$this->view->render('header');
		$this->view->render('offer/formcreate');
		$this->view->render('footer');
	}
	public function edit($offerid){
		$this->view->offer = $this->model->offerSingleList($offerid);
		$this->view->title = 'Edit Offer';
		$this->view->render('header');
		$this->view->render('offer/edit');
		$this->view->render('footer');
		
	}
	public function editSave($offerid){

		$data = array();
		$data['offer_id'] = $offerid;
		$data['offer_name'] = $_POST['offer_name'];
		$data['min_units'] = $_POST['min_units'];
		$data['max_units'] = $_POST['max_units'];
		$data['offer_unit_price'] = $_POST['offer_unit_price'];
		$data['offer_target'] = $_POST['offer_target'];
		$data['units_offered'] = $_POST['units_offered'];
		$data['subscription_start_date'] = $_POST['subscription_start_date'];
		$data['units_subscribed'] = $_POST['units_subscribed'];
		$data['amount_subscribed'] = $_POST['amount_subscribed'];
		$data['subscription_end_date'] = $_POST['subscription_end_date'];
		$data['offer_status'] = $_POST['offer_status'];


		$this->model->editSave($data);
		header('location:' . URL . 'offer');
	}
	public function delete($id){

		$this->model->delete($id);
		header('location:' . URL . 'offer');
	}

}