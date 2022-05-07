<?php 
//Databse Connection file
require "config.php";
if(isset($_POST['submit']))
  {
  	//getting the post values
    
    
   $ppic=$_FILES["profilepic"]["name"];
// get the image extension
$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($ppic).time().$extension;
// Code for move image into directory
move_uploaded_file($_FILES["profilepic"]["tmp_name"],"photos/".$imgnewfile);
// Query for data insertion
$sql="INSERT INTO `eleves` (`CNE`, `Nom`, `Prenom`, `Adresse`, `Ville`,`email`, `Photo`,`etat`) 
VALUES ('".$_POST['CNE']."',
        '".$_POST['Nom']."',
        '".$_POST['Prenom']."',
        '".$_POST['Adresse']."',
        '".$_POST['Ville'] ."', 
        '".$_POST['email'] ."',
        '".$imgnewfile."',0)";
$query  = mysqli_query($mysqli,$sql);   
if ($query) {
echo "<script>alert('Etudiant a été ajouté avec succés');</script>";
echo "<script type='text/javascript'> document.location ='Bienvenue.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Ajout d'un eleve!!</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
    <form  method="POST" enctype="multipart/form-data" >
		<h2>AJOUTER</h2>
		<p class="hint-text">Veuillez remplir ce formulaire pour ajouter un(e) etudiant(e).</p>
        <div class="form-group">
            <input type="text" class="form-control" name="CNE" placeholder="Entrer votre CNE" required="true" >
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="Nom" placeholder="Nom" required="true"></div>
				<div class="col"><input type="text" class="form-control" name="Prenom" placeholder="Prenom" required="true"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Adresse" placeholder="Entrer votre adresse" required="true" >
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Ville" placeholder="Entrer une Ville" required="true">
        </div> 
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Entrer votre Email " required="true">
        </div>
		
		 
             <div class="form-group">
        	<input type="file" class="form-control" name="profilepic"  required="true">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>      
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
	<div class="text-center">Retour en Arriere!!  <a href="Bienvenue.php">Retourner</a></div>
</div>
</body>
</html>