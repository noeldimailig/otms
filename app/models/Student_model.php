
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student_model extends Model {
	public function __construct()
	{
		parent::__construct();
        $this->call->database();
	}

	public function get_joined_classes($student_id){
		return $this->db->table('student_course as s')
						->select('c.course_id, s.student_id, c.faculty_id, c.room, c.schedule, c.section, c.photo, c.class_code')
						->inner_join('course as c', 'c.course_id = s.course_id')
						->where('s.student_id = ? and s.join_status = ?', [$student_id, 1])
						->get_all();
	}
	
	public function isJoined() {

	}

	public function join_class($student_id, $class_code) {
		$class = $this->db->table('course')->select('course_id')->where('class_code', $class_code)->get();

		if($class){
			date_default_timezone_set('Asia/Manila');
			$data = [
				'student_id' => $student_id,
				'join_status' => 1,
				'course_id' => $class['course_id'],
				'date_join' => date("Y-m-d h:i:s A")
			];

			$is_joined = $this->db->table('student_course')
									->select('student_id')
									->where('student_id = ? and course_id = ? and join_status = ?', [$student_id, $class['course_id'], 1])
									->get();
			if(!$is_joined){
				$joined = $this->db->table('student_course')->insert($data)->exec();

				if($joined) return true;
				else return false;
			}		
		}
	}
}
?>
