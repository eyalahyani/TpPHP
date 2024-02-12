<?php
if (isset($_POST['mdp']) and isset($_POST['login']))
{$l=$_POST['login'];
    $m=$_POST['mdp'];
if ($l=="admin" and $m=="admin")
{
echo "Vous avez saisi '"
.$_POST['mdp']."'\n" ;
}
else
echo "incorrecte \n";
}
else
header("location:authentification.html") ;
?>