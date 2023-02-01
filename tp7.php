<html>
    <head>
        <meta chraset="utf-8">
</head>
<body>
    <h1> Affichage des donnees saisies</h1>
    <ul>
<?php
    $a=$_REQUEST['t1'];
    $b=$_REQUEST['t2'];
    
    if ($a == "admin" and $b == "admin")
    {
       echo 'Vous etes bien connecte:   ';
    }
    else
    {
        echo 'Mot de passe Errone:';
    }
   
?>
</html>