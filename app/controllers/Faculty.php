
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Faculty extends Controller {
	public function __construct()
	{
		parent::__construct();
  	}

	public function index()
	{
		$user_id = $_SESSION['user_id'];
		$this->call->model('Class_model');
		$this->call->model('User_model');

		$data['total_class'] = $this->Class_model->count_classes($user_id);
		$data['total_students'] = $this->Class_model->count_total_students($user_id);
		$data['faculty'] = $this->User_model->get_user('Faculty', $user_id);
		$this->call->view('faculty/index', $data);
	}

	public function myprofile($user_id) {
		$this->call->model('User_model');
		$data = $this->User_model->get_user('Faculty', decrypt_id($user_id));

		$data['address'] = explode(',', $data['address']);
		$this->call->view('faculty/myprofile', $data);
	}

	public function teachers_list()
	{
		$this->call->model('Faculty_model');
		$data['all_teachers'] = $this->Faculty_model->view_faculty();
		$this->call->view('Faculty_Dashboard/All_Instructors',$data);
	}
	
	public function classes($user_id)
	{
		$this->call->model('Class_model');

		$results = $this->Class_model->get_active_classes(decrypt_id($user_id));

		$data = [];
		foreach($results as $result) {
			$counts = $this->Class_model->count_students($result['class_code']);
			foreach($counts as $count){
				$result['count'] = $count;
			}
			array_push($data, (array)$result);
		}

		$this->call->view('faculty/classes', $data);
	}
}
?>
