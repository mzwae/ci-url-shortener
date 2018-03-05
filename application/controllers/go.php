<?php

if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Go extends MY_Controller{
  function __construct(){
    parent::__construct();
    $this->load->helper('string');
  }

  public function index(){
    if ($this->uri->segment(1)) {
      redirect(base_url());
    } else {
      $url_code = $this->uri->segment(1);
      $this->load->model('Urls_model');
      $query = $this->Urls_model->fetch_url($url_code);
    }
  }
}

 ?>
