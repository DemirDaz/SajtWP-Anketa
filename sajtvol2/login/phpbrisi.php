<?php
   $idbrisanja = $_GET['id'];
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "gz_database";
   $db = new mysqli($servername,$username,$password,$dbname);
   $sql = "DELETE FROM registrovani WHERE username = '".$idbrisanja."' ";
   if( $db->query($sql) === TRUE) { echo "Uspešno obrisan."; header("Location:misticnastranica.html");}
   else { echo "Error: ".$sql."  ".$db->error." ";}
 
?>