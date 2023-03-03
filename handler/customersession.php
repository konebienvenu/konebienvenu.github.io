<?php
 if(empty($_SESSION['email'] AND $_SESSION['password'])){
  echo "<script>
       alert('Veuillez vous connecter à votre compte pour commencer');
	   window.location.href='customerforms.php';
       </script>";
 }
 
?>