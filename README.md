# PyroCMS SimpleTest Module

This module allows you to unit test other modules or the core. 

# Installation

Upload the "simpletest" directory to your third_party/modules directory. Next visit yoursite.com/third_party/simpletest/unit_test.php and select what you want to test. 

# Testing Modules

If you want to test your module create a new file named "yourmodule_unit_test.php" and put it in the main directory of your module. Next create a simple class to perform your tests. 

	<?php 
	class yourmodule_unit_test extends CodeIgniterUnitTestCase
	{
		protected $_ci = '';

		public function __construct()
		{
			parent::UnitTestCase();
			$this->_ci = CI_Base::get_instance();
		}

		public function setUp()
		{

	    }

	    public function tearDown()
		{
        
	    }

		public function test_example()
		{
			$this->assertEqual(12,12);
		}
	
		public function test_fail()
		{
			$this->assertEqual(12,11);
		}

	}