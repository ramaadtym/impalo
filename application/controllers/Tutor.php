<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:39
 */

class Tutor extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_Tutor');
	}

    public function index(){
    	$query = $this->M_Tutor->getTutor();
    	$data['tabelTutor'] = $query->result();
        $this->tutor_page('laman/v_tutor',$data);
    }

}