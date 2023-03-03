<?php
 include('../partials/connect.php');
 $newid=$_GET['del_id'];
 $req = $bdd->prepare('DELETE FROM products WHERE id = :id');
 $req->execute(array('id' => $newid)); 
 if($req){
  header('location:productsshow.php');
 }
 else{
  echo ' Produit Non supprimer';
 }
 
?>