<?php

class AdminDashboard extends CI_controller{
    // public function __construct() {
    //     parent::__construct();
        
    //     // Check if the user is an admin
    //     if (!$this->session->userdata('logged_in')) {
    //         redirect(base_url().'login'); // Redirect to login if not logged in or not admin
    //     }
    // }

    function index(){
        // echo"I am logged in Now";
        // if (empty($this->session->userdata['user'])) {
        //     redirect(base_url().'login');
        // }

        // echo"<a href='".base_url().'adminDashboard/signOut'."'>Sign Out</a>";

        $this->load->view('admin/dashboard');
    }

    function signOut(){
        $this->session->unset_userdata('user');
        redirect(base_url().'login');
    }
}
?>