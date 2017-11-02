<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		echo $this->session->userdata('akses') . " Berhasil Login <br>";
		echo "<a href='Utama/logout'>logout</a>";
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
 ?>