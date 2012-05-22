<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custom_Welcome extends Welcome {
	
	public function unique_thing()
	{
		echo 'baaa!';
	}
}
