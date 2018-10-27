<div class="widget">
                <h2>Administrator</h2>
                <div class="inner">
                    <?php
                        //  $user_data = User::getUserDetails($_SESSION['user_id']);
                    ?>
                    <table>
                    <tr>
                          <td><b>Ime:</b></td>
                          <td><?php echo $this->session->userdata('first_name'); ?></td>
                    </tr>
                    <tr>
                          <td><b>Prezime:</b></td>
                          <td><?php echo $this->session->userdata('first_name'); ?></td>
                    </tr>
                    <tr>
                          <td><b>E-mail:</b></td>
                          <td><?php echo $this->session->userdata('email'); ?></td>
                    </tr>
                    <tr>
                        
                    </tr>
                    </table><h2></h2>
                    <div class="btn" onclick="location.href='<?php echo base_url(); ?>index.php/Admin/editUsers';">Editovanje korisnika</div>
                    <div class="btn" onclick="location.href='<?php echo base_url() ?>index.php/Admin/editArticles';">Editovanje</div>
                    <div class="btn" onclick="location.href='<?php echo base_url(); ?>index.php/Admin/addWatch';">Dodavanje novog artikla</div>
                    <div class="btn" onclick="location.href='<?php echo base_url(); ?>index.php/Admin/invoice';">Otvorene fakture</div>
                    <div class="btn" onclick="location.href='<?php echo base_url() ?>index.php/Users/logout';">Odjava</div>
                </div>
</div>