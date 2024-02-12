<html>
<body>
<?php 
include("color.php");
include("ListeEtudiant.php");
echo"<table border=5px><tr><th>Nom</th><th>Moyenne</th></tr>";
for ($i=0; $i < sizeof($tab); $i+=2)
{ 
    $c=Color($tab[$i+1]);
        echo" <tr style='background-color:$c;'><td> $tab[$i]  </td><td > {$tab[$i+1]} </td></tr>";
}
echo "</table>";
?>
</body>
</html>

//bgcolor=red style='background-color:red;' meme fonctionnement 
