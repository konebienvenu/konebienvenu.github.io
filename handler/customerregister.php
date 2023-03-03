<?php 
include("../partials/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if($password==$password2){
 $req = $bdd->prepare('INSERT INTO customers(username,password) VALUES(:username,:password)');
 $req->execute(array('username' => $email, 'password' => $password)); 
 echo "<script> alert('Vous êtes inscrit !')
       window.location.href='../customerforms.php';
     </script>";
}
else{
 echo "<script> alert('Mot de passe non identique !')
       window.location.href='../customerforms.php';
     </script>";
      
}

?>