<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller{
  function __construct() {
    parent::__construct();
    // $this->API="http://localhost/siakadapi/index.php/event";
    $this->API="http://siakadapi.000webhostapp.com/index.php/event";
  }

  public function index(){
    $data['dataEvent'] = json_decode($this->curl->simple_get($this->API));
    $this->load->view('index');
    $this->load->view('event', $data);
    $this->load->view('footer');
  }

  public function create() {
    $this->load->view('index');
    $this->load->view('create');
    $this->load->view('footer');
  }

  public function post_create() {
    $data=array(
      'nama_event' => $this->input->post('nama_event', TRUE),
      'tempat'=> $this->input->post('tempat', TRUE),
      'tgl_event'=> $this->input->post('tgl_event', TRUE),
      'keterangan'=> $this->input->post('keterangan', TRUE),
      'id_user' => $this->session->userdata('id_user'));
    $post = $this->curl->simple_post($this->API, $data);

    if($post) {
      redirect(base_url('event'));
    } else {
      $this->session->set_flashdata('error_msg','Error, Coba lagi');
      redirect(base_url('event/create'));
    }
  }

  public function detail($id) {
    $data['event'] = json_decode($this->curl->simple_get($this->API.'?id='.$id));
    $this->load->view('index');
    $this->load->view('eventdetail', $data);
    $this->load->view('footer');
  }
}
