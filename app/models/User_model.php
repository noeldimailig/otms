
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

	public function insert($email, $pass) {
        $data = [
            'password' => $pass,
            'email' => $email,
        ];

        $result = $this->db->table('users')->insert($data)->exec();
        if($result) return true;
    }
}
?>
