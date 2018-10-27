<div class="widget">
                <h2>Ulogovani ste</h2>
                <div class="inner">

               <?php    //   $user_data = User::userData($_SESSION['user_id'], 'username', 'first_name', 'last_name', 'email'); ?>
               <?php      $cart =$this->cart_model->getCart($this->session->userdata('user_id')); ?>

                <table>
                <tr>
                      <td><b>Ime:</b></td>
                      <td><?php echo $this->session->userdata('first_name')  ?></td>
                </tr>
                <tr>
                      <td><b>Prezime:</b></td>
                      <td><?php echo $this->session->userdata('last_name') ?></td>
                </tr>
                <tr>
                      <td><b>E-mail:</b></td>
                      <td><?php echo $this->session->userdata('email') ?></td>
                </tr>
                </table></br>
                
                <?php if(!empty($cart)):  ?>

                                <hr>
                                    <h3>Korpa</h3>


                                        <?php    foreach($cart as $item):  ?>

                    <?php echo $item->article_name . " " . $item->article_price . " " ?><a href="<?php echo base_url(); ?>/index.php/Carts/drop/<?php echo $item->cart_id ?>" <?php echo base_url(); ?>assetc/img/drop.png""><img src="<?php echo base_url(); ?>assetc/img/drop.png"></a></br>


                                                


                                         <?php endforeach; ?>

                                    <div class="btn" onclick="location.href='<?php echo base_url(); ?>/index.php/Carts/finish/<?php echo $this->session->userdata('user_id'); ?> '">Završi kupovinu</div>
                                <hr>

                                    <?php endif; ?>

                </div>
                <div class="btn" onclick="location.href='<?php echo base_url() ?>index.php/Users/logout';">Odjava</div>

</div>