<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{
  function __construct() {
    parent::__construct();
    $this->API="http://siakadapi.000webhostapp.com/index.php/berita";
    $this->load->library('session');
    $this->load->library('curl');
    $this->load->helper('form');
    $this->load->helper('url');
  }

  public function index(){
    $this->load->view('index');
    $this->load->view('profile');
    $this->load->view('footer');
  }
}
