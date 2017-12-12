<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller{
  public function index(){
    $this->load->view('index');
    $this->load->view('tugas');
    $this->load->view('footer');
  }
}