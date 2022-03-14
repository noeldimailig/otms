
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {
	public function __construct() {
		parent::__construct();
		$this->call->library('auth');
	}

	public function index() {
		$this->call->view('index');
	}

	public function login() {
		$this->call->view('login');
	}

	public function signin() {
		$email = $this->io->post('email');
		$pass = $this->io->post('password');

		$result = $this->auth->login($email, $pass);

		if($result){
			$userdata = array(
				'user_id' => $result['id'],
				'user_email' => $result['email'],
			);

			$this->session->set_userdata($userdata);
			$this->auth->set_logged_in($result['email']);
			redirect('user/index');
		}else {
			$this->session->set_flashdata(array('error' => 'Username or password do not match. Please try again.'));
			$this->call->view('login');
		}
	}

	public function signup() {
		$this->call->view('signup');
	}

	public function register() {
		$this->call->model('User_model');

		$email = $this->io->post('email');
		$password = $this->io->post('password');
		$confirm = $this->io->post('confirm_password');

		$hash = $this->auth->passwordhash($password);

		if(password_verify($confirm, $hash) == true){
			$this->auth->register($email, $password);
			$this->auth->set_logged_in($email);

			$id = $this->User_model->get_last_id();

			$userdata = array(
				'user_id' => $id,
				'user_email' => $email
			);
			$this->session->set_userdata($userdata);
			redirect('user/index');
		}else {
			$this->session->set_flashdata(array('error' => 'Password do not match!!'));
			$this->call->view('signup');
		}
	}

	public function logout() {
		$userdata = array(
			'user_id',
			'user_email',
		);

		$this->session->unset_userdata($userdata);
		$this->auth->set_logged_out();

		redirect('user/login');
	}	
}
?>
