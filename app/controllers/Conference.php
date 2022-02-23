
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Conference extends Controller {
	public function index() {
		$this->call->view('chat');
	}

	public function signup() {
		$this->call->view('signup');
	}
}
?>
