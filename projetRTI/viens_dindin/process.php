<?Php
include 'connect_db.php';
error_reporting(0);// With this no error reporting will be there

$msg="";
if ($_POST['tel']) {
  $tel=$_POST['tel'];
  if(strlen($tel) < 12){
  $msg .= "Veuillez entrer un numéro de téléphone valide";
  }else{
    $query = mysqli_query($conn, "SELECT * FROM users WHERE telephone='$tel'");

  				 $rows = mysqli_num_rows($query);
  				 if($rows == 1){
        $msg .= "Désolé ce numéro de téléphone est déjà pris";
    	}
      else {

      }
  }
}


echo "<font color='red'>$msg</font>";
?>
