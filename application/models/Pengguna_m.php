<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pengguna_m extends Eloquent
{
	protected $table		= 'pengguna';
	protected $primaryKey	= 'id_pengguna';

	public function rayon()
	{
		
	}
}