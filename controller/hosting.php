<?php

    require "model/model.php";

    $requete = "SELECT * FROM hosting Limit 6";
    $exec = mysqli_query($conn, $requete);

    while($op=mysqli_fetch_array($exec))
    {
        
?>

<?php require "view/house.php"; ?>

<?php
        
    }

?>