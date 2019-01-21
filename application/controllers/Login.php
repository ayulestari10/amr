<?php 

class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['id_role']	= $this->session->userdata('id_role');
		if (isset($this->data['id_role']))
		{
			switch ($this->data['id_role'])
			{
				case 1:
					redirect('admin');
					break;

				case 2:
					redirect('transaksi-energi');
					break;

				case 3:
					redirect('rayon');
					break;
			}
		}

		$this->module = 'login';
	}

	public function index()
	{
		if ($this->POST('login'))
		{
			$this->load->model('Pengguna_m');
			$pengguna = Pengguna_m::where('username', $this->POST('username'))
							->where('password', md5($this->POST('password')))
							->first();
			if (isset($pengguna))
			{
				$this->session->set_userdata([
					'id_pengguna'	=> $pengguna->id_pengguna,
					'id_role'		=> $pengguna->id_role,
					'username'		=> $pengguna->username
				]);
			}
			else
			{
				$this->flashmsg('Username atau password salah', 'danger');
			}

			redirect('login');
		}

		$this->data['title']	= 'Login';
		$this->data['content']	= 'login';
		$this->template($this->data, $this->module);
	}

}
