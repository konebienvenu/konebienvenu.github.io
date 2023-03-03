<?php
 include('../partials/connect.php');
  $newid=$_POST['form_id'];
  $newname=$_POST['name'];
  $newprice=$_POST['price'];
  $newdesc=$_POST['description'];
  $newcat=$_POST['category'];
  
  $target="../uploads/";
  $file_path=$target.basename($_FILES['file']['name']);
  $file_name=$_FILES['file']['name'];
  $file_tmp=$_FILES['file']['tmp_name'];
  $file_store="../uploads/".$file_name;
  move_uploaded_file($file_tmp,$file_store);
  
  $req = $bdd->prepare('UPDATE products SET name = :name, price = :price,description = :description, category_id = :category, picture = :picture WHERE id = :id');
  $req->execute(array( 'name' => $newname, 'price' => $newprice, 'description' => $newdesc, 'category' => $newcat, 'picture' => $file_path,'id' => $newid)); 
  if($req){
   header('location:productsshow.php');
  }
  else{
   header('location:adminindex.php');
  }
 
?>