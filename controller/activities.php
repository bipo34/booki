<?php

    require "model/model.php";

    $requete = "SELECT * FROM activities";
    $exec = mysqli_query($conn, $requete);

    while($op=mysqli_fetch_array($exec))
    {
        
?>

<?php require "view/activities.php"; ?>

<?php
        
    }

?>