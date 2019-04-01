<?php
error_reporting(0);// With this no error reporting will be there
include 'connect_db.php';
require 'vendor/ismaeltoe/osms/src/Osms.php';
use \Osms\Osms;

require __DIR__.'/vendor/autoload.php';


function randomPrefix($length)
{
$random= "";
srand((double)microtime()*1000000);

$data = "AbcDE123IJKLMN67QRSTUVWXYZ";
$data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
$data .= "0FGH45OP89";

for($i = 0; $i < $length; $i++)
	{
		$random .= substr($data, (rand()%(strlen($data))), 1);
	}

		return $random;
	}


		$code = randomPrefix(8);

		$query = mysqli_query($conn, "INSERT INTO code (id_code,contenu_code)
		VALUES ('', '$code')");


 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Viens Dindin</title>
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
	<h3 >Entrez votre numéro de téléphone</h3>
	<div class="form">

	<form method="post" id="register_form" name="myForm">
		<div id="error_msg"></div>
		<p for="tel">Nous allons utiliser uniquement votre numéro de <br> téléphone pour la création de votre compte et vérifier que <br> vous n'etes pas un robot</p>
			<div class="form-group">
				<input type="tel" name="tel" id="tel" class="tel" value="+225" /> <div id="tel_div" style="color : red;"></div>
				<span></span>
			</div>
			<input type="hidden" name="content" value=" <?php echo ("Votre code Viens Dindin est ".$code);  ?>"/>
			<div>
			<button  class="btn btn-light" type="submit" id="reg_btn" onclick="ajaxFunction('tel_div')">Continuer</button> <br>
			</div>
			<p style="font-size : 14px;">En continuant vous acceptez nos <a href="conditions.php">conditions générales d'utilisation</a></p>
		</form>
		</div>
    </div>
    <div class="col">
    </div>
  </div>
</div>
<?php



if(!empty($_POST)){



	$datas = array_map('htmlspecialchars', $_POST);
	$tel = $datas['tel'];

	if(strlen($tel) < 12){
		echo '
			<script>
				document.getElementById("tel_div").innerHTML="Veuillez entrer un numéro de téléphone valide";
			</script>
		';	}else{
	$query = mysqli_query($conn, "SELECT * FROM users WHERE telephone='$tel'");
				 $rows = mysqli_num_rows($query);
				 if($rows==1){

			echo '
				<script>
					document.getElementById("tel_div").innerHTML="Désolé ce numéro de téléphone est déjà pris";
				</script>
			';


  	}else{

				$query = mysqli_query($conn, "INSERT INTO users (id,telephone)
				VALUES ('', '$tel')");

		 session_start();
		 $_SESSION['telephone']= $tel;

	$credential = [
		'clientId' => 'Y4LlL3k389cuBFz6JdzudtKvQguA7xCR',
		'clientSecret' => 'TbbSkemzXRQRxPHw'
		];

		// puis on envoie le message

	$osms = new Osms($credential);
	$token = $osms->getTokenFromConsumerKey();
	$osms->sendSMS('tel:+22509682009', 'tel:' . $datas['tel'], $datas['content'], 'ViensDindin');

		if ($osms) {
			echo '
			<script>
			document.location.replace("confirmation.php");
			</script>
		';
	}
	}
}
}
?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
