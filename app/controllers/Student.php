
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student extends Controller {
	public function __construct()
	{
		parent::__construct();
  	}

	public function index()
	{
		$this->call->view('student/index');
	}
	public function classes()
	{
		$this->call->view('student/classes');
	}
	public function classroom()
	{
		$this->call->view('student/classroom');
	}
}
?>
