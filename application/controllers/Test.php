<?php 

class Test extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Pelanggan_m');
		$pelanggan = Pelanggan_m::get();
		var_dump($pelanggan);
	}

	public function get_join()
	{
		$this->load->model('Pelanggan_m');
		// with: left join
		// has: join saja
		$pelanggan = Pelanggan_m::with('meter')->get();
		foreach ($pelanggan as $row)
		{
			echo $row->nama . '<br>';
			echo $row->meter->merk;
		}		
	}

	public function insert_meter()
	{
		$this->load->model('Pelanggan_m');
		
		$pelanggan = new Pelanggan_m();
		$pelanggan->id_pelanggan = '12345678901234';
		$pelanggan->nama = 'Azhary';
		$pelanggan->alamat = 'KM7';
		$pelanggan->tarif = 20000;
		$pelanggan->email = 'arliansyah_azhary@yahoo.com';
		$pelanggan->daya = 90;

		$pelanggan->save();

		var_dump($pelanggan);

		$this->load->model('Meter_m');
		$meter = new Meter_m();
		$meter->id_meter = '09876543212345';
		$meter->id_pelanggan = $pelanggan->id_pelanggan;
		$meter->merk = 'sssss';
		$meter->tahun_buat = '2014';
		$meter->latitude = 3.12312312;
		$meter->longitude = 3.435445;
		$meter->save();
	}

	public function insert()
	{
		$this->load->model('Pelanggan_m');
		
		$pelanggan = new Pelanggan_m();
		$pelanggan->id_pelanggan = '12345678901234';
		$pelanggan->nama = 'Azhary';
		$pelanggan->alamat = 'KM7';
		$pelanggan->tarif = 20000;
		$pelanggan->email = 'arliansyah_azhary@yahoo.com';
		$pelanggan->daya = 90;

		$pelanggan->save();
	}

	public function update()
	{
		$this->load->model('Pelanggan_m');
		$pelanggan = Pelanggan_m::find('12345678901234');

		$pelanggan->nama = 'Azhary Arliansyah';
		$pelanggan->alamat = 'KM7';

		$pelanggan->save();
	}

	public function delete()
	{
		$this->load->model('Pelanggan_m');
		$pelanggan = Pelanggan_m::find('12345678901234');
		$pelanggan->delete();
	}
}