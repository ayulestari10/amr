<?php 

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['id_role']	= $this->session->userdata('id_role');
		if (!isset($this->data['id_role']) or $this->data['id_role'] != 1)
		{
			$this->session->sess_destroy();
			redirect('login');
		}

		$this->module = 'admin';
		
		$this->data['id_pengguna'] 	= $this->session->userdata('id_pengguna');
		$this->data['username']		= $this->session->userdata('username');

		$this->load->model('Pengguna_m');
		$this->data['pengguna'] = Pengguna_m::find($this->data['id_pengguna']);
		if (!isset($this->data['pengguna']))
		{
			$this->session->sess_destroy();
			redirect('login');
		}
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

	public function berita_acara(){
		$this->data['title']	= 'Berita Acara';
		$this->data['content']	= 'berita_acara';
		$this->template($this->data, $this->module);
	}

	public function realisasi(){
		$this->data['title']	= 'Realisasi';
		$this->data['content']	= 'data_realisasi';
		$this->template($this->data, $this->module);
	}

	public function detail_realisasi(){
		$this->data['title']	= 'Detail Realisasi';
		$this->data['content']	= 'detail_realisasi';
		$this->template($this->data, $this->module);
	}
	
	public function edit_realisasi(){
		$this->data['title']	= 'Edit Realisasi';
		$this->data['content']	= 'edit_realisasi';
		$this->template($this->data, $this->module);
	}

	public function tambah_realisasi(){
		$this->data['title']	= 'Tambah Realisasi';
		$this->data['content']	= 'tambah_realisasi';
		$this->template($this->data, $this->module);
	}

	public function data_geotag(){
		$this->data['title']	= 'Data Geotag';
		$this->data['content']	= 'data_geotag';
		$this->template($this->data, $this->module);
	}
	
	public function tambah_geotag(){
		$this->data['title']	= 'Tambah Geotag';
		$this->data['content']	= 'tambah_geotag';
		$this->template($this->data, $this->module);
	}	

	public function edit_geotag(){
		$this->data['title']	= 'Edit Geotag';
		$this->data['content']	= 'edit_geotag';
		$this->template($this->data, $this->module);
	}
}
