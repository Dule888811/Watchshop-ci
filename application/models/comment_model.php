<?php
class comment_model extends CI_Model
{
    public function getComment($article_id){
        $this->db->select('
            comments.*,
            users.*
            ');
        $this->db->from('comments');
        $this->db->join('users', 'comments.user_id = users.user_id');
        $this->db->where(' comments.article_id' , $article_id);
        $results =  $this->db->get();
        if($results->num_rows() >0) {
            return $results->result();
        }else {
            return false;
        }
    }

    public  function insertComment($article_id,$comment,$user_id)
    {
        $data = array(
            'user_id' => $user_id,
            'article_id' => $article_id,
            'comment' => $comment
        );

        $this->db->insert('comments', $data);


    }
    public function delete($comment_id){
        $this->db->where('comment_id', $comment_id);
        $this->db->delete('comments');
    }
}
