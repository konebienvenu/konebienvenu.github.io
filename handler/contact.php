<?php
  include("../partials/connect.php");
  $email= $_POST['email'];
  $msg= $_POST['msg'];
  $req = $bdd->prepare('INSERT INTO contact(email, msg) VALUES(:email, :msg)');
  $req->execute(array( 'email' => $email, 'msg' => $msg)); 
  echo 'vos informations ont bien été envoyé !';
?>