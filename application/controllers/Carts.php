<?php
class Carts extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('user_id') || $this->session->userdata('active') == 0){
            $this->session->set_flashdata('no_asccess','You have to be logged in ti visit this page');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function insert($article_id)
    {
        $user_id = $this->session->userdata('user_id');
        $cart_code = $this->cart_model->get_cart_code($user_id);
        $this->cart_model->cartAdd($article_id, $user_id, $cart_code);


        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    public function drop($cart_id)
    {
        $this->cart_model->passiveCart($cart_id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    public function finish($user_id){
        $cart_code = $this->cart_model->get_cart_code($user_id);
        $this->cart_model->cartFinish($cart_code);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}