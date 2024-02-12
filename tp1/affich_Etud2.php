<html>
<body>
<?php 
include("color.php");
include("ListeEtudiant.php");
echo"<table border=5px><tr><th>Nom</th><th>Moyenne</th></tr>";
for ($i=0; $i < sizeof($tab); $i+=2)
{ 
    $c=Color($tab[$i+1]);
    $cle="$tab[$i]" ;
    $val="{$tab[$i+1]}";
?>
        <tr style='background-color:<?= $c ?>;'><td> <?=$cle ?> </td><td > <?= $val ?> </td></tr>";
<?php
}
echo "</table>";
?>
</body>
</html>
