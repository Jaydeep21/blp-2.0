
<?php

if(isset($_POST["clofa5"]))
{
 $conn = mysqli_connect("localhost", "root", "jaydeep", "blp-2.0");
 $query = "INSERT INTO form5_checkbox2(adverse_effects_clofa) VALUES ('".$_POST["clofa5"]."')";
 $result = mysqli_query($conn, $query);
//  echo "Data Inserted Successfully!";
}


?>