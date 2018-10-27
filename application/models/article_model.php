<?php
class Article_model extends CI_Model
{
    public function getBrends()
    {
        $query = $this->db->get('brends');
        return $query->result();
    }

    public function brendArticles($id)
    {
        $this->db->select('
            articles.*,
            brends.*
            ');
        $this->db->from('articles');
        $this->db->join('brends', 'articles.brend_id = brends.brend_id');
        $this->db->where(' brends.brend_id', $id);
        $results = $this->db->get();
        if ($results->num_rows() > 0) {
            return $results->result();
        } else {
            return false;
        }
    }

    public function articleData($article_id)
    {
        $this->db->select('
            articles.*,
            brends.*
            ');
        $this->db->from('articles');
        $this->db->join('brends', 'articles.brend_id = brends.brend_id');
        $this->db->where(' articles.article_id', $article_id);
        $results = $this->db->get();
        if ($results->num_rows() > 0) {
            return $results->row();
        } else {
            return false;
        }
    }

    public function createArticle($data)
    {


        if (isset($_FILES['article_foto']) && $_FILES['article_foto']['error'] == UPLOAD_ERR_OK) {
            $target_dir = "assetc/article_img";
            $target_file = $target_dir . basename($_FILES["article_foto"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

            $check = getimagesize($_FILES["article_foto"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                echo "Izabrani fajl nije fotografija.";
                $uploadOk = 0;
            }

            if ($_FILES["article_foto"]["size"] > 500000) {
                echo "Fotografije mogu imati maksimalno 0.5 MB .";
                $uploadOk = 0;
            }

            if ($imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
                && $imageFileType != "GIF" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo "Dozvoljeno je kačiti samo JPG, PNG, JPEG i GIF fajlove.";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                echo "Došlo je do greške prilikom provere fajla.";
            } else {
                if (move_uploaded_file($_FILES["article_foto"]["tmp_name"], $target_dir . $this->db->insert_id() . "." . $imageFileType)) {
                    echo "Fotografija je uspešno uneta.";
                } else {
                    echo "Fotografija nije uspešno uneta.";
                }
            }
        } else {
            echo "<br/>Fotografija nije uneta!";
        }

        $input_data = $this->db->insert('articles', $data);
        return $input_data;
    }

    public function getArticles()
    {
        $this->db->select('
            articles.*,
            brends.*
            ');
        $this->db->from('articles');
        $this->db->join('brends', 'articles.brend_id = brends.brend_id');
        $results = $this->db->get();
        if ($results->num_rows() > 0) {
            return $results->result();
        } else {
            return false;
        }
    }


    public function changeArticleAction($article_id, $action)
    {
        $this->db->set('article_action', $action);
        $this->db->where('article_id', $article_id);
        $this->db->update('articles');

    }

    public function delete($article_id)
    {
        $this->db->where('article_id', $article_id);
        $this->db->delete('articles');
    }

    public function editArticle($article_id, $data)
    {
        if (isset($_FILES['article_foto']) && $_FILES['article_foto']['error'] == UPLOAD_ERR_OK) {
            $target_dir = "assetc/article_img";
            $target_file = $target_dir . basename($_FILES["article_foto"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

            $check = getimagesize($_FILES["article_foto"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                echo "Izabrani fajl nije fotografija.";
                $uploadOk = 0;
            }

            if ($_FILES["article_foto"]["size"] > 500000) {
                echo "Fotografije mogu imati maksimalno 0.5 MB .";
                $uploadOk = 0;
            }

            if ($imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
                && $imageFileType != "GIF" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo "Dozvoljeno je kačiti samo JPG, PNG, JPEG i GIF fajlove.";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                echo "Došlo je do greške prilikom provere fajla.";
            } else {
                if (move_uploaded_file($_FILES["article_foto"]["tmp_name"], $target_dir . $article_id . "." . $imageFileType)) {
                    echo "Fotografija je uspešno izmenjena.";
                } else {
                    echo "Fotografija nije uspešno izmenjena.";
                }
            }
        } else {
            echo "<br/>Fotografija nije uneta!";
        }
        $this->db->where('article_id', $article_id);
        $this->db->update('articles', $data);
    }
}