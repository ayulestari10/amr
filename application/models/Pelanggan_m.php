<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pelanggan_m extends Eloquent
{
	protected $table		= 'pelanggan';
	protected $primaryKey	= 'id_pelanggan';
	public $incrementing 	= false;

	public function meter()
	{
		require_once __DIR__ . '/Meter_m.php';
		// utk mendefinisikan kardinalitas relasi
		return $this->hasOne('Meter_m', 'id_pelanggan', 'id_pelanggan');
	}

	public function one_to_many()
	{
		require_once __DIR__ . '/Meter_m.php';
		// utk mendefinisikan kardinalitas relasi
		return $this->hasMany('Meter_m', 'id_pelanggan', 'id_pelanggan');
	}
}