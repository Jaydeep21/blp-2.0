
<?php

if(isset($_POST["predni5"]))
{
 $conn = mysqli_connect("localhost", "root", "jaydeep", "blp-2.0");
 $query = "INSERT INTO form5_checkbox(adverse_effects_predni) VALUES ('".$_POST["predni5"]."')";
 $result = mysqli_query($conn, $query);
//  echo "Data Inserted Successfully!";
}


?>