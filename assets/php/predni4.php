
<?php

if(isset($_POST["predni4"]))
{
 $conn = mysqli_connect("localhost", "root", "jaydeep", "blp-2.0");
 $query = "INSERT INTO form4_checkbox(checklist_predni) VALUES ('".$_POST["predni4"]."')";
 $result = mysqli_query($conn, $query);
//  echo "Data Inserted Successfully!";
}


?>