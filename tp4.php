<html><body>
    <h1> Affichage des donnees saisies</h1>
    <ul>
<?php
    $a=$_REQUEST['t1'];
    $b=$_REQUEST['t2'];
    echo $a+$b;
    
?>

<a href="javascript:history.back()">< Essayez à nouveau </a>
    </body>
    </html>