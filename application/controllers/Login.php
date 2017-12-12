<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->API="http://siakadapi.000webhostapp.com/index.php/login";
    $this->load->helper('url');
    $this->load->helper('form');
  	$this->load->model('user_model');
    $this->load->library('session');
    $this->load->library('curl');
  }

  function index() {
    $data['username']=$this->session->userdata('username');

		if(isset($data['username'])){
			redirect(base_url(''));
		}else{
			$this->load->view('login');
		}
  }

  function cek_login() {
    $data=array('username' => $this->input->post('username', TRUE),'password'=> $this->input->post('password', TRUE));
    $post=$this->curl->simple_post($this->API.'/login', $data);
    //$arr = array('message' => 'sukses' );
    $post = json_decode($post);
    //var_dump($post->status);

    if($post->status == 'true') {
      redirect(base_url('home'));
    } else {
      $this->session->set_flashdata('error_msg','Error, Coba lagi');
      // $this->load->view('login');
      redirect(base_url('login'));
    }
  }

  function logout() {
    $array_session = $this->session->all_userdata();
		$this->session->unset_userdata($array_session);
		unset($array_session);

		// memutus session
		$this->session->sess_destroy();

		// kembali lagi ke login
		redirect(base_url('login'));
  }
}

?>
