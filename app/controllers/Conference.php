
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Conference extends Controller {
	public function index() {
		$this->call->view('login');
	}

	public function signup() {
		$this->call->view('signup');
	}
}
?>
