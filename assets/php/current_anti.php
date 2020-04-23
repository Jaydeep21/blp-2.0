<?php

if(isset($_POST["current_antiReaction"]))
{
 $conn = mysqli_connect("localhost", "root", "jaydeep", "blp-2.0");
 $query = "INSERT INTO form2_checkbox2(current_anti_reaction) VALUES ('".$_POST["current_antiReaction"]."')";
 $result = mysqli_query($conn, $query);
//  echo "Data Inserted Successfully twice!";
}
?>