<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->API="http://siakadapi.000webhostapp.com/index.php/user";
    // $this->load->library('session');
    $this->load->library('curl');
    $this->load->helper('form');
    $this->load->helper('url');
  }

  function index(){
    $data['datauser'] = json_decode($this->curl->simple_get($this->API.'/user'));
    $this->load->view('profile');
  }

  function create(){
    if(isset($_POST['submit'])){
      $data = array(
        'username' => $this->input->post('username'),
        'nama' => $this->input->post('nama'),
        'tmpt_lahir' => $this->input->post('tmpt_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'jk' => $this->input->post('jk'),
        'asal' => $this->input->post('asal'),
        'angkatan' => $this->input->post('angkatan'),
        'password' => sha256($this->input->post('password')),
        'level' => $this->input->post('level')
      );
      $insert = $this->curl->simple_post($this->API.'/user',$data, array('CURLOPT_BUFFERSIZE' => 9 ));
      if ($insert) {
        $this->session->set_flashdata('hasil','Simpan Data Berhasil');
      }else {
        $this->session->set_flashdata('hasil','Simpan Data Gagal');
      }
      redirect('user');
    }else {
      $this->load->view('userData');
    }
  }

  function edit(){
    if(isset($_POST['submit'])){
      $data = array(
        'username' => $this->input->post('username'),
        'nama' => $this->input->post('nama'),
        'tmpt_lahir' => $this->input->post('tmpt_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'jk' => $this->input->post('jk'),
        'asal' => $this->input->post('asal'),
        'angkatan' => $this->input->post('angkatan'),
        'password' => $this->input->post('password'),
        'level' => $this->input->post('level')
        );
        $update =  $this->curl->simple_put($this->API.'/user', $data, array(CURLOPT_BUFFERSIZE => 10));
        if($update)
        {
            $this->session->set_flashdata('hasil','Update Data Berhasil');
        }else
        {
           $this->session->set_flashdata('hasil','Update Data Gagal');
        }
        redirect('user');
    }else{
        $params = array('id_user'=>  $this->uri->segment(10));
        $data['datauser'] = json_decode($this->curl->simple_get($this->API.'/user',$params));
        $this->load->view('user/edit',$data);
    }
  }

  function delete($id){
    if(empty($id)){
        redirect('user');
    }else{
        $delete =  $this->curl->simple_delete($this->API.'/user', array('id_user'=>$id), array(CURLOPT_BUFFERSIZE => 10));
        if($delete)
        {
            $this->session->set_flashdata('hasil','Delete Data Berhasil');
        }else
        {
           $this->session->set_flashdata('hasil','Delete Data Gagal');
        }
        redirect('user');
    }

  }
}

 ?>
