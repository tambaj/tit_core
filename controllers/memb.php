<?php 

class Memb extends Controller{
	
	public function __construct(){
		
		parent::__construct();
		Auth::handleLogin();
	}
	public function index(){
		$this->view->title = 'Members';
		$this->view->render('header');
		$this->view->memberList = $this->model->memberList();
		$this->view->render('memb/index');
		$this->view->render('footer');
	}
	public function memberDash($memberid){
		$this->view->title = 'Member Dashboard';
		$this->view->render('header');
		$this->view->memberDash = $this->model->memberDash($memberid);
		$this->view->offerDash = $this->model->offerDash($memberid);
		$this->view->paymentDash = $this->model->paymentDash($memberid);
		$this->view->render('memb/memberDash');
		$this->view->render('footer');
	}
	public function edit($memberid){
		$this->view->memb = $this->model->membEdit($memberid);
		$this->view->title = 'Edit Member';
		$this->view->render('header');
		$this->view->render('memb/edit');
		$this->view->render('footer');
		
	}
	public function editSave($memberid){

		$data = array();
		$data['member_id'] = $memberid;
		$data['member_name'] = $_POST['member_name'];
		$data['member_nid'] = $_POST['member_nid'];
		$data['member_dob'] = $_POST['member_dob'];
		$data['member_gender'] = $_POST['member_gender'];
		$data['linked_msisdn'] = $_POST['linked_msisdn'];
		$data['member_status'] = $_POST['member_status'];
		$data['active_pin'] = $_POST['active_pin'];
		$data['last_updated'] = date('Y-m-d:i:s');

		$this->model->editSave($data);
		header('location:' . URL . 'memb');
	}

}