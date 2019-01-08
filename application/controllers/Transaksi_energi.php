<?php 

class Transaksi_energi extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'transaksi_energi';
	}

	public function index()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}

	public function target_operasi()
	{
		$this->data['title']	= 'Target Operasi';
		$this->data['content']	= 'target_operasi';
		$this->template($this->data, $this->module);
	}

	public function tambah_target_operasi()
	{
		$this->data['title']	= 'Tambah Target Operasi';
		$this->data['content']	= 'tambah_target_operasi';
		$this->template($this->data, $this->module);
	}

	public function edit_target_operasi()
	{
		$this->data['title']	= 'Edit Target Operasi';
		$this->data['content']	= 'edit_target_operasi';
		$this->template($this->data, $this->module);
	}
}