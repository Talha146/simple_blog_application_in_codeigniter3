<?php

class Login extends CI_controller{
    
    function index(){
        $this->load->model('User_model');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $user = $this->User_model->doLogin($username,$password);

            if(!empty($user)) {
                $this->session->set_userdata('user',$user);
                redirect(base_url().'adminDashboard');
            } else {
                $this->session->set_flashdata('errorMsg','Either Usrname or Password is incorrect.');
                redirect(base_url().'login');
            }
        }
    }
}

?>