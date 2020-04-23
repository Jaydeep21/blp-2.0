<?php

if(isset($_POST["predni"]))
{
 $conn = mysqli_connect("localhost", "root", "jaydeep", "blp-2.0");
 $query = "INSERT INTO form2_checkbox(adverse_predni) VALUES ('".$_POST["predni"]."')";
 $result = mysqli_query($conn, $query);
//  echo "Data Inserted Successfully tttttwice!";
}
?>

