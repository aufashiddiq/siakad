<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller{
  public function index(){
    $this->load->view('index');
    $this->load->view('jadwal');
    $this->load->view('footer');
  }
}