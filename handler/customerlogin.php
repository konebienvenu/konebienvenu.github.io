<?php
  session_start();
  if(isset($_POST['login'])){
   include("../partials/connect.php");
   $email=$_POST['email'];
   $password=$_POST['password'];
   $req = $bdd->prepare('SELECT * FROM customers WHERE username = :username AND password = :password');
   $req->execute(array('username' => $email, 'password' => $password)); 
   $final = $req->fetch();
   
   $_SESSION['email']=$final['username'];
   $_SESSION['password']=$final['password'];
   $_SESSION['customerid']=$final['id'];
   
   if($email=$final['username'] AND $password=$final['password']){
      header('location: ../cart.php');
   }
   else{
    echo "<script>
	     alert('Adresse email ou Mot de passe invalide !');
		 window.location.href='../customerforms.php';
	      </script>";
   }
  }
  
?>
