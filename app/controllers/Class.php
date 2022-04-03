
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

	public function students_classlist()
	{
		$this->call->model('Student_model');
		$data['students'] = $this->Student_model->students_classlist();
		$this->call->view('faculty/students_classlist',$data);
	}

    public function all_students()
	{
		$this->call->model('Student_model');
		$data['students'] = $this->Student_model->all_students();
		$this->call->view('faculty/all_students',$data);
	}
	
	public function create()
	{
		$this->call->model('Class_model');

		$faculty_id = decrypt_id($this->io->post('id'));
		$course_code = $this->io->post('code');
		$course_desc = $this->io->post('description');
		$units = $this->io->post('units');
		$room = $this->io->post('name');
		$section = $this->io->post('section');
		$day = $this->io->post('day');
		$start = $this->io->post('start');
		$end = $this->io->post('end');

		$schedule = $day . ', ' . date('h:i', $start) . ' - ' . date('h:i', $end);
        $class_code = generate_class_code();
        $payment_provider = $this->io->post('provider');
        $payment_acc = $this->io->post('account');

		$result = $this->Class_model->create($faculty_id, $course_code, $course_desc, $units, $room, $section, $schedule, $class_code, $payment_provider, $payment_acc);

		if($result) {
            $msg['status'] = false;
            $msg['msg'] = "Class creation successful";
            return json_encode($msg);
            exit;
        } else{
            $msg['status'] = false;
            $msg['msg'] = "Class creation failed. Please try again.";
            return json_encode($msg);
            exit;
        }
	}
}
?>
