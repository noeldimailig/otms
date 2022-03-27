
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

	public function choose() {
		$this->call->view('choose_account');
	}

	public function student() {
		$this->call->view('student_signup');
	}

	public function teacher() {
		$this->call->view('teacher_signup');
	}

	public function staff() {
		$this->call->view('staff_signup');
	}

	public function forgot() {
		$this->call->view('forgot_password');
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
				'main_id' => $result['main_id'],
				'user_email' => $result['email'],
			);

			$this->session->set_userdata($userdata);
			$this->auth->set_logged_in($result['email']);
			redirect('user/index');
		}else {
			$this->session->set_flashdata(array('error' => 'Username or password do not match. Please try again.'));
			redirect('user/login');
		}
	}

	public function signup() {
		$this->call->view('signup');
	}

	public function register() {
		$this->call->model('User_model');

		$type = $this->io->post('user-type');
		$fname = $this->io->post('fname');
		$mname = $this->io->post('mname');
		$lname = $this->io->post('lname');
		$nameex = $this->io->post('nameex');
		$uname = $this->io->post('uname');
		$email = $this->io->post('email');
		$region = $this->io->post('region');
		$province = $this->io->post('province');
		$city = $this->io->post('city');
		$barangay = $this->io->post('barangay');
		$contact = $this->io->post('contact');
		$gender = $this->io->post('gender');
		$bdate = $this->io->post('bdate');
		$designation = $this->io->post('designation');
		$position = $this->io->post('position');
		$password = $this->io->post('password');
		$confirm = $this->io->post('confirm_password');
		
		$address = $region . ',' . $province . ',' . $city . ',' . $barangay;

		$hash = $this->auth->passwordhash($password);

		$token = mt_rand(11111, 99999);

		if($this->User_model->check_email($email)){
			$msg['msg'] = "Email already exists! Try using other email.";
			$msg['error'] = true;
			echo json_encode($msg);
			exit;
		}
		if(password_verify($confirm, $hash) == true){
			$result = $this->auth->register($type, $fname, $mname, $lname, $nameex, $uname, $email, $address, $contact, $gender, $bdate, $designation, $position, $password, $token);
			
			if($result){
				$this->auth->set_logged_in($email);

				$id = $this->User_model->get_last_id();

				$userdata = array(
					'user_id' => $id,
					'user_email' => $email,
					'firstname' => $fname,
					'lastname' => $lname,
					'user_profile' => 'profile.png',
					'user_role' => $type
				);
				$this->session->set_userdata($userdata);
				$this->send_code($email, $token);
				$msg['msg'] = "Account creation successful. Verify your account using the verification code sent to your email.";
				$msg['error'] = false;
				$msg['role'] = $type;
				echo json_encode($msg);
				exit;
			}else{
				$msg['msg'] = "Account creation failed. Please check all the information you provided!";
				$msg['error'] = true;
				echo json_encode($msg);
				exit;
			}
		}
	}

	public function verify() {
		$this->call->view('verify');
	}

	public function verify_account() {
		$this->call->model('User_model');

		$email = $this->io->post('email');
		$token = $this->io->post('token');

		$result = $this->User_model->verify($email, $token);

		if($result){
			$userdata = array(
				'user_id' => $result['user_id'],
				'username' => $result['username'],
				'firstname' => $result['fname'],
				'lastname' => $result['lname'],
				'user_profile' => $result['profile'],
				'user_role' => $result['user_type'],
				'user_email' => $result['email'],
			);

			$this->session->set_userdata($userdata);
			$this->auth->set_logged_in($result['email']);
			$msg['msg'] = "Verification successful, please proceed to logging your account.";
			$msg['error'] = false;
			echo json_encode($msg);
		}else {
			$msg['msg'] = "Something went wrong, please try to check the email or code you entered.";
			$msg['error'] = true;
			echo json_encode($msg);
		}
	}

	public function logout() {
		$google_client = new Google_Client();

		$google_client->setClientId(GOOGLE_CLIENT_ID);

		$google_client->setClientSecret(GOOGLE_CLIENT_SECRET);

		$google_client->setRedirectUri(GOOGLE_REDIRECT_URL);

		$google_client->addScope('email');
		$google_client->addScope('profile');
		$google_client->revokeToken();
		
		$userdata = array(
			'user_id',
			'user_email',
		);

		$this->session->unset_userdata($userdata);
		$this->auth->set_logged_out();

		redirect('user/login');
	}
	
	public function send_code($email, $token) {
		$content = "You sign up in our website. Please verify your account in order to login!\nUse this code " . $token . " to verify your account.";
		$this->email->subject('Account Validation');
		$this->email->sender('otmsminsu@gmail.com');
		$this->email->recipient($email);
		$this->email->email_content($content);
		$this->email->send();
	}
}
?>
