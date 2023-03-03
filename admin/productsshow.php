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
        <small>Panneau administrateur</small>
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
	  <a href="products.php">
	    <button style="color:green">Ajouter un Nouveau</button>
	   </a>
	      <?php
		    include('../partials/connect.php');
			$req = $bdd->query('SELECT * FROM products'); 
			 while ($row = $req->fetch()){ ?>
			     <a href="proshow.php?pro_id=<?php echo $row['id'] ?>; ?>">
					 <h1><?php echo $row['id'] ?>: <?php echo $row['name'] ?></h1><br>
			     </a>
				 
				 <a href="proupdate.php?up_id=<?php echo $row['id'] ?>; ?>">
					 <button>Actualiser</button>
			     </a>
				 
				 <a href="prodelete.php?del_id=<?php echo $row['id'] ?>; ?>">
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
