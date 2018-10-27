<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('active') == 2) {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function editUsers()
    {
        $data['users'] = $this->user_model->allUsers();
        $data['main'] = "admin/edit_users";
        $this->load->view('layouts/main', $data);
    }

    public function activateUser($user_id)
    {
        if ($this->user_model->changeUserActive($user_id, 1)) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "Došlo je do greške prilikom aktivacije korisnika. Obratite se tehničkoj podršci.";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function blockUser($user_id)
    {
        if ($this->user_model->changeUserActive($user_id, 0)) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "Došlo je do greške prilikom aktivacije korisnika. Obratite se tehničkoj podršci.";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function deleteUser($user_id)
    {
        $this->user_model->removeUser($user_id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function userData($user_id)
    {
        $data['user'] = $this->user_model->getUserDetails($user_id);
        $data['main'] = "users/details";
        $this->load->view('layouts/main', $data);
    }

    public function addWatch()
    {
        $this->form_validation->set_rules('article_name', 'Article name', 'required|trim|min_length[2]');
        $this->form_validation->set_rules('article_price', 'Article price', 'integer|trim|required');
        $this->form_validation->set_rules('article_lager', 'Article lager', 'integer|required|trim');
        $this->form_validation->set_rules('article_type', 'Article type', 'required|trim');
        $this->form_validation->set_rules('brend_id', 'Brend', 'required|trim');
        $this->form_validation->set_rules('article_description', 'Article description', 'required|trim|min_length[5]');
        if ($this->form_validation->run() == false) {
            $data['main'] = "articles/articleAdd";
            $this->load->view('layouts/main', $data);
        } else {

            $data = array(
                'article_name' => $this->input->post('article_name'),
                'article_price' => $this->input->post('article_price'),
                'article_lager' => $this->input->post('article_lager'),
                'article_type' => $this->input->post('article_type'),
                'brend_id' => $this->input->post('brend_id'),
                'article_description' => $this->input->post('article_description')
            );
            if ($this->article_model->createArticle($data)) {
                redirect($_SERVER['HTTP_REFERER']);
            }

        }
    }

    public function editArticles()
    {
        $data['articles'] = $this->article_model->getArticles();
        $data['main'] = "articles/edit";
        $this->load->view('layouts/main', $data);
    }

    public function updateArticle($article_id)
    {
        $this->form_validation->set_rules('article_name', 'Article name', 'required|trim|min_length[2]');
        $this->form_validation->set_rules('article_price', 'Article price', 'integer|trim|required');
        $this->form_validation->set_rules('article_lager', 'Article lager', 'integer|required|trim');
        $this->form_validation->set_rules('article_type', 'Article type', 'required|trim');
        $this->form_validation->set_rules('brend_id', 'Brend', 'required|trim');
        $this->form_validation->set_rules('article_description', 'Article description', 'required|trim|min_length[5]');
        if ($this->form_validation->run() == false) {
            $data['articles'] = $this->article_model->getArticles();
            $data['old'] = $this->article_model->articleData($article_id);
            $data['main'] = "articles/update";
            $this->load->view('layouts/main', $data);
        } else {
            $data = array(
                'article_name' => $this->input->post('article_name'),
                'article_price' => $this->input->post('article_price'),
                'article_lager' => $this->input->post('article_lager'),
                'article_type' => $this->input->post('article_type'),
                'brend_id' => $this->input->post('brend_id'),
                'article_description' => $this->input->post('article_description')
            );
            $this->article_model->editArticle($article_id, $data);
        }
    }

    public function articleActionOn($article_id)
    {
        $this->article_model->changeArticleAction($article_id, 'DA');
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

    public function articleActionOff($article_id)
    {
        $this->article_model->changeArticleAction($article_id, 'NE');
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

    public function articleDelete($article_id)
    {
        $this->article_model->delete($article_id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

    public function editWatch($article_id)
    {
        $this->form_validation->set_rules('article_name', 'Article name', 'required|trim|min_length[2]');
        $this->form_validation->set_rules('article_price', 'Article price', 'integer|trim|required');
        $this->form_validation->set_rules('article_lager', 'Article lager', 'integer|required|trim');
        $this->form_validation->set_rules('article_type', 'Article type', 'required|trim');
        $this->form_validation->set_rules('brend_id', 'Brend', 'required|trim');
        $this->form_validation->set_rules('article_description', 'Article description', 'required|trim|min_length[5]');
        if ($this->form_validation->run() == false) {
            $data['old'] = $this->article_model->articleData($article_id);
            $data['main'] = "articles/update";
            $this->load->view('layouts/main', $data);
        } else {

            $data = array(
                'article_id' => $article_id,
                'article_name' => $this->input->post('article_name'),
                'article_price' => $this->input->post('article_price'),
                'article_lager' => $this->input->post('article_lager'),
                'article_type' => $this->input->post('article_type'),
                'brend_id' => $this->input->post('brend_id'),
                'article_description' => $this->input->post('article_description')
            );
            if ($this->article_model->editArticle($data)) {
                redirect($_SERVER['HTTP_REFERER']);
            }

        }
    }

    public function DeleteCart($cart_code)
    {
        $this->cart_model->deleteCartt($cart_code);
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

    public function invoice()
    {
        $cart_codes = $this->cart_model->getOpenCartCode();
        if ($cart_codes) {
            ?>
            <h3>Otvorene fakture</h3>
            <?php
            foreach ($cart_codes as $code) {
                $carts = $this->cart_model->getCartByCode($code->cart_code);
                $x = true;
                foreach ($carts as $cart) {
                    if ($x) {
                        echo "Kupac: " . $cart->first_name;
                        $x = false;
                    }
                    ?>
                    <table>
                        <tr>
                            <td>Naziv proizvoda: <?php echo $cart->article_name ?></td>
                        </tr>
                        <tr>
                            <td>Cena: <?php echo $cart->article_price ?> din</td>
                        </tr>
                    </table>
                    <?php
                }
                ?>
                <a href="<?php echo base_url(); ?>index.php/Admin/DeleteCart/<?php echo $code->cart_code ?>"><img
                        style="float: right" title="Odobri fakturu"
                        src="<?php echo base_url(); ?>assetc/img/approve_invoice.png"></img></a><br/><br/>
                <hr>
                <?php

            }
        }else {
            $data['main'] = "admin/success";
            $this->load->view('layouts/main', $data);
        }

    }
}

