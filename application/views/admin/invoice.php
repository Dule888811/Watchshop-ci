<?php


//$cart_codes = Cart::getOpenCartCode();
?>
      <h1>Pregled faktura</h1>

<?php   if($carts):?>

        <h3>Otvorene fakture</h3>

    <?php   foreach ($carts as $cart):   ?>

                            <table>
                                <tr>
                                    <td>Naziv proizvoda: <?php echo  $cart->article_name ?></td>
                                </tr>
                                <tr>
                                    <td>Cena: <?php echo  $cart->article_price ?> din</td>
                                </tr>
                            </table>




                        <a href="<?php echo base_url(); ?>index.php/Admin/DeleteCart/<?php echo $cart->cart_code    ?>"><img style="float: right" title="Odobri fakturu" src="<?php echo base_url(); ?>assetc/img/approve_invoice.png"></img></a><br/><br/><hr>
    <?php endforeach; ?>

<?php  else : ?>
    <?php   echo 'Nema otvorenih faktura.'; ?>


<?php endif; ?>