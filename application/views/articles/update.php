
<?php echo validation_errors(); ?>
<h3>Editovanje</h3>
<form action="" method="POST" enctype="multipart/form-data" style="margin-left: 20px">
    <table>
        <tr>
            <td>Naziv proizvoda: </td>
            <td>
                <input name="article_name" type="text" value="<?php echo $old->article_name; ?>">
            </td>
        </tr>
        <tr>
            <td>Cena: </td>
            <td>
                <input name="article_price" type="text" value="<?php echo $old->article_price; ?>">
            </td>
        </tr>
        <tr>
            <td>Stanje na lageru: </td>
            <td>
                <input name="article_lager" type="text" value="<?php echo $old->article_lager; ?>">
            </td>
        </tr>
        <tr>
            <td>Tip: </td>
            <td><?php echo $old->article_type; ?>
                <select name="article_type">
                    <option value="Muški">Muški</option>
                    <option value="Ženski">Ženski</option>
                    <option value="Dečji">Dečji</option>
                </select>

            </td>
        </tr>
        <tr>
            <td>Brend: </td>
            <td><?php echo $old->brend_name; ?>
                <select name="brend_id">
                    <option value="1">ARMANI EXCHANGE</option>
                    <option value="2">CASIO</option>
                    <option value="3">DIESEL</option>
                    <option value="4">FOSSIL</option>
                    <option value="5">HUGO BOSS</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Opis: </td>
            <td>
                <textarea name="article_description" rows=10 cols=35><?php echo $old->article_description; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Fotografija: </td>
            <td>
                <img onerror="this.src = '<?php echo base_url(); ?>assetc/article_img/default.jpg'" src="<?php echo base_url(); ?>assetc/article_img/<?php echo $old->article_id ?>.jpg">
            </td>
        </tr>
        <tr>
            <td>Izmeni fotografiju: </td>
            <td>
                <input name="article_foto" type="file">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Izmeni">
            </td>
        </tr>
    </table>
</form>
