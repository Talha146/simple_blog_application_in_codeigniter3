<?php

class Home extends CI_controller
{
    function index(){
        $this->load->model('Blog_model');
        $data = array();
        $allBlogs = $this->Blog_model->getAllBlogs();
        $featuredBlogs = $this->Blog_model->getFeaturedBlogs();
        $promoBlog = $this->Blog_model->getPromoBlog();

        $data['allBlogs'] = $allBlogs;
        $data['featuredBlogs'] = $featuredBlogs;
        $data['promoBlog'] = $promoBlog;

        $this->load->view('home',$data);
    }     

    function blogDetail($id){
        $this->load->model('Blog_model');
        $this->load->model('Comment_model');

        $data = array();
        $blog = $this->Blog_model->getBlog($id);
        if (empty($blog)) {
            redirect(base_url());
        }
        $data['blog'] = $blog;
        
        $comments = $this->Comment_model->getCommentsOfABlog($id);
        $data['comments'] = $comments;

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('comment','Comment','required');
        
        if ($this->form_validation->run() == true) {
            //Save comment to database
            $formArray = array();
            $formArray['blog_id'] = $id;
            $formArray['name'] = $this->input->post('name');
            $formArray['comment'] = $this->input->post('comment');
            $formArray['created_at'] = date('Y-m-d');
            $this->Comment_model->create($formArray);

            $this->session->set_flashdata('msg','Comment saved successfully!');
            redirect(base_url().'home/blogDetail/'.$blog['blog_id']);
        } else {
            $this->load->view('detail',$data);
        }
    }
}

?>