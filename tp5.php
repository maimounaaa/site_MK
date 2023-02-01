<html>
    <head>
        <meta chraset="utf-8">
</head>
<body>
    <h1> Affichage des donnees saisies</h1>
    <ul>
<?php
    $a=$_REQUEST['n1'];
    $b=$_REQUEST['n2'];
    $s=$a+$b;
    $p=$a*$b;
    $r=$a%$b;
    $d=$a/$b;
    echo 'voila la somme: '.$s '<br>';
    echo 'voila le produit: '.$p '<br>';
    echo 'voila le reste de la division: '.$r '<br>';
    echo 'voila la divison: '.$d '<br>';

    
?>

<a href="javascript:history.back()">< Essayez à nouveau </a>
    </body>
    </html>