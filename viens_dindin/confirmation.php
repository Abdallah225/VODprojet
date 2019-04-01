<?php include 'connect_db.php'; ?>
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
		background-clip : cover;
	}
		.form {
			border-radius : 30px;
			background: #696969;
			 height: 250px;
    font-size: 	18px;

		}
		.middle {
			margin-top: 20%;
    margin-bottom: 20%;
    height: auto;
    text-align: center;
    border-radius:30px;
		}
		h3,p {
			color : #ccc;
		}
		a, a:hover {
			color : #ccc;
			text-decoration : none;
		}
		input[type="text"], input[type="tel"] {
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
	<h3 >Confirmation</h3>
	<div class="form">

	<form method="post">
			<div class="form-group">
				<p for="tel">Veuillez entrer le code alphanumerique que vous<br> avez reçu par sms</p>
				<label for="" style="color:#ccc">code de confirmation</label><br>
				<input type="text" name="code" /> <div id="div_code" style=" color : red;"></div>
                </div>
			<button  class="btn btn-light" type="submit" name="verifier">Vérifier</button> <br><br>
			<p style="font-size : 14px;"> <a href="nonrecu.php">Je n'ai pas reçu de code</a></p>
		</form>
		</div>
    </div>
    <div class="col">
    </div>
  </div>
</div>
<?php
	if (isset($_POST['verifier'])) {
		$code = $_POST['code'];
		$recherche = mysqli_query($conn, "SELECT * FROM code WHERE contenu_code = '$code' ");
		$rows = mysqli_num_rows($recherche);
			 if($rows==1){
				 echo "<script>";
				 echo	"document.location.replace('inscription.php');";
				echo "</script>";
			 }
			 else {
         echo '
   				<script>
   					document.getElementById("div_code").innerHTML="Code de confirmation incorrect";
   				</script>
   			';
			 }
	}

?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
