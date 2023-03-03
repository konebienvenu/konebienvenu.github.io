<?php
  include("../partials/connect.php");
  $name= $_POST['name'];
  $req = $bdd->prepare('INSERT INTO categories(name) VALUES(:name)');
  $req->execute(array( 'name' => $name)); 
  header('location:productsshow.php');
?>
