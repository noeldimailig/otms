
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Class_model extends Model {
	public function __construct()
	{
		parent::__construct();
        $this->call->database();
	}

	public function count_students($class_code) {
		return $this->db->table('student_course as s')
					->select_count('s.student_id', 'total_students')
					->inner_join('course as c', 'c.course_id = s.course_id')
					->where('c.class_code = ? and s.join_status = ?', [$class_code, 1])
					->get();
	}

	public function get_students($class_code) {
		return $this->db->table('student_course as s')
					->select('s.student_id, u.username, u.fname, u.lname, u.profile, u.email')
					->inner_join('users as u', 'u.user_id = s.student_id')
					->inner_join('course as c', 'c.course_id = s.course_id')
					->where('c.class_code = ? and s.join_status = ?', [$class_code, 1])
					->get_all();
	}
	
	public function get_active_classes($user_id) {
        return $this->db->table('course')
					->select('course_id, faculty_id, student_id, room, schedule, payment_acc, section, photo, class_code')
					->where('faculty_id = ? and status = ?', [$user_id, 1])
					->get_all();
    }

	public function get_archive_classes($user_id) {
        return $this->db->table('course')
					->select('course_id, faculty_id, room, schedule, payment_acc, section, photo, class_code')
					->where('faculty_id = ? and status = ?', [$user_id, 0])
					->get_all();
    }

	public function get_class($class_code, $user_id) {
        return $this->db->table('course')
						->select('course_id, faculty_id, room, schedule, payment_acc, section, photo, class_code')
						->where('faculty_id = ? and  class_code = ?', [$user_id, $class_code])
						->get();
    }

	public function create($faculty_id, $course_code, $course_desc, $units, $room, $section, $schedule, $class_code, $payment_provider, $payment_acc) {
        $data = [
            'faculty_id' => $faculty_id,
            'course_code' => $course_code,
            'course_desc' => $course_desc,
            'units' => $units,
            'room' => $room,
            'section' => $section,
            'schedule' => $schedule,
            'class_code' => $class_code,
			'payment_provider' => $payment_provider,
			'payment_acc' => $payment_acc,
			'status' => 1
        ];

        $result = $this->db->table('course')->insert($data)->exec();

        if($result)
            return true;
        else
            return false;    
    }
}
?>
