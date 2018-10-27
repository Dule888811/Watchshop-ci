

  <?php  if($comments):  ?>

        <h3>Komentari o proizvodu</h3>
        <?php   foreach ($comments as $comment): ?>
                <h4><?php echo $comment->first_name ?></h4>
                <small><?php echo $comment->time ?></small>
                <p><?php echo $comment->comment ?></p>
  <?php  if($this->session->userdata('active') == 2): ?>
  <?php echo '<a href ="' . base_url() . 'index.php/Comments/delete/' . $comment->comment_id . '">Delete</a></br> ' ?>
      <?php endif; ?>
                <?php endforeach; ?>
                <hr>

      <?php $x = true; ?>
      <?php   foreach ($comments as $comment): ?>
          <?php if($x == true): ?>
              <form action="<?php echo   base_url() . 'index.php/Comments/insert/' . $comment->article_id .  '"' ?> method="POST">
                  <label for="comment">Vaš komentar</label></br>
                  <textarea cols=40 rows=5 name="comment"></textarea></br>
                  <input type="submit" value="Pošalji">
              </form>
              <?php $x = false; ?>
          <?php endif; ?>
      <?php endforeach; ?>

 <?php   else: ?>
   <?php     echo 'Nema komentara za ovaj proizvod.'; ?>

      <form action="<?php echo   base_url() . 'index.php/Comments/insert/' . $article_id .  '"' ?> method="POST">
      <label for="comment">Vaš komentar</label></br>
      <textarea cols=40 rows=5 name="comment"></textarea></br>
      <input type="submit" value="Pošalji">
      </form>

   <?php endif; ?>



