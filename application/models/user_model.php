<?php
class User_model extends CI_Model
{
    public function login_user($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function create_user(){


        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username')
        );
        $input_data = $this->db->insert('users', $data);
        return $input_data;
    }
    public function allUsers()
    {
        $result = $this->db->get('users');
        return $result->result();
    }
    public  function changeUserActive($user_id, $active){
        $this->db->set('active', $active);
        $this->db->where('user_id',  $user_id);
        $this->db->update('users');

    }
    public  function removeUser($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->delete('users');
    }
    public function getUserDetails($user_id)
    {
        $this->db->select('
            users.*
            ');
        $this->db->from(' users');
        $this->db->where('user_id', $user_id);
        $results =  $this->db->get();
        if($results->num_rows() >0) {
            return $results->row();
        }else {
            return false;
        }
    }
}