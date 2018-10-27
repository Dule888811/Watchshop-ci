<?php
class Articles extends CI_Controller
{
    public function Brends()
    {
        $data['brends'] = $this->article_model->getBrends();
        $data['main'] = "brends/brend_meny";
        $this->load->view('layouts/main', $data);
    }
    public function brendArticles($id)
    {
        $data['brends'] = $this->article_model->getBrends();
        $data['articles'] = $this->article_model->brendArticles($id);
        $data['main'] = "brends/brend_articles";
        $this->load->view('layouts/main', $data);
    }
    public function atrilceData($article_id){
        $data['article'] = $this->article_model->articleData($article_id);
        $data['main'] = "brends/article_detiles";
        $this->load->view('layouts/main', $data);
    }
}