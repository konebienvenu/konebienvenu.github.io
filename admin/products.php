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
	  <div class="col-sm-3">
	    
	  </div>
	   <div class="col-sm-6">
	      <form role="form" action="producthandler.php" method ="post" enctype="multipart/form-data">
		   <h1>Produits</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nom</label>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Entrer le nom du produit">
                </div>
                <div class="form-group">
                  <label for="price">Prix</label>
                  <input name="price" type="text" class="form-control" id="price" placeholder="Entrer le prix">
                </div>
                <div class="form-group">
                  <label for="picture">Choisissez une image</label>
                  <input name="file" type="file" id="picture">
                </div>
				 <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" class="form-control"  rows="10" placeholder="Description du produit" > </textarea>
                </div>
				 <div class="form-group">
				  <label for="category">Categorie</label>
				  <select name="category" id="category">
				   <?php
				    include("../partials/connect.php");
					$req = $bdd->query('SELECT * FROM categories'); 
					while ($row = $req->fetch()){
					 echo"<option value=".$row['id'].">".$row['name']."</option>";
					}
					$req->closeCursor();
				   ?>
				  </select>
				 </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
            </form>
		<div>
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
