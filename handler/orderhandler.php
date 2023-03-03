<?php 
 session_start();
 include('../partials/connect.php');
 $total= $_POST['total'];
 $phone= $_POST['phone'];
 $address= $_POST['address'];
 $customerid=$_SESSION['customerid'];
 $payment=$_POST['payment'];
 
 $req = $bdd->prepare('INSERT INTO orders(customer_id,address,phone,total,pay_method) VALUES(:customer_id, :address, :phone, :total,:pay_method)');
 $req->execute(array('customer_id' => $customerid, 'address' => $address, 'phone' => $phone, 'total' => $total, 'pay_method' => $payment)); 
 
 $req = $bdd->query('SELECT id FROM orders order by id DESC limit 1');
 $final = $req->fetch();
 $orderid=$final['id'];
 foreach($_SESSION['cart'] as $key => $value){
  $proid=$value['item_id'];
  $quantity=$value['quantity'];
 $req = $bdd->prepare('INSERT INTO order_details(order_id,product_id,quantity) VALUES(:order_id, :product_id, :quantity)');
 $req->execute(array('order_id' => $orderid, 'product_id' => $proid, 'quantity' => $quantity)); 
 }
 if($payment=="Paypal"){
  $_SESSION['total']=$total;
  header('location: paypal.php');
 }
 else{
 echo"<script>
     alert('Votre commande a été enregistré avec succès !');
	 window.location.href='../index.php';
 </script>";
 }
?>