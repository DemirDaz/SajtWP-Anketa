<?php
   
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "gz_database";
   $db = new mysqli($servername,$username,$password,$dbname);
   $sql = "SELECT * FROM registrovani WHERE NOT username = 'tajnastranica'";
   $result = $db->query($sql);
   $stil="border:1px";
   echo "<tr><th>Username</th><th>Email</th><th>Poruka</th><th> odg1 </th><th> odg2 </th><th> odg3 </th><th> odg4 </th><th> odg5 </th><th> odg6 </th><th> odg7 </th><th> odg8 </th><th> odg9 </th><th> odg10 </th><th> odg11 </th><th> odg12 </th><th> odg13 </th><th> odg14 </th><th> odg15 </th><th> </th></tr>";
   if($result->num_rows > 0) { //kod row mora "" da bi se pristupilo koloni
	   while($row=$result->fetch_assoc()) {
		   echo "<tr><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["poruka"]."</td><td>".$row["odg1"]."</td><td>".$row["odg2"]."</td><td>".$row["odg3"]."</td><td>".$row["odg4"]."</td><td>".$row["odg5"]."</td><td>".$row["odg6"]."</td><td>".$row["odg7"]."</td><td>".$row["odg8"]."</td><td>".$row["odg9"]."</td><td>".$row["odg10"]."</td><td>".$row["odg11"]."</td><td>".$row["odg12"]."</td><td>".$row["odg13"]."</td><td>".$row["odg14"]."</td><td>".$row["odg15"]."</td><td><a href=phpbrisi.php?id=".$row["username"]." >Izbrisi</a></td></tr>";
	   }
	   
	   
   } else { echo "Error: ".$sql."  ".$db->error." ";}
 
?>