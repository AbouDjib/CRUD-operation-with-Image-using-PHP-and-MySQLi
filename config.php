<?php
//paramètres pour accéder au serveur base de données MySQL    
$dbservername = "localhost";
$dbusername =  "root";
$dbpassword =  "";
$dbname =  "ensat" ;
$mysqli = mysqli_connect("localhost", "root", "", "ensat");
if(!$mysqli){
    die("Connection Failed".mysqli_connect_error());
}
?>
