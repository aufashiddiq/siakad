<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{
  
  function __construct() {
    parent::__construct();
    // $this->API="http://localhost/siakadapi/index.php/";
    $this->API="http://siakadapi.000webhostapp.com/index.php/";
  }

  public function index(){
    $id = $this->session->userdata('id_user');
    $data['user'] = json_decode($this->curl->simple_get($this->API.'user?id='.$id));
    $this->load->view('index');
    $this->load->view('profile', $data);
    $this->load->view('footer');
  }
}
