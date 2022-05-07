<?php 
session_start();
require "config.php";
if(isset($_SESSION['user'])){
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$profilepic=$_GET['ppic'];
$ppicpath="photos"."/".$profilepic;

$sql=mysqli_query($mysqli," DELETE from eleves where CNE=$rid ");
unlink($ppicpath);
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'Bienvenue.php'</script>";     
} 


?> 
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css"  />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  
        <title>Gestion des élèves GINF1 AU : 2021-2022</title>
       
    </head>
<body>
    <?php
    //paramètres d'accéer au serveur base de données MySQL    
    require "config.php";
    // Create connection and Check connection
     $eleves = mysqli_query($mysqli,'select CNE,Nom,Prenom,Adresse,Ville,email, Photo, etat from eleves');
     ?>
     
<div id="global">
<h1 align='center'>Liste des élèves GINF1 AU : 2021-2022</h1>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                       <div class="col-sm-5" align="left">
                        <a href="add.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau etudiant</span></a>                   
                       </div>
                       <div class="col-sm-7" align="right">
                        <a href="deconnexion.php" class="btn btn-secondary"> <span>Deconnexion</span></a>                   
                    </div>
                </div>
            </div>

<table align='center' border='1'class="table table-striped table-hover">
	<tr>
		<th>CNE</th>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Adresse</th>
        <th>Ville</th>
        <th>Email</th>
        <th>Photo</th>
        <th>Action</th>
	</tr>
<?php
foreach ($eleves as $eleve) :?>
		<tr>
		<td><?= $eleve["CNE"]; ?></td>
		<td><?= $eleve["Nom"]; ?></td>
		<td><?= $eleve["Prenom"]; ?></td>
        <td><?= $eleve["Adresse"]; ?></td>
        <td><?= $eleve["Ville"]; ?></td>
        <td><?= $eleve["email"]; ?></td>
        <td><img src="photos/<?php echo $eleve["Photo"];?>" height="100" width="100"></td>
        <td>
        
            <a href="edit.php?editid=<?php echo htmlentities ($eleve["CNE"]);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
            <a href="Bienvenue.php?delid=<?php echo ($eleve["CNE"]);?>&&ppic=<?php echo $eleve['Photo'];?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                        
        </td>
	</tr>
	<?php endforeach  ?>
</table>	
</div>
</body>
</html>
<?php 
    }
else{
    header('location:index.html?reponse=\"Violation d\'accés\"');
}
?>
