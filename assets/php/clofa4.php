
<?php

if(isset($_POST["clofa4"]))
{
 $conn = mysqli_connect("localhost", "root", "jaydeep", "blp-2.0");
 $query = "INSERT INTO form4_checkbox2(checklist_clofa) VALUES ('".$_POST["clofa4"]."')";
 $result = mysqli_query($conn, $query);
//  echo "Data Inserted Successfully!";
}


?>