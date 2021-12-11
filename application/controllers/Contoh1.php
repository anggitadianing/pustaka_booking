<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {

	
	public function index()
	{
		echo "<h1>Perkenalkan</h1>";
		echo "Nama Saya Anggita Dianing Pratiwi<br>
			Saya tinggal di Magelang <br>
			Olahraga yang saya sukai adalah adventure";
	}
}