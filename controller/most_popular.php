<?php

    require "model/model.php";

    $requete = "SELECT * FROM hosting WHERE most_popular = 1";
    $exec = mysqli_query($conn, $requete);

    while($op=mysqli_fetch_array($exec))
    {
        
?>

<?php require "view/house_most_popular.php"; ?>

<?php
        
    }

?>