<h1>Brendovi</h1>

<nav>
    <ul>
        <?php foreach($brends as $brend): ?>
            <?php echo  '<li><a href="' . base_url() . 'index.php/Articles/brendArticles/' . $brend->brend_id . '  ">' .$brend->brend_name . '</a></li>'; ?>
        <?php endforeach; ?>
    </ul>
</nav><br/><br/>
<?php if($articles): ?>
<?php foreach($articles as $article): ?>
        <div class="article">
            <img class="background" onerror="this.src = '<?php echo base_url(); ?>assetc/article_img/default.jpg'" src="<?php echo base_url(); ?>assetc/article_img/<?php echo $article->article_id ?>.jpg">
            <p id="name"><?php echo $article->article_name; ?></p>
            <a class="info" data-fancybox-type="iframe" href='<?php echo  base_url() . "index.php/Articles/atrilceData/" .$article->article_id ?> ' "><img id="article_info" src="<?php echo base_url(); ?>assetc/img/article_info.png"></a>
            <?php
            if($article->article_action == 'DA'){
                ?><img id="special_offer" src="<?php echo base_url(); ?>assetc/img/special_offer.png"></a><?php
            }
            ?>
            <a class="info" data-fancybox-type="iframe" href='<?php echo  base_url() . "index.php/Comments/index/" .$article->article_id ?> ' "><img id="comment" src="<?php echo base_url(); ?>assetc/img/comment.png"></a>
            <?php if($this->session->userdata('active') !== 2): ?>
            <a href="<?php echo  base_url() . "index.php/Carts/insert/" .$article->article_id  ?>  "><img id="buy" src="<?php echo base_url(); ?>assetc/img/buy.png"></a>
            <?php endif; ?>
            <p id="price"><?php echo $article->article_price; ?> din</p>
        </div>
<?php endforeach ?>
<?php else: ?>
<?php  echo 'Trenutno nema proizvoda ovog brenda. Posetite nas za nekoliko dana ponovo.'; ?>
<?php endif; ?>
