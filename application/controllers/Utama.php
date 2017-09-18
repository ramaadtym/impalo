<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends MY_Controller
{
    public function index()
    {
        $this->login_page('laman/v_login');
    }
}

?>