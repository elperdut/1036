<?php
/**
 * * Descripción: Controlador principal
 * *
 * * Descripción extensa: Iremos añadiendo cosas complejas en PHP.
 * *
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 2

 * */
include("./gestionBD.php");

try {
    
    $table="A_cliente";
  
    $a=consultar($pdo,$table);
    if (1>$a) {echo "InCorrecto1";return ;}
    
    // Recibimos el ID por la url y lo mostramos por pantalla luego lo borraremos
    $id=$_GET['id'];
    echo $id;
    //var_dump($a);
    //var_dump($a[count($a)-1]['client_id']);
    borrar($pdo,$table,$id);
    //$a=consultar($pdo,$table);
    //echo count($a);
    //if (1>$a) echo "InCorrecto1";
	//unset ($pdo);
    
 	} 
    catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }

 ?>