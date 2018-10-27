<!doctype html>
<html>
<head>
    <title>e Prodavnica</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetc/css/style.css" type="text/css">
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="<?php echo base_url()?>index.php/Welcome/index">POČETNA</a></li>
            <li><a href="<?php echo base_url()?>index.php/Articles/Brends">BRENDOVI</a></li>
        </ul>
    </nav><br/>
    <h1>e Prodavnica</h1>
    <img src="<?php echo base_url(); ?>assetc/img/img1.png" height=120px />
    <div class="clear"></div>
</header>
<div id="container">
<aside>
    <?php  if($this->session->userdata('active') == 2): ?>
    <?php  $this->load->view('users/admin.php') ?>
    <?php elseif($this->session->userdata('user_id') && $this->session->userdata('active') == 0): ?>
        <?php $this->load->view('users/unactivated.php') ?>
    <?php elseif($this->session->userdata('user_id')): ?>
    <?php   $this->load->view('users/loggedin.php') ?>
    <?php elseif(isset($_GET['widget']) == 'register'): ?>
      <?php  $this->load->view('users/register.php') ?>

  <?php   else: ?>
    <?php    $this->load->view('users/login.php') ?>
    <?php endif; ?>
</aside>
    <?php $this->load->view($main) ?>
</div>
<?php $this->load->view('users/footer.php') ?>
</body>
</html>
