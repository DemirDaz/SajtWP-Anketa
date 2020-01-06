<?php
if (isset($_GET["submit"]))
{
$username=$_GET["korisnicko"];
echo $username."<br/>";
$lozinka=$_GET["lozinka"];
echo $lozinka."<br/>";
$nacin=$_GET["nacin"];
echo $nacin."<br/>";
$knjiga=$_GET["knjiga"];
echo $knjiga."<br/>";
$cd=$_GET["cd"];
echo $cd."<br/>";
$komentar=$_GET["komentar"];
echo $komentar."<br/>";

} 
?>