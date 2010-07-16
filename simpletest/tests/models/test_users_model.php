<?php
class test_users_model extends CodeIgniterUnitTestCase
{
	var $rand = '';
	
	function __construct()
	{
		parent::__construct();
		
		$this->UnitTestCase('Users Model');
		
		$this->_ci =& get_instance();
		
		$this->_ci->load->model('users/users_m');
		
		$this->rand = rand(500,15000);
	}

	public function test_included()
	{
		$this->assertTrue(class_exists('users_m'));
	}
	
	function test_that_passes()
	{
		$this->assertEqual(12,12);
	}
	
	function test_that_fails()
	{
		$this->assertEqual(11,12);
	}
}

/* End of file test_users_model.php */
/* Location: ./tests/models/test_users_model.php */ 