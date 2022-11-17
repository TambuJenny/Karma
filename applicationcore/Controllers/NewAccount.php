<?php

include "connect.php";
include "globalFunctions.php";
include "components.php";

extract($_POST);

$global_Functions  = new GlobalFunctions();
$connection_Db = new ConnectionBd();
$con = $connection_Db->DbConnection();

if (
  isset($_POST['pNome']) &&
  isset($_POST['uNome']) &&
  isset($_POST['email']) &&
  isset($_POST['tele1']) &&
  isset($_POST['tele2']) &&
  isset($_POST['genero'])
) {

  $existeValue = $global_Functions->ExisteValue("USER", "EMAIL", $email);

  if ($existeValue) {

    echo json_encode(array("code_response" => 0));
    
  } else {

    $guid = bin2hex(openssl_random_pseudo_bytes(16));
    $query = "INSERT INTO `USER` (ID,PRIMEIRO_NOME,ULTIMO_NOME,EMAIL,TEL1,TEL2,GENERO)
      VALUES ('$guid','$pNome','$uNome','$email','$tele1','$tele2','$genero')";

    $result = mysqli_query($con, $query);

    echo json_encode(array("code_response" => 1));
  }
}
