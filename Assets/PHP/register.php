<?php

include 'connection.php'; 

if(isset($_POST['adduser']))
{ 
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$password = $_POST['passwordd'];
	$num = $_POST['num'];
    $date=date('y-m-d');
    
    $sql = "INSERT INTO `users`(`id`, `nom`, `prenom`, `email`, `passwordd`, `datte`, `num`) VALUES (null,'$nom','$prenom','$email','$password','$date','$num')";
     var_dump($sql);
    if(mysqli_query($conn, $sql))
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: ../../login.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
  
}

?>
