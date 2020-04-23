<?php

if(isset($_POST["insert1"]))
{
 $conn = mysqli_connect("localhost", "root", "jaydeep", "blp-2.0");
 $query1 = "INSERT INTO form6_checkbox2(adv_eff_clofa) VALUES ('".$_POST["insert1"]."')";
 $result1 = mysqli_query($conn, $query1);
//  echo "Data Inserted Successfully tttttwice!";
}

?>