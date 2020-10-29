
<?php 

class Login extends Controller {

	function __construct(){

		parent::__construct();
		// Auth::handleLogin();
		
		// echo "We are in Index";
	}
	function index(){
		$this->view->title = 'Login';
		$this->view->render('login/index');
	}
	function run(){
		$this->model->run();
	}
}