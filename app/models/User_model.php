
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
                return true;
            else
                return false;    
        }
    }

    public function forgot($email, $newpass, $code) {
        $result = $this->db->table('users as u')
            ->select('u.user_id, u.username, u.fname, u.lname, u.profile, u.email, u.user_type')
            ->where('u.email', $email)
            ->get();
        
        $data = [
            'token' => $code,
            'status' => 0,
            'password' => $newpass
        ];
        if($result){
            $verify = $this->db->table('users as u')->update($data)->where('u.email', $email)->exec();
            if($verify)
                return true;
            else
                return false;    
        }
    }

    public function google_signup($google_id, $type, $profile, $lname, $fname, $email, $token, $status) {
        $data = [
            'google_id' => $google_id,
            'user_type' => $type,
            'profile' => $profile,
            'lname' => $lname,
            'fname' => $fname,
            'email' => $email,
            'token' => $token,
            'status' => $status
        ];

        $result = $this->db->table('users')->insert($data)->exec();

        if($result)
            return true;
        else
            return false;    
    }

    public function google_signin($google_id, $email, $status) {
        $condition = [
            'google_id' => $google_id,
            'email' => $email,
            'status' => $status
        ];

        $result = $this->db->table('users')
                 ->select('user_id, username, fname, lname, profile, email, user_type')
                 ->where($condition)
                 ->get();

        if($result)
            return $result;
        else
            return false;
    }
}
?>
