<?php include 'connect_db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
	body {
		background-color: #222;
		background-image : url('images/background.jpg');
		background-clip : cover;
	}
		.form {
			border-radius : 20px;
			 border-style : solid; 
			 background-color : #444;
			  
		}
        form {
            margin-left : 50px;
        }
		.middle {
			/*text-align : center; */
			position : relative; 
			  top : 50%; 
			  transform: translateY(20%); 
		}
		h3,p,label {
			color : #ccc;
		}
        form label {
            text-align : left;
        }
		a, a:hover {
			color : #ccc;
			text-decoration : underline;
		}
		input {
			background-color : #919191;
            border-style : none;
		}
	</style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6 middle">
	<h3 ><center>Terminez votre inscription</center></h3>
	<div class="form">
	
	<form method="post" action="verification.php">
			
				<center><p>Informations personnelles</p></center>
                <!-- Nom et prénoms  -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Nom</label><br>
                    </div>
                    <div class="col-md-6">
                    <label for="">Prénom</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <input type="text" name="nom" id="">
                    </div>
                    <div class="col-md-6">
                    <input type="text" name="prenom" id="">
                    </div>
                </div><br>
                <!-- Ville et date de naissance  -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="" style="text-align : left;">Ville</label><br>
                    </div>
                    <div class="col-md-6">
                    <label for="">Date de naissance</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <input type="text" name="ville" id="" >
                    </div>
                    <div class="col-md-6">
                    <input type="date" name="date_naissance" id="">
                    </div>
                </div><br>
                <!-- Addresse mail -->
                <div class="row">
                    <div class="col-md-6">
                    <label for="">Addresse mail</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <input type="email" name="email" id="" size="30" >
                    </div>
                </div><br>
                <!-- Mot De Passe -->
                <div class="row">
                    <div class="col-md-6">
                    <label for="">Mot De Passe</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <input type="password" name="password" id="" size="30" >
                    </div>
                </div><br>
                
			<center><button  class="btn btn-light" type="submit" name="verifier" style="width : 200px;">Enregistrer</button></center> <br>
		</form><br>
		</div>
    </div>
    <div class="col">
    </div>
  </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>