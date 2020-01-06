<?php
session_start();
$odg = $_POST['input'];
 $br = $_POST['kaunter'];
 $izbor = 'odg'.$br;
 $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "gz_database";
   $db = new mysqli($servername,$username,$password,$dbname);
   $sql = "UPDATE registrovani SET ".$izbor." = '".$odg."'  WHERE username = '".$_SESSION["korisnik"]."' ";
  if( $db->query($sql) === TRUE ) { echo "Update is succseful!"; }
  else { echo "Error: ".$sql." <br> ".$db->error." ";}


?>