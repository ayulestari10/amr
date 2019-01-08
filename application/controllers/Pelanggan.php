<?php 

class Pelanggan extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'pelanggan';
	}


	public function index()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}

	public function data_pelanggan()
	{
		$this->data['title']	= 'Pelanggan';
		$this->data['content']	= 'data_pelanggan';
		$this->template($this->data, $this->module);
	}

	public function tambah_pelanggan()
	{
		$this->data['title']	= 'Tambah Pelanggan';
		$this->data['content']	= 'tambah_pelanggan';
		$this->template($this->data, $this->module);
	}

	public function edit_pelanggan()
	{
		$this->data['title']	= 'Edit Pelanggan';
		$this->data['content']	= 'edit_pelanggan';
		$this->template($this->data, $this->module);
	}

	public function detail_pelanggan()
	{
		$this->data['title']	= 'Detail Pelanggan';
		$this->data['content']	= 'detail_pelanggan';
		$this->template($this->data, $this->module);
	}

}
