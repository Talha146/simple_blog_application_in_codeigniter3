<?php
class Blog_model extends CI_model
{
    function create($formArray){
        $this->db->insert('blogs',$formArray);
    }

    function getAllBlogs() {
        $this->db->order_by('blog_id','DESC');
        $blogs = $this->db->get('blogs')->result_array();
        return $blogs;
    }

    function updateBlog($id,$formArray){
        $this->db->where('blog_id',$id);
        $this->db->update('blogs',$formArray);

    }

    function getBlog($id){
        $this->db->where('blog_id',$id);
        $blog = $this->db->get('blogs')->row_array();
        return $blog;
    }

    function deleteBlog($id){
        $this->db->where('blog_id',$id);
        $this->db->delete('blogs');
    }

    function getFeaturedBlogs() {
        $this->db->where('special','featured');
        $this->db->order_by('blog_id','DESC');
        $blogs = $this->db->get('blogs')->result_array();
        return $blogs;
    }

    function getPromoBlog() {
        $this->db->where('special','promo');
        $this->db->order_by('blog_id','DESC');
        $this->db->limit(1);
        $blogs = $this->db->get('blogs')->row_array();
        return $blogs;
    }
}

?>