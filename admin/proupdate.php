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
	  <div class="col-sm-3">
	    
	  </div>
	   <div class="col-sm-6">
	      <form role="form" action="proupdatehandler.php" method ="post" enctype="multipart/form-data">
		   <?php
		    include('../partials/connect.php');
			$newid=$_GET['up_id'];
			$req = $bdd->prepare('SELECT * FROM products WHERE id = :id');
            $req->execute(array('id' => $newid)); 
			while ($row = $req->fetch()) 
           {?>
		   
		   <h1>Produits</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nom</label>
                  <input name="name" type="text" class="form-control" id="name" value="<?php echo $row['name'] ?>" placeholder="Enter product name">
                </div>
                <div class="form-group">
                  <label for="price">Prix</label>
                  <input name="price" type="text" class="form-control" id="price" value="<?php echo $row['price'] ?>" placeholder="price" >
                </div>
                <div class="form-group">
                  <label for="picture">Choisissez une image</label>
                  <input name="file" type="file" value="<?php echo $row['picture'] ?>" id="picture" >
                </div>
				 <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" class="form-control"  rows="10" value="<?php echo $row['description'] ?>" placeholder="price" > </textarea>
                </div>
				 <div class="form-group">
				  <label for="category">Categorie</label>
				  <select name="category" value="<?php echo $row['category']?>" id="category" >

				   <?php
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
			    <input type="hidden" value="<?php echo $row['id'] ?>" name="form_id">
                <button type="submit" class="btn btn-primary" name="update">Actualiser</button>
              </div>
            </form>
			
			<?php
		   } 
		   $req->closeCursor(); 
		   ?>
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
