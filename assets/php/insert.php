<?php

if(isset($_POST["insert"]))
{
 $conn = mysqli_connect("localhost", "root", "jaydeep", "blp-2.0");
 $query = "INSERT INTO form6_checkbox(adv_eff_predni) VALUES ('".$_POST["insert"]."')";
 $result = mysqli_query($conn, $query);
//  echo "Data Inserted Successfully!";
}

?>