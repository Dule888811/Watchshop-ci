<?php
?>
<h1>Brendovi</h1>

<nav>
    <ul>
<?php foreach($brends as $brend): ?>
<?php echo  '<li><a href="' . base_url() . 'index.php/Articles/brendArticles/' . $brend->brend_id . '  ">' .$brend->brend_name . '</a></li>'; ?>
 <?php endforeach; ?>
    </ul>
</nav><br/><br/>