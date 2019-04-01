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

		$msg=""; // Message variable
		//$msg.=$_POST['disp_div']."<br>";
		switch($_POST){

		case "tel":
		if(strlen($tel) < 2){
		$msg .= "Entrez un numéro de téléphone valide";
		}else{ $msg .= "<img src=images/tick.jpg>";}
		break;

		}

		echo "<font color='red'>$msg</font>";

if(!empty($_POST)){



	$datas = array_map('htmlspecialchars', $_POST);
	$tel = $datas['tel'];

	$query = mysqli_query($conn, "SELECT * FROM users WHERE telephone='$tel'");
				 $rows = mysqli_num_rows($query);
				 if($rows==1){

  	  echo "Désolé ce numéro de téléphoneest déjà pris";

  	}else{
			echo "not_taken";

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
			//	document.location.replace("confirmation.php");00
			</script>
		';
	}


	}


}
?>
