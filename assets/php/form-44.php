 <?php
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // do post
	$servername = "localhost";
	$username = "root";
	$password = "jaydeep";
	$dbname = "blp-2.0";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}

	function query ( $query, $message = '' ) {
		global $conn;
		$insert = mysqli_query($conn, $query);
		if($insert){
		  echo"Successful Insertion ".$message."<br>";
		  return 1;
		}
		else{
		  echo"<br>Query error ".$message." : " . mysqli_error($conn)."<br>";
		  return 0;
		}
	}
		
		//mysqli_select_db($con , 'blp_db');



		if(isset($_POST['patient_name'])){
			$patient_name = ($_POST['patient_name']);
		}
		else{
			$patient_name = "";
		}
		
		
		if(isset($_POST['clinic_id'])){
			$clinic_id = $_POST['clinic_id'];
		}
		else{
			$clinic_id = "";
		}
		
		if(isset($_POST['study_no'])){
			$study_no = $_POST['study_no'];
		}
		else{
			
			$study_no = "";
		}
		if(isset($_POST['formDate'])){
			$formDate = $_POST['formDate'];
		}
		else{
			
			$formDate = "";
		}
		if(isset($_POST['staff_name'])){
			$staff_name = $_POST['staff_name'];
		}
		else{
			
			$staff_name = "";
		}
		if(isset($_POST['current_status'])){
			$current_status = $_POST['current_status'];
		}
		else{
			
			$current_status = "";
		}		
		if(isset($_POST['nfa_4'])){
			$nfa_4 = $_POST['nfa_4'];
		}
		else{
			
			$nfa_4 = "";
		}
		if(isset($_POST['eess_4'])){
			$eess_4 = $_POST['eess_4'];
		}
		else{
			
			$eess_4 = "";
		}
		if(isset($_POST['qol_4'])){
			$qol_4 = $_POST['qol_4'];
		}
		else{
			
			$qol_4 = "";
		}
		if(isset($_POST['vas_4'])){
			$vas_4 = $_POST['vas_4'];
		}
		else{
			
			$vas_4 = "";
		}
		if(isset($_POST['enl_present_time_since'])){
			$enl_present_time_since = $_POST['enl_present_time_since'];
		}
		else{
			
			$enl_present_time_since = "";
		}
		if(isset($_POST['time_since_last_received_prednisolone'])){
			$time_since_last_received_prednisolone = $_POST['time_since_last_received_prednisolone'];
		}
		else{
			
			$time_since_last_received_prednisolone = "";
		}
		if(isset($_POST['recurrent_enl_start_predni'])){
			$recurrent_enl_start_predni = $_POST['recurrent_enl_start_predni'];
		}
		else{
			
			$recurrent_enl_start_predni = "";
		}
		if(isset($_POST['advised_admission'])){
			$advised_admission = $_POST['advised_admission'];
		}
		else{
			
			$advised_admission = "";
		}
		if(isset($_POST['nextDate'])){
			$nextDate = $_POST['nextDate'];
		}
		else{
			
			$nextDate = "";
		}
		if(isset($_POST['nextPDate'])){
			$nextPDate = $_POST['nextPDate'];
		}
		else{
			
			$nextPDate = "";
		}
		
		$q = "insert into form4 (patient_name,clinic_id,study_no,formDate,staff_name,current_status,nfa_4,eess_4,qol_4,vas_4,
		enl_present_time_since,time_since_last_received_prednisolone,recurrent_enl_start_predni,advised_admission,nextDate,nextPDate) 
		values ('$patient_name','$clinic_id','$study_no','$formDate','$staff_name','$current_status','$nfa_4','$eess_4','$qol_4','$vas_4','$enl_present_time_since',
		'$time_since_last_received_prednisolone','$recurrent_enl_start_predni','$advised_admission','$nextDate','$nextPDate');";
		// echo $q;

		if(query($q, 'form4') ) {

			$Pid = $conn->insert_id;
			// echo "Pid is " . $Pid . "<br>";

			header("location:../../modules/display_form_1-6.php?pid=".$Pid);
		} else {
			echo "<br>Person could not be made.";
		}

		// if ($conn->query($q) === TRUE) {
		// 	echo "New record created successfully";
		// } else {
		// 	echo "Error: " . $q . "<br>" . $conn->error;
		// }

		$conn->close();

	} else  {
		// do get
		echo "not a post request";
	}

	

 ?>

