<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function index() {
    $data["users"] = $this->user_model->get_users();
    $data['page'] = 'users_view';
    
    $this->load->view("layout",array('data' =>$data));

}}

?>