<?php
include 'connection.php'; 

    if(isset($_POST['updatecontact']))
    {   
        $id = $_POST['update_id'];
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $num = $_POST['num'];
        $email = $_POST['email'];
        $adress = $_POST['adress'];

        $query = "UPDATE contacts SET nom='$nom', prenom='$prenom', num='$num', email=' $email', adress=' $adress' WHERE id='$id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('location: ../../contacts.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>