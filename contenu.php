<?php
sleep(1);
$message=$_POST["message"];
$nbr=$_POST["nbr"];
for ($i=1; $i<$nbr+1 ; $i++)
  //echo "saisir la ligne numéro $i<br />";
  echo "$message $i<br />";
 ?>
