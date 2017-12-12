<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller{
  function __construct() {
    parent::__construct();
    $this->API="http://siakadapi.000webhostapp.com/index.php/berita";
    $this->load->library('session');
    $this->load->library('curl');
    $this->load->helper('form');
    $this->load->helper('url');
  }

  public function index(){
    $data['dataBerita'] = json_decode($this->curl->simple_get($this->API));
    $this->load->view('index');
    $this->load->view('berita', $data);
    $this->load->view('footer');
  }
}
