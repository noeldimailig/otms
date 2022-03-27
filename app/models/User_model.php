
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	public function __construct() {
        parent::__construct();
        $this->call->database();
    }

    public function get_last_id() {
        return $this->db->last_id();
    }

	public function check_email($email) {
        $result = $this->db->table('users')->select('email')->where('email', $email)->get();
        if($result) return true;
    }

    public function verify($email, $token) {
        $condition = [
            'u.email' => $email,
            'u.token' => $token
        ];

        $result = $this->db->table('users as u')
                 ->select('u.user_id, u.username, u.fname, u.lname, u.profile, u.email, u.user_type')
                 ->where($condition)
                 ->get();

        $status = ['status' => 1];
        if($result){
            $verify = $this->db->table('users as u')->update($status)->where($condition)->exec();
            if($verify)
                return $result;
            else
                return false;    
        }
    }
}
?>
