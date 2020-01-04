<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
session_start();
$_SESSION["korisnik"]= $_POST["usrname"];
$myuser = $_POST['usrname'];
$mymail = $_POST['psw'];
$mymailrepeat = $_POST['psw-repeat'];
if($mymail != $mymailrepeat)
{echo '<script type="text/javascript"> alert("Mejlovi se ne poklapaju"); </script>';}
else proveri();
}

function proveri() 
{
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "gz_database";
   $db = new mysqli($servername,$username,$password,$dbname);
$myuser = $_POST['usrname'];
$mymail = $_POST['psw'];
$mydate = date("y/m/d");
$sql = "SELECT * from registrovani WHERE username = '$myuser' ";
$result = $db->query($sql); 
$count = mysqli_num_rows($result); 
if($count == 1 ) 
{	echo '<script type="text/javascript"> alert("Korisničko ime je zauzeto, probajte neko drugo"); </script>';
}
else 
{
$sql2 = "SELECT * from registrovani WHERE email = '$mymail' ";
$result = $db->query($sql); 
$count = mysqli_num_rows($result); 
if($count == 1 )  
{echo '<script type="text/javascript"> alert("Email je već korišćen, probajte sa nekim drugim."); </script>'; }
else 
{
$sql3 = "INSERT into registrovani (username,email,datum) VALUES ('".$myuser."','".$mymail."','".$mydate."')";
if($db->query($sql3) === TRUE) { echo '<script type="text/javascript"> alert("Uspešno ste se registrovali."); </script>';
header("Location: anketa.html");}
else
 {echo '<script type="text/javascript"> alert("Greška pri registraciji, pokušajte ponovo."); </script>';
 }
}
}
}


?>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style> 
body {width:100%;
	  height:100%;
	  background-image:url('896996.jpg');
	  background-size: cover;
	  background-position: center; /* Center the image */
	  background-repeat: no-repeat; /* Do not repeat the image */
		font-family: 'Helvetica', 'Arial', sans-serif;	}
table {empty-cells:show;
	   width:100%;
	   height:100%;
	   
		
	   }
tr {width:100%;
	height:20%;
}
td {
	width:31%;}
img {max-width:100%;
	 height:auto;
	 display:block;
	}
* {box-sizing: border-box}
.container {
  padding: 5%;
  background-color:rgb(254, 253, 251);
	border-radius: 20px;
}
input[type=text], input[type=email] {
  width: 100%;
  padding: 3%;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #eaeaea;
}
input[type=text]:focus, input[type=email]:focus {
  background-color: #d8d8d8;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 1.5em;
}
.registerbtn {
  background-color: #2597d8;
  color: white;
  padding: 1em 0.8em;
  margin: 0.5em 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius: 20px;
}
.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
	</style>
</head>
<body>
<table border='0'>
<tr><td></td>      <td></td>        <td> </td></tr>
<tr><td></td> <td rowspan='3'>
	<form action="login.php" method="POST">
	 <div class="container">
    <h1>Registracija</h1>
    <p>Molimo vas registrujte se, da bi nastavili dalje.</p>
    <hr>

    <label ><b>Korisničko ime</b></label>
    <input type="text" placeholder="Unesi željeno ime" name="usrname" required>

    <label><b>Email</b></label>
    <input type="email" placeholder="Unesi šifru" name="psw" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>

    <label ><b>Ponovi email</b></label>
    <input type="email" placeholder="Ponovi email" name="psw-repeat" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
    <hr>

    <p>Registrujući se, prihvatate naše <a href="#">Uslove & Pravila</a>.</p>
    <button type="submit" class="registerbtn">Registruj se</button>
  </div>
  </form>
</td> <td> </td></tr>
<tr><td></td>                       <td> </td></tr>
<tr><td></td>                       <td> </td></tr>
<tr><td></td>      <td></td>        <td> </td></tr>
</table>


</body>

</html>