<div class="widget">
                <h2>Registracija</h2>
                <div class="inner">
                <?php echo validation_errors(); ?>
                    <form action="<?php echo base_url() ?>index.php/Users/register" method="post">
                    <ul>
                        <li>
                            Username:<br/>
                            <input type="text" name="username" />
                        </li>
                        <li>
                            Password:<br/>
                            <input type="password" name="password" />
                        </li>
                        <li>
                            First name:<br/>
                            <input type="text" name="first_name" />
                        </li>
                        <li>
                            Last name:<br/>
                            <input type="text" name="last_name" />
                        </li>
                        <li>
                            E-mail :<br/>
                            <input type="text" name="email" />
                        </li>
                        <li>
                            <input class="btn" type="submit" value="Registruj me" />
                        </li>
                    </ul>
                  </form></br>
                    <p>Već ste registrovani?</p><div class="btn" onclick="location.href='index.php';">Ulogujte se ovde.</div>
                </div>
</div>