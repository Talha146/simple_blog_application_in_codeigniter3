<?php
class Blog extends CI_controller{
    // public function __construct() {
    //     parent::__construct();
        
    //     // Check if the user is an admin
    //     if (!$this->session->userdata('logged_in')) {
    //         redirect(base_url().'login'); // Redirect to login if not logged in or not admin
    //     }
    // }

    function index(){
        $this->load->model('Blog_model');
        $blogs = $this->Blog_model->getAllBlogs();
        $data = array();
        $data['blogs'] = $blogs;
        $this->load->view('admin/blog/list',$data);
    }

    function add(){
        $this->load->model('Blog_model');

        $this->form_validation->set_rules('title','Title','trim|required');
        $this->form_validation->set_rules('description','Description','trim|required');
        $this->form_validation->set_rules('author','Author','trim|required');

        if ($this->form_validation->run() == true) {
            // do entry in db
            $formArray = array();
            $formArray['title'] = $this->input->post('title');
            $formArray['description'] = $this->input->post('description');
            $formArray['author'] = $this->input->post('author');
            $formArray['special'] = $this->input->post('special');
            $formArray['created_at'] = date('Y-m-d');

            $this->Blog_model->create($formArray);

            $this->session->set_flashdata('success','Blog created successfully!');
            redirect(base_url().'blog/index');
        } else {
            $this->load->view('admin/blog/add');
        }
    }

    function edit($id){
        $data = array();
        $this->load->model('Blog_model');

        $blog = $this->Blog_model->getBlog($id);
        if (empty($blog)) {
            $this->session->set_flashdata('success','Blog not found!');
            redirect(base_url().'blog/index');
        }

        $this->form_validation->set_rules('title','Title','trim|required');
        $this->form_validation->set_rules('description','Description','trim|required');
        $this->form_validation->set_rules('author','Author','trim|required');

        if ($this->form_validation->run() == true) {
            // do entry in db
            $formArray = array();
            $formArray['title'] = $this->input->post('title');
            $formArray['description'] = $this->input->post('description');
            $formArray['author'] = $this->input->post('author');
            $formArray['special'] = $this->input->post('special');

            $this->Blog_model->updateBlog($id,$formArray);

            $this->session->set_flashdata('success','Blog updated successfully!');
            redirect(base_url().'blog/index');
        } else {
            $data['blog'] = $blog;
            $this->load->view('admin/blog/edit',$data);
        }
    }

    function delete($id){
        $this->load->model('Blog_model');
        
        $blog = $this->Blog_model->getBlog($id);
        if (empty($blog)) {
            $this->session->set_flashdata('success','Blog not found!');
            redirect(base_url().'blog/index');
        }

        $this->Blog_model->deleteBlog($id);
        $this->session->set_flashdata('success','Blog deleted successfully!');
        redirect(base_url().'blog/index');
    } 

}
?>