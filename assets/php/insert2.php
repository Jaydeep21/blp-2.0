<?php

if(isset($_POST["insert2"]))
{
 $conn = mysqli_connect("localhost", "root", "jaydeep", "blp-2.0");
 $query2 = "INSERT INTO form6_checkbox3(withdrawal_reason) VALUES ('".$_POST["insert2"]."')";
 $result2 = mysqli_query($conn, $query2);
//  echo "Data Inserted Successfully ttttthrice!";
}

?>