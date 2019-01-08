<?php 

class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'login';
	}

	public function index()
	{
		$this->data['title']	= 'Login';
		$this->data['content']	= 'login';
		$this->template($this->data, $this->module);
	}

}
