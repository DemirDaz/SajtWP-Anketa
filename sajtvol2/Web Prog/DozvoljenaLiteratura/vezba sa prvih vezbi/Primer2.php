<?php
if (isset($_POST["submit"]))
{
$username=$_POST["korisnicko"];
echo $username."<br/>";
$lozinka=$_POST["lozinka"];
echo $lozinka."<br/>";
$nacin=$_POST["nacin"];
echo $nacin."<br/>";
$knjiga=$_POST["knjiga"];
echo $knjiga."<br/>";
$cd=$_POST["cd"];
echo $cd."<br/>";
$komentar=$_POST["komentar"];
echo $komentar."<br/>";

} 
?>