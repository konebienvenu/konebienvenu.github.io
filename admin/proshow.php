<!DOCTYPE html>
<html>
<?php
  include("adminpartials/session.php");
  include("adminpartials/head.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
   include("adminpartials/header.php");
  ?>
  <!-- Left side column. contains the logo and sidebar -->
   <?php
     include("adminpartials/aside.php");
   ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tableau de Bord
        <small>Panneau Administrateur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Tableau de bord</li>
      </ol>
    </section>
    
    <!-- Main content -->
	<section class="content">
	  <!-- Small boxes (stat box)-->
	  <div class="row">
	  <div class="col-sm-9">
	      <?php
		    include('../partials/connect.php');
			$id=$_GET['pro_id'];
			$req = $bdd->prepare('SELECT * FROM products WHERE id = :id');
            $req->execute(array('id' => $id)); 
			while ($row = $req->fetch()) 
           {?>
            <h3> Nom: <?php echo $row['name']?></h3><hr><br> 
			<h3> Prix: <?php echo $row['price']?></h3><hr><br>
			<h3> Description: <?php echo $row['description']?></h3><hr><br>
			<img src="<?php echo $row['picture']?>" alt="No file" style="height:300px; width:300px">
           <?php
		   } 
		  
		  ?>
		  
	  </div>
	   
		<div class="col-sm-3">
		 
		</div>
	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php
    include("adminpartials/footer.php");
   ?>
</body>
</html>
