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
        <small>Panneau Administration</small>
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
			$req = $bdd->prepare('SELECT * FROM orders WHERE id = :id');
            $req->execute(array('id' => $id)); 
			while ($row = $req->fetch()) 
           {?>
            <h3> N° client: <?php echo $row['customer_id']?></h3><hr><br> 
			<h3> Total: <?php echo $row['total']?></h3><hr><br>
			<h3> Adresse: <?php echo $row['address']?></h3><hr><br> 
		<?php
		} 
		  
		?>
	  </div>
	  
	  <div class="col-sm-9">
	      <?php
		    include('../partials/connect.php');
			$id=$_GET['pro_id'];
			$req = $bdd->prepare('SELECT * FROM order_details WHERE id = :id');
            $req->execute(array('id' => $id)); 
			while ($row = $req->fetch()) 
           {?>
            <h3> N° Produit: <?php echo $row['product_id']?></h3><hr><br> 
			<h3> Quantité: <?php echo $row['quantity']?></h3><hr><br>
	  </div>
	   <?php
		} 
		  
		?>
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
