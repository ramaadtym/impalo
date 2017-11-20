<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/11/17
 * Time: 9:45
 */

class User extends MY_Controller
{

    public function index(){
        $this->tutor_page('laman/v_user'/*,$data*/);
    }
    public function addAdmin(){
        $this->addadmin_page('laman/v_addadmin'/*,$data*/);
    }
    public function addTutor(){
        $this->addtutor_page('laman/v_addtutor'/*,$data*/);
    }
    public function addMhs(){
        $this->addmhs_page('laman/v_addmhs'/*,$data*/);
    }
}