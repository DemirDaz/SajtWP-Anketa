<?php
session_start();
$odg = $_POST['input'];
$servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "gz_database";
   $db = new mysqli($servername,$username,$password,$dbname);
   $sql = "UPDATE registrovani SET poruka = '".$odg."'  WHERE username = '".$_SESSION["korisnik"]."' ";
  if( $db->query($sql) === TRUE ) { echo "Update is succseful!"; }
  else { echo "Error: ".$sql." <br> ".$db->error." ";}
session_destroy();

?>