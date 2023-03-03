<?php
  session_start();
  include("adminpartials/head.php");
  if(isset($_POST['login'])){
   include("../partials/connect.php");
   $email=$_POST['email'];
   $password=$_POST['password'];
   $req = $bdd->prepare('SELECT * FROM admins WHERE username = :username AND password = :password');
   $req->execute(array('username' => $email, 'password' => $password)); 
   $final = $req->fetch();
   
   $_SESSION['email']=$final['username'];
   $_SESSION['password']=$final['password'];
   
   if($email=$final['username'] AND $password=$final['password']){
      header('location: adminindex.php');
   }
   else{
    header('location: adminlogin.php');
	
   }
   
  }
  
  
  
  
?>
<div class="row">
    <div class="col-sm-4">
	</div>
	
	<div class="col-sm-4">
	            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Connexion administrateur</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="adminlogin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Adresse email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Mot de passe</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Mot de passe" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
        
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Annuler</button>
                <button type="submit" class="btn btn-info pull-right" name="login">Connexion</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
	</div>
	
	<div class="col-sm-4">
	</div>
	
  </div>