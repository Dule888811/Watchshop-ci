<?php
class Users extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
             if($this->form_validation->run() == FALSE){
                  $data = array(
                      'errors' => validation_errors(),
                     );
                 $this->session->set_flashdata($data);
                 redirect($_SERVER['HTTP_REFERER']);
            }else {
                 $username = $this->input->post('username');
                 $password = $this->input->post('password');
                 $user_data = $this->user_model->login_user($username, $password);
                 $user_id = $user_data->user_id;
                 $first_name = $user_data->first_name;
                 $last_name = $user_data->last_name;
                 $email = $user_data->email;
                 $active = $user_data->active;
                 if($user_id){
                     $user_data = array(
                         'user_id' => $user_id,
                         'email' => $email,
                         'logged_in' => true,
                         'first_name' => $first_name,
                         'last_name'    => $last_name,
                         'active'    => $active
                     );
                     $this->session->set_userdata($user_data);
                     $this->session->set_flashdata('success', 'You are now logged in. Good for you.');
                     redirect($_SERVER['HTTP_REFERER']);
                 }else {
                     $this->session->set_flashdata('false', 'Wrong data');
                     redirect('home');
                 }
             }

       }
    public function logout(){
        $this->session->sess_destroy();
        redirect('Welcome');
    }
    public function register()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|min_length[2]|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]|is_unique[users.username]');
        if ($this->form_validation->run() == false) {
            $data['main'] = 'users/register';
            $this->load->view('layouts/main', $data);
        } else {
            if ($this->user_model->create_user()) {
                $this->session->set_flashdata('user_registered', 'User has been registered');

                redirect('welcome');
            } else {

            }
        }
    }

}