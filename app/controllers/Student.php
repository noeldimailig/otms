
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student extends Controller {
	public function __construct()
	{
		parent::__construct();
  	}

	public function index()
	{
		$user_id = $_SESSION['user_id'];
		$this->call->model('User_model');

		//$data['total_class'] = $this->Class_model->count_classes($user_id);
		//$data['total_students'] = $this->Class_model->count_total_students($user_id);
		$data['student'] = $this->User_model->get_user('Student', $user_id);
		$this->call->view('student/index', $data);
	}

	public function classes($user_id)
	{
		$this->call->model('Student_model');
		$this->call->model('Class_model');

		$results = $this->Student_model->get_joined_classes(decrypt_id($user_id));

		$data = [];
		foreach($results as $result) {
			$counts = $this->Class_model->count_students($result['class_code']);
			foreach($counts as $count){
				$result['count'] = $count;
			}
			array_push($data, (array)$result);
		}
		$this->call->view('student/classes', $data);
	}

	public function classroom()
	{
		$this->call->view('student/classroom');
	}

	public function join_class() {
		$this->call->model('Student_model');

		$stud_id = decrypt_id($this->io->post('stud_join_id'));
		$class_code = $this->io->post('join_code');

		$result = $this->Student_model->join_class($stud_id, $class_code);
		if($result) {
			$msg['status'] = true;
            $msg['msg'] = "Joining class successful";
            echo json_encode($msg);
            exit;
        } else{
            $msg['status'] = false;
            $msg['msg'] = "Joining class failed. Please try again.";
            echo json_encode($msg);
            exit;
        }
	}
}
?>
