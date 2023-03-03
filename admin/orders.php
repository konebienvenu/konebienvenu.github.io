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
			$req = $bdd->query('SELECT * FROM orders'); 
			 while ($row = $req->fetch()){ ?>
			     <a href="ordershow.php?pro_id=<?php echo $row['id'] ?>; ?>">
					 <h1>N°: <?php echo $row['id'] ?> - Téléphone: <?php echo $row['phone']?> - Total: <?php echo $row['total'] ?></h1><br>
			     </a>
				 
				 <a href="orderdelete.php?del_id=<?php echo $row['id'] ?>; ?>">
					 <button style="color:red">Supprimer</button>
			     </a><hr>
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
