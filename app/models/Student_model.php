
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Class_model extends Model {
	public function __construct()
	{
		parent::__construct();
        $this->call->database();
	}

}
?>
