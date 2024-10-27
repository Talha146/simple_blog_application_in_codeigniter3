<?php
class Comment_model extends CI_model
{
    function create($formArray){
        $this->db->insert('comments',$formArray);
    }

    function getAllComments() {
        $this->db->order_by('comment_id','DESC');
        $comments = $this->db->get('comments')->result_array();
        return $comments;
    }

    function getCommentsOfABlog($blog_id) {
        $this->db->order_by('comment_id','DESC');
        $this->db->where('blog_id',$blog_id);
        $this->db->where('status','Active');
        $comments = $this->db->get('comments')->result_array();
        return $comments;
    }

    function updateComment($id,$formArray){
        $this->db->where('comment_id',$id);
        $this->db->update('comments',$formArray);

    }

    function getComment($id){
        $this->db->where('comment_id',$id);
        $comment = $this->db->get('comments')->row_array();
        return $comment;
    }

    function deleteComment($id){
        $this->db->where('comment_id',$id);
        $this->db->delete('comments');
    }

}

?>