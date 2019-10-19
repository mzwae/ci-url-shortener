<?php



class Create extends CI_Controller
{
/*
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    }*/

    public function view()
    {
      echo "Hello, I'm the create controller!!!";
      /*  if (!defined('BASEPATH')) {
            exit('No direct script access allowed!');
        }*/
//        $this->form_validation->set_rules('url_address', 'URL Addresss', 'required|min_length[1]|max_length[1000]|trim');

    /*    if ($this->form_validation->run() == false) {
            //Set initial values for the view
            $page_data = array(
              'success_fail' => null,
              'encoded_url' => false
              );

            $this->load->view('templates/header');
            $this->load->view('create/create', $page_data);
            $this->load->view('templates/footer');
        } else {
            // Begin to build data to be passed to database
            $data = array(
              'url_address' => $this->input->post('url_address')
            );

            $this->load->model('Urls_model');
            if ($res = $this->Urls_model->save_url($data)) {
                $page_data['success_fail'] = 'success';
                $page_data['encoded_url'] = $res;
            } else {
                // Some sort of error, set to display error message
                $page_data['success_fail'] = 'fail';
            }

            // Build link which will be displayed to the user
            $page_data['encoded_url'] = base_url() . $res;

            $this->load->view('templates/header');
            $this->load->view('create/create', $page_data);
            $this->load->view('templates/footer');
        }*/
    }
}