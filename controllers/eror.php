<?php 

class Eror extends Controller {

	function __construct(){
		parent::__construct();
		
	}

	function index(){
		$this->view->title = '404 Error';
		echo "This Page Does not exist <br>";
		$this->view->render('eror/index');
	}
}