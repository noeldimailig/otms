
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Class_model extends Model {
	public function __construct()
	{
		parent::__construct();
        $this->call->database();
	}
	
	public function get_classes($user_id) {
        return $this->db->table('course')->select('course_id, faculty_id, room, schedule, payment_acc, section, photo, class_code')->where('faculty_id', $user_id)->get_all();
    }

	public function get_class($class_code, $user_id) {
        return $this->db->table('course')
						->select('course_id, faculty_id, room, schedule, payment_acc, section, photo, class_code')
						->where('faculty_id = ? and  class_code = ?', [$user_id, $class_code])->get();
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
        ];

        $result = $this->db->table('course')->insert($data)->exec();

        if($result)
            return true;
        else
            return false;    
    }
}
?>
