

<table>


    <?php   foreach ($user as $key=>$value): ?>
     <?php   if($key !== 'password'): ?>
       <?php  echo "<tr><td align='right'>" . strtoupper($key) . "::</td><td>" . $value . "</td></tr>";?>
        <?php endif; ?>
        <?php endforeach; ?>



</table>
