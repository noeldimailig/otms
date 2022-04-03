
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Faculty extends Controller {
	public function __construct()
	{
		parent::__construct();
  	}

	public function index()
	{
		$this->call->view('faculty/index');
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
		$i = 0;
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
