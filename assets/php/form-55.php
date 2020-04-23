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
			$patient_name = $_POST['patient_name'];
		}
		else{
			$patient_name = "NAN";
		}
		if(isset($_POST['clinic_id'])){
			
		$clinic_id = $_POST['clinic_id'];
		}
		else{
			$clinic_id = "";
		}
		if(isset($_POST['study_no'])){
			$study_no = ($_POST['study_no']);
		}
		else{
			
			$study_no = "NAN";
		}
		
		if(isset($_POST['date'])){
			$date = $_POST['date'];
		}
		else{
			
			$date = "NAN";
		}
		if(isset($_POST['staff_name'])){
			$staff_name = $_POST['staff_name'];
		}
		else{
			
			$staff_name = "NAN";
		}
		if(isset($_POST['patient_since_last_visit'])){
			$patient_since_last_visit = $_POST['patient_since_last_visit'];
		}
		else{
			
			$patient_since_last_visit = "NAN";
		}
		if(isset($_POST['prednisolone_5'])){
			$prednisolone_5 = $_POST['prednisolone_5'];
		}
		else{
			
			$prednisolone_5 = "NAN";
		}
		if(isset($_POST['clofazimine_vitamins'])){
			$clofazimine_vitamins = $_POST['clofazimine_vitamins'];
		}
		else{
			
			$clofazimine_vitamins = "NAN";
		}		
		if(isset($_POST['nfa_5'])){
			$nfa_5 = $_POST['nfa_5'];
		}
		else{
			
			$nfa_5 = "NAN";
		}
		if(isset($_POST['new_nfi_5'])){
			$new_nfi_5 = $_POST['new_nfi_5'];
		}
		else{
			
			$new_nfi_5 = "NAN";
		}
		if(isset($_POST['if_yes'])){
			$if_yes = $_POST['if_yes'];
		}
		else{
			
			$if_yes = "NAN";
		}
		if(isset($_POST['eess_score_5'])){
			$eess_score_5 = $_POST['eess_score_5'];
		}
		else{
			
			$eess_score_5 = "NAN";
		}
		
		if(isset($_POST['patient_worse'])){
			$patient_worse = $_POST['patient_worse'];
		}
		else{
			
			$patient_worse = "NAN";
		}
		if(isset($_POST['time_since_flare_began'])){
			$time_since_flare_began = $_POST['time_since_flare_began'];
		}
		else{
			
			$time_since_flare_began = "NAN";
		}
		
		
		if(isset($_POST['dose_std_course'])){
			$dose_std_course = $_POST['dose_std_course'];
		}
		else{
			
			$dose_std_course = "NAN";
		}
		if(isset($_POST['dura_std_course'])){
			$dura_std_course = $_POST['dura_std_course'];
		}
		else{
			
			$dura_std_course = "NAN";
		}
		if(isset($_POST['dose_add_predni'])){
			$dose_add_predni = $_POST['dose_add_predni'];
		}
		else{
			
			$dose_add_predni = "NAN";
		}
		if(isset($_POST['dura_add_predni'])){
			$dura_add_predni = $_POST['dura_add_predni'];
		}
		else{
			
			$dura_add_predni = "NAN";
		}
		
		if(isset($_POST['advised_admission'])){
			$advised_admission = $_POST['advised_admission'];
		}
		else{
			
			$advised_admission = "NAN";
		}
		if(isset($_POST['date_of_next_assessment_5'])){
			$date_of_next_assessment_5 = $_POST['date_of_next_assessment_5'];
		}
		else{
			
			$date_of_next_assessment_5 = "NAN";
		}

		
		
		$q1 = "insert into form5 (patient_name,clinic_id,study_no,date,staff_name,patient_since_last_visit,prednisolone_5,clofazimine_vitamins,nfa_5,new_nfi_5,if_yes,
		eess_score_5,patient_worse,time_since_flare_began,dose_std_course,dura_std_course,dose_add_predni,dura_add_predni,advised_admission,
		date_of_next_assessment_5) 
		values ('$patient_name','$clinic_id','$study_no','$date','$staff_name','$patient_since_last_visit','$prednisolone_5','$clofazimine_vitamins','$nfa_5','$new_nfi_5','$if_yes',
		'$eess_score_5','$patient_worse','$time_since_flare_began','$dose_std_course','$dura_std_course','$dose_add_predni','$dura_add_predni','$advised_admission',
		'$date_of_next_assessment_5');";

		if(query($q1, 'form2') ) {

			$Pid = $conn->insert_id;
			// echo "Pid is " . $Pid . "<br>";

			header("location:../../modules/display_form_1-6.php?pid=".$Pid);
		} else {
			echo "<br>Person could not be made.";
		}
		// echo $q1;
		// if ($conn->query($q1) === TRUE) {
		// 	echo "New record created successfully";
		// } else {
		// 	echo "Error: " . $q1 . "<br>" . $conn->error;
		// }

$conn->close();

	} else  {
		// do get
		echo "not a post request";
	}

	

 ?>

