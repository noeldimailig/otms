
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Pages extends Controller {
	public function index() {
		$this->call->view('index');
	}

	public function about() {
		$this->call->view('aboutus');
	}

    public function contact() {
		$this->call->view('contact');
	}
}
?>
