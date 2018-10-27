<?php
class Comments extends CI_Controller{
public function __construct()
{
    parent::__construct();
    if(!$this->session->userdata('user_id') || $this->session->userdata('active') == 0){
        $this->session->set_flashdata('no_asccess','You have to be logged in ti visit this page');
        redirect($_SERVER['HTTP_REFERER']);
    }
}

public function index($article_id){
    $data['article_id'] = $article_id;
       $data['comments'] = $this->comment_model->getComment($article_id);
    $data['main'] = "comments/home";
    $this->load->view('layouts/main', $data);
}
public function insert($article_id)
{
           $comment = $this->input->post('comment');
           $user_id = $this->session->userdata('user_id');
       $this->comment_model->insertComment($article_id, $comment, $user_id);
           redirect($_SERVER['HTTP_REFERER']);

}
public function delete($comment_id)
{
    $this->comment_model->delete($comment_id);
       redirect($_SERVER['HTTP_REFERER']);

}

}

