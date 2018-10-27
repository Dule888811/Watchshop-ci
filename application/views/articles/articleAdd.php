
<?php echo validation_errors(); ?>
<h3>Dodavanje novog artikla</h3>
<form action="<?php echo base_url(); ?>index.php/Admin/addWatch/" method="POST" enctype="multipart/form-data" style="margin-left: 20px">
    <table>
        <tr>
            <td>Naziv: </td>
            <td>
                <input name="article_name" type="text">
            </td>
        </tr>
        <tr>
            <td>Cena: </td>
            <td>
                <input name="article_price" type="text" value="">
            </td>
        </tr>
        <tr>
            <td>Stanje na lageru: </td>
            <td>
                <input name="article_lager" type="text" value="">
            </td>
        </tr>
        <tr>
            <td>Tip: </td>
            <td>
                <select name="article_type">
                    <option value="Muški">Muški</option>
                    <option value="Ženski">Ženski</option>
                    <option value="Dečji">Dečji</option>
                    <option value="Unisex">Unisex</option>
                </select>

            </td>
        </tr>
        <tr>
            <td>Brend: </td>
            <td>
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
                <textarea name="article_description" rows=10 cols=35></textarea>
            </td>
        </tr>
        <tr>
            <td>Fotografija: </td>
            <td>
                <input name="article_foto" type="file">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Dodaj novi artikal">
            </td>
        </tr>
    </table>
</form>
