<?php
if(isset($_POST['submit'])){
    session_start();
    $compte = $_POST['user'];
    $pass   = $_POST['pass'];  
//paramètres d'accéer au serveur base de données MySQL    
  require "config.php";
// Create connection and Check connection

//Connected successfully to MYSQL server
/* requête à executer */
$sql = "SELECT user, passwd
 FROM comptes
 WHERE user ='".addslashes($compte)."' AND passwd = '".addslashes($pass)."'";

$res = mysqli_query($mysqli, $sql);
$rowcount=mysqli_num_rows($res);
if($rowcount==1){
  $_SESSION['user']=$_POST['user'];
  header('location: Bienvenue.php');
}else{
header('location:index.html?reponse=\"Nom d\'utilisateur ou mot de passe non valide\"');
}

}else{
  header('location:index.html?reponse=\"Violation d\'accés\"');
}
?>
