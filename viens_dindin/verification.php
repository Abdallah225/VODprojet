<?php
include 'connect_db.php';
session_start();


if(isset($_POST['verifier'])){

      $nom = addslashes($_POST ['nom']);
      $prenom = addslashes($_POST ['prenom']);
      $ville = addslashes($_POST ['ville']);
      $date_naissance = addslashes($_POST ['date_naissance']);
      $email = addslashes($_POST ['email']);
      $password = md5($_POST ['password']);
      $telephone = $_SESSION['telephone'];
    

    $inscription = mysqli_query($conn, "UPDATE users
    SET nom = '$nom', prenom = '$prenom', ville = '$ville', date_naissance = '$date_naissance', email = '$email', password ='$password'
    WHERE telephone = '$telephone';");

    

    if ($inscription) {
      echo "<script>
        document.location.replace('index.php');
      </script>";

    }
    else {
      echo "Valeurs non ajoutées";
    }
    //---- Send Email---------------------------
        /*
    // the message
    $msg = "Welcome to phpTest: \n Your login informations : \n Email = ".$email." Password = ".$password." \n Now you can log into your account. ";
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    // send email
    mail($email,"Welcome to phpTest",$msg);
    //-------End sending Email-----------------
    */


  }
  

?>
