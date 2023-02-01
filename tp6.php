<html>
    <head>
        <meta chraset="utf-8">
</head>
<body>
    <h1> Affichage des donnees saisies</h1>
    <ul>
<?php
    $a=$_REQUEST['m1'];
    $b=$_REQUEST['m2'];
   $op=$_REQUEST['m3'];
    $s=$a+$b;
    $p=$a*$b;
    $r=$a%$b;
    $d=$a/$b;
    if ($op=='+')
    echo 'voici la somme'. $s.'<br>';
    else if ($op=='*')
    echo 'voici le produit'. $s.'<br>';
    else if ($op=='%')
    echo 'voici le reste'. $s.'<br>';
    else if ($op=='/')
    echo 'voici la divison'. $s.'<br>';
    else if ($op=='<' or $op=='>')
    {
        if ($a<$b) echo 'est plus petit que';
        else echo $a. 'a est plus grand que '.$b;
    }
?>

<a href="javascript:history.back()">< Essayez à nouveau </a>
    </body>
    </html>