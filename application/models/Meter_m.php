<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Meter_m extends Eloquent
{
	protected $table		= 'meter';
	protected $primaryKey	= 'id_meter';
	public $incrementing 	= false;

	public function pelanggan()
	{
		require_once __DIR__ . '/Pelanggan_m.php';
		return $this->belongsTo('Pelanggan_m', 'id_pelanggan', 'id_pelanggan');
	}
}