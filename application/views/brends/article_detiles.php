<?php
?>
  <h3>Detaljno o proizvodu</h3>
         <img class="background" onerror="this.src = '<?php echo base_url(); ?>assetc/article_img/default.jpg'" src="<?php echo base_url(); ?>assetc/article_img/<?php echo  $article->article_id  ?>.jpg">
        <table>
            <tr>
                <th>Naziv:</th>
                <td><?php echo $article->article_name ?></td>
            </tr>
            <tr>
                <th>Opis:</th>
                <td><?php echo $article->article_description ?></td>
            </tr>
            <tr>
                <th>Tip:</th>
                <td><?php echo $article->article_type ?></td>
            </tr>
            <tr>
                <th>Brend:</th>
                <td><?php echo $article->brend_name ?></td>
            </tr>
            <tr>
                <th>Količina na lageru:</th>
                <td><?php echo $article->article_lager ?></td>
            </tr>
            <tr>
                <th>Cena:</th>
                <td><?php echo $article->article_price ?> dinara</td>
            </tr>
            <tr>
                <th>Prizvod na akciji:</th>
                <td><?php echo $article->article_action ?></td>
            </tr>
            <tr>
                <th>Više o brendu:</th>
                <td><?php echo $article->brend_description ?></td>
            </tr>
        </table>



