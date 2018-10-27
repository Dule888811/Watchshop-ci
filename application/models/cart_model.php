<?php
class Cart_model extends CI_Model
{

    public function getCart($user_id){
        $this->db->select('
            articles.*,
            carts.*
            ');
        $this->db->from('articles');
        $this->db->join('carts', 'articles.article_id = carts.article_id');
        $this->db->where(' carts.user_id' , $user_id);
        $this->db->where('cart_user_status', 0);
        $results =  $this->db->get();
        if($results->num_rows() >0) {
            return $results->result();
        }else {
            return false;
        }
    }
    public  function get_cart_code($user_id){
        $this->db->distinct('cart_code');
        $this->db->from('carts');
        $this->db->where(' carts.user_id' , $user_id);
        $this->db->where(' carts.cart_user_status' , 0);
        $results = $this->db->get();
        if($results->num_rows() >0) {
            return $results->row()->cart_code;
        }else {
            return date("ymdhis") . rand(0, 1000);
        }
    }
    public function cartAdd($article_id, $user_id, $cart_code)
    {
        $data = array(
            'user_id' =>  $user_id,
            'article_id' => $article_id,
            'cart_code' =>   $cart_code
        );
        $input_data = $this->db->insert('carts', $data);
        return $input_data;
    }
    public function passiveCart($cart_id){

        $this->db->where('cart_id',  $cart_id);
        $this->db->delete('carts');
    }
    public function cartFinish($cart_code)
    {
        $this->db->set('cart_user_status', 1);
        $this->db->where('cart_code',  $cart_code);
        $this->db->update('carts');

    }
    public function deleteCartt($cart_code)
    {
        $this->db->where('cart_code',  $cart_code);
        $this->db->delete('carts');
    }
    public  function getOpenCartCode(){
        $this->db->select('
            articles.*,
            carts.*
            ');
        $this->db->from('articles');
        $this->db->join('carts', 'articles.article_id = carts.article_id');
        $this->db->where('cart_admin_status',  0);
        $this->db->where('cart_user_status',  1);
        $results =  $this->db->get();
        if($results->num_rows() >0) {
            return $results->result();
        }else {
            return false;
        }
    }
    public  function getCartByCode($cart_code){
        $this->db->select('
            articles.*,
            carts.*,
            users.*
            ');
        $this->db->from('articles');
        $this->db->join('carts', 'articles.article_id = carts.article_id');
        $this->db->join('users', 'carts.user_id = users.user_id');
        $this->db->where('cart_admin_status',  0);
        $this->db->where('cart_user_status',  1);
        $this->db->where('cart_code',  $cart_code);
        $results =  $this->db->get();
        if($results->num_rows() >0) {
            return $results->result();
        }else {
            return false;
        }
    }


}