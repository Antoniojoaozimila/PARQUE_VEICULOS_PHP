<?php
$server="localhost";
$user  ="root";
$senha ="";
$db    ="parque";

if($conn=mysqli_connect($server, $user, $senha, $db) ){
 //echo "Conectado com sucesso";
} else
echo "erro";


?>