


<table class="admin_table">
    <th>Naziv proizvoda</th>
    <th>Brend</th>

    <?php   foreach($articles as $article) :  ?>


    <tr>
        <td><?php echo $article->article_name ?></td>
        <td><?php echo $article->brend_name ?></td>
        <td><a class="edit" data-fancybox-type="iframe" href="<?php echo base_url(); ?>index.php/Admin/updateArticle/<?php echo $article->article_id  ?>"><img src="<?php echo base_url(); ?>assetc/img/edit.png"></a></td>

        <?php   if($article->article_action == 'NE'): ?>
            <td><a class="action_on" data-fancybox-type="iframe" href="<?php echo base_url(); ?>index.php/Admin/articleActionOn/<?php echo $article->article_id  ?>"><img class="reload" src="<?php echo base_url(); ?>assetc/img/action_off.png"></a></td>

        <?php  else :   ?>
            <td><a class="action_off" data-fancybox-type="iframe" href="<?php echo base_url(); ?>index.php/Admin/articleActionOff/<?php echo $article->article_id  ?>"><img class="reload" src="<?php echo base_url(); ?>assetc/img/action_on.png"></a></td>
            <?php endif;  ?>


        <td><a class="remove" data-fancybox-type="iframe" href="<?php echo base_url(); ?>index.php/Admin/articleDelete/<?php echo $article->article_id  ?>"><img class="reload" src="<?php echo base_url(); ?>assetc/img/remove.png"></a></td>
        <td><a class="info" data-fancybox-type="iframe" href="<?php echo base_url(); ?>index.php/Articles/atrilceData/<?php echo $article->article_id  ?>"><img src="<?php echo base_url(); ?>assetc/img/info.png"></a></td>

        <?php  if($article->article_lager == 0): ?>

            <td><a class="edit" data-fancybox-type="iframe" href="article_edit.php?id=<?php echo $article->article_id ?>"><img src="<?php echo base_url(); ?>assetc/img/warning.png"></a></td>
         <?php endif; ?>
    </tr>
    <?php endforeach; ?>
</table>
