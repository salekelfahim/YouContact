<?php
include 'connection.php'; 

if(isset($_POST['addcontact']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $adress = $_POST['adress'];

    $query = "INSERT INTO contacts (`nom`,`prenom`,`email`,`num`, `adress`, `datte`) VALUES ('$nom','$prenom','$email','$num','$adress', NOW())";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: ../../contacts.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>