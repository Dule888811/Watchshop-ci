<?php
?>
<h3>Komentari o proizvodu</h3>
<?php   foreach ($comments as $comment): ?>
    <h4><?php echo $comment->first_name ?></h4>
    <small><?php echo $comment->time ?></small>
    <p><?php echo $comment->comment ?></p>
    <?php  if($this->session->userdata('active') == 2): ?>
        <?php echo '<a href ="<?php echo base_url() ?>index.php/Comments/delete/ <?php echo $comment->cooment_id ?> ">Delete</br> ' ?>
    <?php endif; ?>
<?php endforeach; ?>
<hr>

<form action="<?php echo base_url() ?>index.php/Comments/insert/ <?php echo $article_id ?> " method="POST">
    <label for="comment">Vaš komentar</label></br>
    <textarea cols=40 rows=5 name="comment"></textarea></br>
    <input type="submit" value="Pošalji">
</form>
