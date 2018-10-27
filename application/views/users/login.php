<div class="widget">
                <h2>Logovanje</h2>
                <div class="inner">
                        <?php if($this->session->flashdata('success')):?>
                        <?php   echo $this->session->flashdata('success');?>
                        <?php  endif; ?>
                        <?php   if( $this->session->set_flashdata('false')): ?>
                        <?php echo $this->session->set_flashdata('false'); ?>
                         <?php endif; ?>
                    <form action="<?php echo base_url() ?>index.php/Users/login " method="POST">
                        <ul id="login">
                            <li>
                                Korisničko ime:<br/>
                                <input type="text" name="username">
                            </li>
                            <li>
                                Lozinka:<br/>
                                <input type="password" name="password">
                            </li>
                            <li>
                                <input class="btn" type="submit" value="Uloguj se">
                            </li><br/></br>
                            <li>
                                <div class="btn" onclick="location.href='<?php echo base_url() ?>index.php/Users/register';">Registracija</div>
                            </li>
                        </ul>
                    </form>
                </div>
</div>