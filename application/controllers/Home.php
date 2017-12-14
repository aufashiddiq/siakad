<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function index(){
    $data['username']=$this->session->userdata('username');

    if(isset($data['username'])){
      $this->API="http://siakadapi.000webhostapp.com/index.php/";
      // $this->API="http://localhost/siakadapi/index.php/";
      $data['berita'] = json_decode($this->curl->simple_get($this->API.'berita'));
      $data['event'] = json_decode($this->curl->simple_get($this->API.'event'));
      $data['tugas'] = json_decode($this->curl->simple_get($this->API.'tugas'));
      $this->load->view('index');
      $this->load->view('home', $data);
      $this->load->view('footer');
    }else{
        redirect(base_url('login'));
    }

  }
}
