<?php

  $servername = "localhost";
	$username = "root";
	$password = "jaydeep";
	$dbname = "blp-2.0";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$id = $_GET['pid'];

$result_form_1_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
$result_form_1_clinic_id_date = mysqli_query($conn, "SELECT clinic_id, date from form1 where pid = $id");
$result_form_1_study_no = mysqli_query($conn, "SELECT study_no from form1 where pid = $id");
$result_form_1_patient_name1_sex_address = mysqli_query($conn, "SELECT patient_name1, sex, address from form1 where pid = $id");
$result_form_1_clinic_regno_staff_name = mysqli_query($conn, "SELECT clinic_regno, staff_name from form1 where pid = $id");
$result_form_1_dateMDT_dateRFT = mysqli_query($conn, "SELECT dateMDT, dateRFT from form1 where pid = $id");
$result_form_1_SmearDiagnosis_SmearDate = mysqli_query($conn, "SELECT SmearDiagnosis, SmearDate from form1 where pid = $id");
$result_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent 
= mysqli_query($conn, "SELECT mdiag, Age, Weight, Height, BMI, no_contra_indication_steroids, able_to_attend_regularly, pregnant, tuberculosis, diabetes, other_serious_illness, other_illness_desc, inform_consent
from form1 where pid = $id");
$result_form_1_allocate_study_no_history_of_enl = mysqli_query($conn, "SELECT allocate_study_no, history_of_enl from form1 where pid = $id");
$result_form_1_contact_no = mysqli_query($conn, "SELECT * from form1_contact where pid = $id");

$result_form2_date = mysqli_query($conn,"SELECT date from form2 where pid = $id");
$result_form2_currentReactionStatus_firstHadEnl_firstPDate = mysqli_query($conn,"SELECT current_reaction_status,first_had_enl,firstPDate  from form2 where pid = $id");
$result_form2__firstSym = mysqli_query($conn,"SELECT first_sym from form2 where pid = $id");
$result_form2_checkBox2 = mysqli_query($conn,"SELECT current_anti_reaction from form2_checkbox2 where pid = $id");
$result_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal = mysqli_query($conn,"SELECT date_started_predni,current_dose_predni,current_dose_clofa,current_dose_thal  from form2 where pid = $id");
$result_form2_nfa_changeInNfi_changeInNfiDesc_eess2= mysqli_query($conn,"SELECT nfa,change_in_nfi,change_in_nfi_desc,eess_2 from form2 where pid = $id");
$result_form2_qol2Score_vasForPig2 = mysqli_query($conn,"SELECT qol_2_score,vas_for_pig_2 from form2 where pid = $id");
$result_form2_checkBox = mysqli_query($conn, "SELECT * from form2_checkbox where pid = $id");
$result_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa = mysqli_query($conn,"SELECT obs,drug_dose_predni,drug_dur_predni,drug_dose_clofa,drug_dur_clofa from form2 where pid = $id");
$result_form2_others = mysqli_query($conn, "SELECT * from form2_others where pid = $id");
$result_form2_next_asse_date = mysqli_query($conn, "SELECT next_asse_date from form2 where pid = $id");

?>

<!DOCTYPE html>
<meta charset="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <br><BR>
<h3>
    <center><span class="title_text"><strong>PATIENT RECORD</strong></span></center>
</h3>

<head>
  <title>Patient Record</title>
  <meta charset="utf-8">
  <meta charset="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
   
  th{
   width: 450px;
    
 }  

td{
  font-family:serif;
  text-align: left;
  font-size: 1.1em;
}

</style>
<body>
<br>
    
<div class="container">
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Initial Assessment Sheet</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>
      
      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form1_clinic_id_date = mysqli_fetch_assoc($result_form_1_clinic_id_date)){ ?>
        <td colspan="5"><?php echo $row_form1_clinic_id_date['clinic_id']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form1_clinic_id_date['date']; ?></td>
      </tr>
        <?php } ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

      <?php while ($row_form_1_clinic_regno_staff_name = mysqli_fetch_assoc($result_form_1_clinic_regno_staff_name)){ ?>
      <tr>
        <th colspan="">Patient Code</th>
            <td colspan="5"><?php echo $row_form_1_clinic_regno_staff_name['clinic_regno']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Staff Name:</strong><?php echo "  ".$row_form_1_clinic_regno_staff_name['staff_name']; ?></td>
      </tr>
      <?php } ?>

      <?php while ($row_form_1_patient_name1_sex_address = mysqli_fetch_assoc($result_form_1_patient_name1_sex_address)){ ?>
      <tr>
        <th colspan="1" id="">Name</th>
        <td colspan="6"><?php echo $row_form_1_patient_name1_sex_address['patient_name1']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Sex</th>
        <td colspan="6"><?php echo $row_form_1_patient_name1_sex_address['sex']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Address</th>
        <td colspan="6"><?php echo $row_form_1_patient_name1_sex_address['address']; ?></td>
      </tr>
      <?php } ?>

      <tr>
        <th colspan="" id="">Contact Number</th>
        <td colspan="6">
        <?php while($row_form_1_contact_no = mysqli_fetch_assoc($result_form_1_contact_no)){
         echo $row_form_1_contact_no['contact_no']."<br>"; } 
         ?></td>
      </tr>

      <tr>
      <th colspan="1" id="">Date of starting MDT</th>
            <?php while( $row_form_1_dateMDT_dateRFT = mysqli_fetch_assoc($result_form_1_dateMDT_dateRFT)){ ?>
        <td colspan="5"><?php echo $row_form_1_dateMDT_dateRFT['dateMDT']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date of starting RFT:</strong><?php echo "  ".$row_form_1_dateMDT_dateRFT['dateRFT']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="1" id="">Smear at Diagnosis</th>
            <?php while( $row_form_1_SmearDiagnosis_SmearDate = mysqli_fetch_assoc($result_form_1_SmearDiagnosis_SmearDate)){ ?>
        <td colspan="5"><?php echo $row_form_1_SmearDiagnosis_SmearDate['SmearDiagnosis']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Smear Date:</strong><?php echo "  ".$row_form_1_SmearDiagnosis_SmearDate['SmearDate']; ?></td>
      </tr>
      <?php } ?>

      <?php while ($row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent = mysqli_fetch_assoc($result_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent)){ ?>
      <tr>
        <th colspan="7" id="" style="color: blue"><u>Eligibility Criteria for Screening:</u></th>
      </tr>
      <tr>
        <th colspan="1" id="">Withing 24 Months of Diagnosis?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['mdiag']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Age</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['Age']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Weight</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['Weight']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Height</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['Height']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">BMI</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['BMI']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">No contra-indications to steroids / to clofa</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['no_contra_indication_steroids']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Able to attend regularly?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['able_to_attend_regularly']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Pregnant?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['pregnant']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Tuberculosis?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['tuberculosis']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Diabetes?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['diabetes']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Serious Illness</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['other_serious_illness']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Serious Illness Description</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['other_illness_desc']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Does patient give informed consent?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['inform_consent']; ?></td>
      </tr>
      <?php } ?>

      <?php while ($row_form_1_allocate_study_no_history_of_enl = mysqli_fetch_assoc($result_form_1_allocate_study_no_history_of_enl)){ ?>
      <tr>
        <th colspan="7" id="" style="color: blue"><u>Enrolment for Observations:</u></th>
      </tr>

      <tr>
        <th colspan="1" id="">Allocated Study Number</th>
        <td colspan="6"><?php echo $row_form_1_allocate_study_no_history_of_enl['allocate_study_no']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">History of ENL?</th>
        <td colspan="6"><?php echo $row_form_1_allocate_study_no_history_of_enl['history_of_enl']; ?></td>
      </tr>
      <?php } ?>
      
  </tbody>
</table>
</div>

<div class="container">
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Baseline Assessment</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>

       <?php while( $row_form2_date = mysqli_fetch_assoc($result_form2_date)){ ?>

	      <tr>
	      	<th colspan="1" id="">Date</th>
	      	<td colspan="7"><?php echo $row_form2_date['date']; ?></td>
	      </tr>

      <?php } ?>

      <?php while( $row_form2_currentReactionStatus_firstHadEnl_firstPDate = mysqli_fetch_assoc($result_form2_currentReactionStatus_firstHadEnl_firstPDate)){ ?>

	       <tr>
	        <th colspan="1" id="">Current Reaction Status</th>
	        <td colspan="6"><?php echo $row_form2_currentReactionStatus_firstHadEnl_firstPDate['current_reaction_status']; ?></td>
	      </tr>

	      <tr>
	        <th colspan="1" id="">When first had ENL?</th>
	        <td colspan="6"><?php echo $row_form2_currentReactionStatus_firstHadEnl_firstPDate['first_had_enl']; ?></td>
	      </tr>

	      <tr>
	        <th colspan="1" id="">When first had prednisolone for ENL?</th>
	        <td colspan="6"><?php echo $row_form2_currentReactionStatus_firstHadEnl_firstPDate['firstPDate']; ?></td>
	      </tr>

      <?php } ?>

       <tr>
        <th colspan="7" id="" style="color: blue"><u>(if applicable)This episode of ENL:</u></th>
      </tr>

      <tr>
        <th colspan="1" id="">When first symptoms(number of days ago)</th>
        <td colspan="6">
        <?php while($row_form2_firstSym = mysqli_fetch_assoc($result_form2__firstSym)){
         echo $row_form2_firstSym['first_sym']."<br>"; } 
         ?></td>
     </tr>

     <tr>
        <th colspan="1" id="">Current anti-reaction therapy</th>
        <td colspan="6">
        <?php while($row_form2_checkBox2 = mysqli_fetch_assoc($result_form2_checkBox2)){
         echo $row_form2_checkBox2['current_anti_reaction']."<br>"; } 
         ?></td>
     </tr>

       <?php while( $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal = mysqli_fetch_assoc($result_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal)){ ?>

      <tr>
        <th colspan="1" id="">Date started prednisolone(for this episode of ENL)</th>
        <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['date_started_predni']; ?></td>
      </tr>

      <tr>
        <th colspan="1" id="">Current daily dose of prednislone</th>
        <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['current_dose_predni']; ?></td>
      </tr>

      <tr>
        <th colspan="1" id="">Current daily dose of clofazmine</th>
        <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['current_dose_clofa']; ?></td>
      </tr>

      <tr>
        <th colspan="1" id="">Current daily dose of Thalidamide</th>
        <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['current_dose_thal']; ?></td>
      </tr>

      <?php } ?>

      <tr>
        <th colspan="7" id="" style="color: blue"><u>Physical Assessment:</u></th>
      </tr>

      <?php while( $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2 = mysqli_fetch_assoc($result_form2_nfa_changeInNfi_changeInNfiDesc_eess2)){ ?>

	       <tr>
	        <th colspan="1" id="">NFA</th>
	        <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['nfa']; ?></td>
	      </tr>

	      <tr>
	        <th colspan="1" id="">New NFI(i.e within past 6m,not yet treated with steroids)?</th>
	        <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['change_in_nfi']; ?></td>
	      </tr>

	      <tr>
	        <th colspan="1" id="">If yes?</th>
	        <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['change_in_nfi_desc']; ?></td>
	      </tr>

	       <tr>
	        <th colspan="1" id="">EESS</th>
	        <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['eess_2']; ?></td>
	      </tr>

      <?php } ?>

      <tr>
        <th colspan="7" id="" style="color: blue"><u>Physical Experience Assessment:</u></th>
      </tr>

      <?php while( $row_form2_qol2Score_vasForPig2 = mysqli_fetch_assoc($result_form2_qol2Score_vasForPig2)){ ?>

	       <tr>
	        <th colspan="1" id="">QOL(SF36) score</th>
	        <td colspan="6"><?php echo $row_form2_qol2Score_vasForPig2['qol_2_score']; ?></td>
	      </tr>

	      <tr>
	        <th colspan="1" id="">VAS for pigmentation</th>
	        <td colspan="6"><?php echo $row_form2_qol2Score_vasForPig2['vas_for_pig_2']; ?></td>
	      </tr>

     <?php } ?>
     
	 <tr>
        <th colspan="1" id="">Checklist for adverse effects of prednisolone</th>
        <td colspan="6">
        <?php while($row_form2_checkBox = mysqli_fetch_assoc($result_form2_checkBox)){
         echo $row_form2_checkBox['adverse_predni']."<br>"; } 
         ?></td>
     </tr>

     <tr>
        <th colspan="7" id="" style="color: blue"><u>Decision:</u></th>
      </tr>

     <?php while( $row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa = mysqli_fetch_assoc($result_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa)){ ?>

	       <tr>
	        <th colspan="1" id="">1. Observation or Randomize:</th>
	        <td colspan="6"><?php echo $row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['obs']; ?></td>
	      </tr>

	       <tr>
        	<th colspan="7" id="">Treatment:</th>
      	  </tr>

	      <tr>
	      	<th colspan="1" id="">Prednisolone dosage</th>
	      	<td colspan="5"><?php echo $row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dose_predni']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Duration:</strong><?php echo "  ".$row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dur_predni']; ?></td>
	      </tr>

	       <tr>
	      	<th colspan="1" id="">Chlofazimine dosage</th>
	      	<td colspan="5"><?php echo $row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dose_clofa']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Duration:</strong><?php echo "  ".$row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dur_clofa']; ?></td>
	      </tr>

	<?php } ?>	 

	 <?php while( $row_form2_others = mysqli_fetch_assoc($result_form2_others)){ ?>

	 	 <tr>
	      	<th colspan="1" id="">Other drug name</th>
	      	<td colspan="4"><?php echo $row_form2_others['others_drug_name']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Dosage:</strong><?php echo "  ".$row_form2_others['others_drug_dosage']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Duration:</strong><?php echo "  ".$row_form2_others['others_drug_duration']; ?></td>
	      </tr>

	  <?php } ?>

	  <?php while( $row_form2_next_asse_date = mysqli_fetch_assoc($result_form2_next_asse_date)){ ?>

	       <tr>
	        <th colspan="1" id="">Next Assessment Date:</th>
	        <td colspan="6"><?php echo $row_form2_next_asse_date['next_asse_date']; ?></td>
	      </tr>

	  <?php } ?>
	</tbody>
</table>
</div>

<div class="d-flex justify-content-center">
  <a href="" target="_blank" class=""><button type="button" class="btn btn-danger ">Edit Details</button></a><br><br>
</div>

<?php

  $servername = "localhost";
	$username = "root";
	$password = "jaydeep";
	$dbname = "blp-2.0";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$id = $_GET['pid'];

$result_form_3_patient_name = mysqli_query($conn, "SELECT patient_name from form3 where pid = $id");
$result_form_3_clinic_id_date = mysqli_query($conn, "SELECT clinic_id, date from form3 where pid = $id");
$result_form_3_study_no = mysqli_query($conn, "SELECT study_no from form3 where pid = $id");
$result_form_3_current_reaction_status_staff_name= mysqli_query($conn, "SELECT current_reaction_status,staff_name from form3 where pid = $id");
$result_form_3_nfa_3_new_nfi_3_Add1 = mysqli_query($conn, "SELECT nfa_3 ,new_nfi_3, Add1 from form3 where pid = $id");
$result_form_3_eess_3_qol_3_vas_for_pig_3 = mysqli_query($conn, "SELECT eess_3, qol_3, vas_for_pig_3 from form3 where pid = $id");
$result_form_3_rand_date= mysqli_query($conn, "SELECT rand_date from form3 where pid = $id");
$result_form_3_drug_dose_clofa_drug_dura_clofa= mysqli_query($conn, "SELECT drug_dose_clofa, drug_dura_clofa from form3 where pid = $id");
$result_form_3_drug_dose_predni_drug_dura_predni= mysqli_query($conn, "SELECT drug_dose_predni, drug_dura_predni from form3 where pid = $id");
$result_form_3_advise_ad= mysqli_query($conn, "SELECT advise_ad from form3 where pid = $id");
$result_form_3_assessment_date_prednisolone_review = mysqli_query($conn, "SELECT assessment_date, prednisolone_review from form3 where pid = $id");
$result_form_3_others_drug_name_others_drug_dosage_others_drug_duration = mysqli_query($conn, "SELECT * from form3_others where pid = $id");

$result_form_4_patient_name = mysqli_query($conn, "SELECT patient_name from form4 where pid = $id");
$result_form_4_clinic_id_formDate = mysqli_query($conn, "SELECT clinic_id, formDate from form4 where pid = $id");
$result_form_4_study_no = mysqli_query($conn, "SELECT study_no from form4 where pid = $id");
$result_form_4_staff_name_current_status = mysqli_query($conn, "SELECT staff_name, current_status from form4 where pid = $id");
$result_form_4_nfa_4_eess_4 = mysqli_query($conn, "SELECT nfa_4, eess_4 from form4 where pid = $id");
$result_form_4_qol_4_vas_4 = mysqli_query($conn, "SELECT qol_4, vas_4 from form4 where pid = $id");
$result_form_4_enl_present_time_since = mysqli_query($conn, "SELECT enl_present_time_since from form4 where pid = $id");
$result_form_4_time_since_last_received_prednisolone = mysqli_query($conn, "SELECT time_since_last_received_prednisolone from form4 where pid = $id");
$result_form_4_recurrent_enl_start_predni = mysqli_query($conn, "SELECT recurrent_enl_start_predni from form4 where pid = $id");
$result_form_4_advised_admission_nextDate_nextPDate = mysqli_query($conn, "SELECT advised_admission, nextDate, nextPDate from form4 where pid = $id");
$result_form_4_checklist_predni = mysqli_query($conn, "SELECT * from form4_checkbox where pid = $id");
$result_form_4_checklist_clofa = mysqli_query($conn, "SELECT * from form4_checkbox2 where pid = $id");

$result_form5_cid_d = mysqli_query($conn, "SELECT clinic_id, date from form5 where pid = $id");
$result_form5_ptn_sn_stn = mysqli_query($conn, "SELECT patient_name, study_no, staff_name from form5 where pid = $id");
$result_form5_pt_s_l_v = mysqli_query($conn, "SELECT patient_since_last_visit from form5 where pid = $id");
$result_form5_p_cv     = mysqli_query($conn, "SELECT prednisolone_5, clofazimine_vitamins from form5 where pid = $id");
$result_form5_nfa_nfi5 =  mysqli_query($conn, "SELECT nfa_5, new_nfi_5 from form5 where pid = $id");
$result_form5_if_eess =  mysqli_query($conn, "SELECT if_yes, eess_score_5 from form5 where pid = $id");
$result_form5_ad_pred  = mysqli_query($conn, "SELECT * from form5_checkbox where pid = $id");
$result_form5_ad_clofa  = mysqli_query($conn, "SELECT * from form5_checkbox2 where pid = $id");
$result_form5_isw_tf  = mysqli_query($conn, "SELECT patient_worse, time_since_flare_began from form5 where pid = $id");
$result_form5_cssc  = mysqli_query($conn, "SELECT dose_std_course, dura_std_course from form5 where pid = $id");
$result_form5_ap  = mysqli_query($conn, "SELECT dose_add_predni, dura_add_predni from form5 where pid = $id");
$result_form5_aa_dona = mysqli_query($conn, "SELECT advised_admission, date_of_next_assessment_5 from form5 where pid = $id");

$result_form_6_clinic_id_date = mysqli_query($conn, "SELECT clinic_id, date from form6 where pid = $id");   
$result_form_6_current_status = mysqli_query($conn, "SELECT current_status from form6 where pid = $id");    
$result_form_6_patient_name = mysqli_query($conn, "SELECT patient_name from form6 where pid = $id");   
$result_form_6_clinic_staff_name_study_no = mysqli_query($conn, "SELECT staff_name,study_no from form6 where pid = $id");     
$result_form_6_nfa_eess_qol_vas = mysqli_query($conn, "SELECT nfa,eess,qol,vas from form6 where pid = $id");
$result_form_6_current_antireaction_therapy = mysqli_query($conn, "SELECT current_antireaction_therapy from form6 where pid = $id");
$result_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl= mysqli_query($conn, "SELECT no_weeks_extra_clofazimine, enl_at_randomisation, duration_first_episode, flare_of_enl from form6 where pid = $id");
$result_form_6_if_flare_how_long_eess_at_flare = mysqli_query($conn, "SELECT if_flare_how_long, eess_at_flare from form6 where pid = $id");
$result_form_6_recurrent_enl_steroids_chronic_enl_randomisation = mysqli_query($conn, "SELECT recurrent_enl_steroids,chronic_enl_randomisation from form6 where pid = $id");
$result_form_6_total_steroids_consumed = mysqli_query($conn, "SELECT total_steroids_consumed from form6 where pid = $id");
$result_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol = mysqli_query($conn, "SELECT change_in_nfa,change_in_nfa_desc,change_in_qol from form6 where pid = $id");
$result_form_6_adverse_effect_of_drug_drug_desc = mysqli_query($conn, "SELECT adverse_effect_of_drug,drug_desc from form6 where pid = $id");
$result_form6_ad_pred  = mysqli_query($conn, "SELECT * from form6_checkbox where pid = $id");
$result_form6_ad_clofa  = mysqli_query($conn, "SELECT * from form6_checkbox2 where pid = $id");
$result_form6_with  = mysqli_query($conn, "SELECT * from form6_checkbox3 where pid = $id");
$result_form_6_others = mysqli_query($conn, "SELECT others from form6 where pid = $id");

?>
    
<div class="container">
  <table class="table table-bordered">

  <?php if(mysqli_num_rows($result_form_3_clinic_id_date)>0){ ?> 

    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Pre-randomisation 3 monthly routine follow up sheet</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>

      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form3_clinic_id_date = mysqli_fetch_assoc($result_form_3_clinic_id_date)){ ?>
        <td colspan="5"><?php echo $row_form3_clinic_id_date['clinic_id']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form3_clinic_id_date['date']; ?></td>
      </tr>
        <?php } ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

      <?php while ($row_form_3_current_reaction_status_staff_name = mysqli_fetch_assoc($result_form_3_current_reaction_status_staff_name)){ ?>
      <tr>
        <th colspan="">Current Reaction Status</th>
            <td colspan="5"><?php echo $row_form_3_current_reaction_status_staff_name['current_reaction_status']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Staff Name:</strong><?php echo "  ".$row_form_3_current_reaction_status_staff_name['staff_name']; ?></td>
      </tr>
      <?php } ?>

      <?php while ($row_form_3_patient_name = mysqli_fetch_assoc($result_form_3_patient_name)){ ?>
      <tr>
        <th colspan="1" id="">Name</th>
        <td colspan="6"><?php echo $row_form_3_patient_name['patient_name']; ?></td>
      </tr>
		<?php } ?>
		
	<?php while ($row_form_3_nfa_3_new_nfi_3_Add1 = mysqli_fetch_assoc($result_form_3_nfa_3_new_nfi_3_Add1)){ ?>	
      <tr>
        <th colspan="" id="">NFA</th>
        <td colspan="6"><?php echo $row_form_3_nfa_3_new_nfi_3_Add1['nfa_3']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">New NFI</th>
        <td colspan="6"><?php echo $row_form_3_nfa_3_new_nfi_3_Add1['new_nfi_3']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">Notes</th>
        <td colspan="6"><?php echo $row_form_3_nfa_3_new_nfi_3_Add1['Add1']; ?></td>
      </tr>
      <?php } ?>
	  
	  <?php while ($row_form_3_current_reaction_status_staff_name = mysqli_fetch_assoc($result_form_3_current_reaction_status_staff_name)){ ?>
      <tr>
        <th colspan="">Current Reaction Status</th>
            <td colspan="5"><?php echo $row_form_3_current_reaction_status_staff_name['current_reaction_status']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Staff Name</strong><?php echo "  ".$row_form_3_current_reaction_status_staff_name['staff_name']; ?></td>
      </tr>
      <?php } ?>
	  
	  <?php while ($row_form_3_eess_3_qol_3_vas_for_pig_3 = mysqli_fetch_assoc($result_form_3_eess_3_qol_3_vas_for_pig_3)){ ?>	
      <tr>
        <th colspan="" id="">EESS Score</th>
        <td colspan="6"><?php echo $row_form_3_eess_3_qol_3_vas_for_pig_3['eess_3']; ?></td>
      </tr>
	<tr>
        <th colspan="7" id="" style="color:blue;"><u>Patient Experience Assessment:</u></th>
      </tr>

      <tr>
        <th colspan="" id="">QOL</th>
        <td colspan="6"><?php echo $row_form_3_eess_3_qol_3_vas_for_pig_3['qol_3']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">VAS</th>
        <td colspan="6"><?php echo $row_form_3_eess_3_qol_3_vas_for_pig_3['vas_for_pig_3']; ?></td>
      </tr>
      <?php } ?>

	<?php while ($row_form_3_rand_date = mysqli_fetch_assoc($result_form_3_rand_date)){ ?>
      <tr>
        <th colspan="1" id="">Randomisation Date</th>
        <td colspan="6"><?php echo $row_form_3_rand_date['rand_date']; ?></td>
      </tr>
		<?php } ?>
		
		<?php while ($row_form_3_drug_dose_predni_drug_dura_predni = mysqli_fetch_assoc($result_form_3_drug_dose_predni_drug_dura_predni)){ ?>
		<tr>
        <th colspan="7" id="" style="color:blue;"><u>Treatment Prescribed:</u></th>
      </tr>

      <tr>
        <th colspan="">Drug Dosage Prednisolone</th>
            <td colspan="5"><?php echo $row_form_3_drug_dose_predni_drug_dura_predni['drug_dose_predni']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  ".$row_form_3_drug_dose_predni_drug_dura_predni['drug_dura_predni']; ?></td>
      </tr>
      <?php } ?>
	  
	  <?php while ($row_form_3_drug_dose_clofa_drug_dura_clofa = mysqli_fetch_assoc($result_form_3_drug_dose_clofa_drug_dura_clofa)){ ?>
      <tr>
        <th colspan="">Drug Dosage Clofa</th>
            <td colspan="5"><?php echo $row_form_3_drug_dose_clofa_drug_dura_clofa['drug_dose_clofa']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  ".$row_form_3_drug_dose_clofa_drug_dura_clofa['drug_dura_clofa']; ?></td>
      </tr>
      <?php } ?>
		
	  <?php while ($row_form_3_others_drug_name_others_drug_dosage_others_drug_duration = mysqli_fetch_assoc($result_form_3_others_drug_name_others_drug_dosage_others_drug_duration)){ ?>
      <tr>
        <th colspan="">Drug Name</th>
            <td colspan="1"><?php echo $row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_name']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Drug Dosage:</strong><?php echo "  ".$row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_dosage']; ?></td>
			<td colspan="3" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  ".$row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_duration']; ?></td>
      </tr>
      <?php } ?>
      
	<?php while ($row_form_3_advise_ad = mysqli_fetch_assoc($result_form_3_advise_ad)){ ?>
      <tr>
        <th colspan="1" id="">Advised Admission</th>
        <td colspan="6"><?php echo $row_form_3_advise_ad['advise_ad']; ?></td>
      </tr>
		<?php } ?>
     
	 <?php while ($row_form_3_assessment_date_prednisolone_review = mysqli_fetch_assoc($result_form_3_assessment_date_prednisolone_review)){ ?>
      <tr>
        <th colspan="">Assessment Date</th>
            <td colspan="5"><?php echo $row_form_3_assessment_date_prednisolone_review['assessment_date']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Prednisolone Review:</strong><?php echo "  ".$row_form_3_assessment_date_prednisolone_review['prednisolone_review']; ?></td>
      </tr>
      <?php } ?>

    <?php } ?>
  </tbody>
</table>
</div>

<div class="container">
  <table class="table table-bordered">

  <?php if(mysqli_num_rows($result_form_4_clinic_id_formDate)>0){ ?>

    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Post-randomisation 3 monthly routine follow up sheet (while no ENL treatment)</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>

      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form_4_clinic_id_formDate = mysqli_fetch_assoc($result_form_4_clinic_id_formDate)){ ?>
        <td colspan="5"><?php echo $row_form_4_clinic_id_formDate['clinic_id']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form_4_clinic_id_formDate['formDate']; ?></td>
      </tr>
        <?php } ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

         <?php while ( $row_form_4_patient_name = mysqli_fetch_assoc($result_form_4_patient_name)){ ?>
      <tr>
        <th colspan="1" id="">Patient Name</th>
        <td colspan="6"><?php echo $row_form_4_patient_name['patient_name']; ?></td>
      </tr>
      <?php } ?>

         <?php while ( $row_form_4_study_no = mysqli_fetch_assoc($result_form_4_study_no)){ ?>
      <tr>
        <th colspan="1" id="">Study Number</th>
        <td colspan="6"><?php echo $row_form_4_study_no['study_no']; ?></td>
      </tr>
      <?php } ?>
	  
	 <?php while ( $row_form_4_staff_name_current_status = mysqli_fetch_assoc($result_form_4_staff_name_current_status)){ ?>
      <tr>
        <th colspan="1" id="">Staff Name</th>
        <td colspan="6"><?php echo $row_form_4_staff_name_current_status['staff_name']; ?></td>
      </tr>

	  <tr>
        <th colspan="" id="">Current Status</th>
        <td colspan="6"><?php echo $row_form_4_staff_name_current_status['current_status']; ?></td>
      </tr>
      <?php } ?>

	   <tr>
        <th colspan="7" id="" style="color:blue;"><u>Physical Examination</u></th>
        <?php ?>
      </tr>

      <?php while ($row_form_4_nfa_4_eess_4 = mysqli_fetch_assoc($result_form_4_nfa_4_eess_4)){ ?>
      <tr>
        <th colspan="1" id="">NFA</th>
        <td colspan="6"><?php echo $row_form_4_nfa_4_eess_4['nfa_4']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">EESS</th>
        <td colspan="6"><?php echo $row_form_4_nfa_4_eess_4['eess_4']; ?></td>
      </tr>

      <?php } ?>
	   <tr>
        <th colspan="7" id="" style="color:blue;"><u>Patient experience assessment</u></th>
        <?php ?>
	  </tr>
      
	  <?php while ($row_form_4_qol_4_vas_4 = mysqli_fetch_assoc($result_form_4_qol_4_vas_4)){ ?>
      <tr>
        <th colspan="1" id="">QOL Score</th>
        <td colspan="6"><?php echo $row_form_4_qol_4_vas_4['qol_4']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">VAS</th>
        <td colspan="6"><?php echo $row_form_4_qol_4_vas_4['vas_4']; ?></td>
      </tr>
      <?php } ?>
	  
	  <tr>
      <th colspan="" id="">Checklist for adverse effects of prednisolone</th>
            <?php while( $row_form_4_checklist_predni = mysqli_fetch_assoc($result_form_4_checklist_predni)){ ?>
        <td colspan="6"><?php echo $row_form_4_checklist_predni['checklist_predni']; ?></td>
      </tr>
      <?php } ?>

	  <tr>
      <th colspan="" id="">Checklist for adverse effects of Clofazimine</th>
            <?php while( $row_form_4_checklist_clofa = mysqli_fetch_assoc($result_form_4_checklist_clofa)){ ?>
        <td colspan="6"><?php echo $row_form_4_checklist_clofa['checklist_clofa']; ?></td>
      </tr>
      <?php } ?>
		
	  <?php while ( $row_form_4_enl_present_time_since = mysqli_fetch_assoc($result_form_4_enl_present_time_since)){ ?>
      <tr>
        <th colspan="1" id="">Time since onset of this episode</th>
        <td colspan="6"><?php echo $row_form_4_enl_present_time_since['enl_present_time_since']; ?></td>
      </tr>
      <?php } ?>
      
	  <?php while ( $row_form_4_time_since_last_received_prednisolone = mysqli_fetch_assoc($result_form_4_time_since_last_received_prednisolone)){ ?>
      <tr>
        <th colspan="1" id="">Time since last received prednisolone</th>
        <td colspan="6"><?php echo $row_form_4_time_since_last_received_prednisolone['time_since_last_received_prednisolone']; ?></td>
      </tr>
      <?php } ?>
	  
	  <?php while ( $row_form_4_recurrent_enl_start_predni = mysqli_fetch_assoc($result_form_4_recurrent_enl_start_predni)){ ?>
      <tr>
        <th colspan="1" id="">If recurrent ENL ,start prednisolone</th>
        <td colspan="6"><?php echo $row_form_4_recurrent_enl_start_predni['recurrent_enl_start_predni']; ?></td>
      </tr>
      <?php } ?>
	  
	  <?php while ($row_form_4_advised_admission_nextDate_nextPDate = mysqli_fetch_assoc($result_form_4_advised_admission_nextDate_nextPDate)){ ?>
      <tr>
        <th colspan="1" id="">Advised admission</th>
        <td colspan="6"><?php echo $row_form_4_advised_admission_nextDate_nextPDate['advised_admission']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Date for next routine assessment</th>
        <td colspan="6"><?php echo $row_form_4_advised_admission_nextDate_nextPDate['nextDate']; ?></td>
      </tr>
	      
		  <tr>
        <th colspan="" id="">Date of Prednisolone review</th>
        <td colspan="6"><?php echo $row_form_4_advised_admission_nextDate_nextPDate['nextPDate']; ?></td>
      </tr>
      <?php } ?>
     
    <?php } ?>
   </tbody>
</table>
</div>

<div class="container">
  <table class="table table-bordered">

  <?php if(mysqli_num_rows($result_form5_cid_d)>0){ ?>

    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Clinical Record Sheet</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>

      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form5_cid_d = mysqli_fetch_assoc($result_form5_cid_d)){ ?>
        <td colspan="5"><?php echo $row_form5_cid_d['clinic_id']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form5_cid_d['date']; ?></td>
      </tr>
        <?php } ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

      <?php while ( $row_form5_ptn_sn_stn = mysqli_fetch_assoc($result_form5_ptn_sn_stn)){ ?>
      <tr>
        <th colspan="">Patient Name</th>
            <td colspan="2"><?php echo $row_form5_ptn_sn_stn['patient_name']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Staff Name:</strong><?php echo "  ".$row_form5_ptn_sn_stn['staff_name']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Study No:</strong><?php echo "  ".$row_form5_ptn_sn_stn['study_no']; ?></td>
      </tr>
      <?php } ?>

      <?php while ( $row_form5_pt_s_l_v = mysqli_fetch_assoc($result_form5_pt_s_l_v)){ ?>
      <tr>
        <th colspan="1" id="">Patient Since Last Visit</th>
        <td colspan="6"><?php echo $row_form5_pt_s_l_v['patient_since_last_visit']; ?></td>
      </tr>
      <?php } ?>

      <tr>
        <th colspan="7" id="" style="color:blue;"><u>Current Medication:</u></th>
      </tr>
        <?php while( $row_form5_p_cv = mysqli_fetch_assoc($result_form5_p_cv)){ ?>
        <tr>
          <td colspan=""><strong>Prednisolone:</strong><?php echo "  ".$row_form5_p_cv['prednisolone_5']; ?></td>
          <td colspan="7" style="text-align:left"><strong>Clofazimine:</strong><?php echo "  ".$row_form5_p_cv['clofazimine_vitamins']; ?></td>
        </tr>
        <?php } ?>

      <tr>
      <th colspan="7" id="" style="color:blue;"><u>Physical assessment:</u></th>
      </tr>
        <tr>
            <?php while( $row_form5_nfa_nfi5 = mysqli_fetch_assoc($result_form5_nfa_nfi5)){ ?>
        <td colspan=""><strong>NFA:</strong><?php echo " " .$row_form5_nfa_nfi5['nfa_5']; ?></td>
        <td colspan="7" style="text-align:left"><strong>NFI:</strong><?php echo "  ".$row_form5_nfa_nfi5['new_nfi_5']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">NFI and EESS</th>
            <?php while( $row_form5_if_eess = mysqli_fetch_assoc($result_form5_if_eess)){ ?>
        <td colspan="3"><strong>If Yes:</strong><?php echo " ".$row_form5_if_eess['if_yes']; ?></td>
        <td colspan="3" style="text-align:left"><strong>EESS:</strong><?php echo "  ".$row_form5_if_eess['eess_score_5']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">Checklist for adverse effects of prednisolone</th>
            <?php while( $row_form5_ad_pred = mysqli_fetch_assoc($result_form5_ad_pred)){ ?>
        <td colspan="6"><?php echo $row_form5_ad_pred['adverse_effects_predni']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">Checklist for adverse effects of Clofazimine</th>
            <?php while( $row_form5_ad_clofa = mysqli_fetch_assoc($result_form5_ad_clofa)){ ?>
        <td colspan="6"><?php echo $row_form5_ad_clofa['adverse_effects_clofa']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">Is Patient Worst and Time to began Flare</th>
            <?php while( $row_form5_isw_tf = mysqli_fetch_assoc($result_form5_isw_tf)){ ?>
        <td colspan="3"><strong>If Patient Worst:</strong><?php echo " ".$row_form5_isw_tf['patient_worse']; ?></td>
        <td colspan="3"><strong>Time since flare began:</strong><?php echo " ".$row_form5_isw_tf['time_since_flare_began']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="7" id="" style="color:blue;"><u>Treatment Prescribed:</u></th>
      </tr>
      <tr>
      <th colspan="" id="">Continue standard steroid course</th>
            <?php while( $row_form5_cssc = mysqli_fetch_assoc($result_form5_cssc)){ ?>
        <td colspan="3"><strong>Dose:</strong><?php echo " ".$row_form5_cssc['dose_std_course']; ?></td>
        <td colspan="3"><strong>Duration:</strong><?php echo " ".$row_form5_cssc['dura_std_course']; ?></td>
      </tr>
      <?php } ?>

       <tr>
      <th colspan="" id="">Additional Prednisolone</th>
            <?php while( $row_form5_ap = mysqli_fetch_assoc($result_form5_ap)){ ?>
        <td colspan="3"><strong>Dose:</strong><?php echo " ".$row_form5_ap['dose_add_predni']; ?></td>
        <td colspan="3"><strong>Duration:</strong><?php echo " ".$row_form5_ap['dura_add_predni']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">Advised admission</th>
            <?php while( $row_form5_aa_dona = mysqli_fetch_assoc($result_form5_aa_dona)){ ?>
        <td colspan="3"><strong>Advised Admission:</strong><?php echo " ".$row_form5_aa_dona['advised_admission']; ?></td>
        <td colspan="3"><strong>Date of Next Assessment:</strong><?php echo " ".$row_form5_aa_dona['date_of_next_assessment_5']; ?></td>
      </tr>
      <?php } ?>
      
    <?php } ?>
  </tbody>
</table>
</div>

<div class="container">
  <table class="table table-bordered">

  <?php if(mysqli_num_rows($result_form_6_clinic_id_date)>0){ ?>

    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Final follow up sheet at end of 24m from randomization (or at withdrawal)</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>
      
      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form6_clinic_id_date = mysqli_fetch_assoc($result_form_6_clinic_id_date)){ ?>
        <td colspan="5"><?php echo $row_form6_clinic_id_date['clinic_id']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form6_clinic_id_date['date']; ?></td>
      </tr>
        <?php } ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

      <?php while ( $row_form_6_patient_name = mysqli_fetch_assoc($result_form_6_patient_name)){ ?>
      <tr>
        <th colspan="1" id="">Patient Name</th>
        <td colspan="6"><?php echo $row_form_6_patient_name['patient_name']; ?></td>
      </tr>
      <?php } ?>
	 
		<tr>
        <?php while( $row_form_6_clinic_staff_name_study_no = mysqli_fetch_assoc($result_form_6_clinic_staff_name_study_no)){ ?>
        <td colspan=""><strong>Staff Name:</strong><?php echo " " .$row_form_6_clinic_staff_name_study_no['staff_name']; ?></td>
        <td colspan="7" style="text-align:left"><strong>Study No:</strong><?php echo "  ".$row_form_6_clinic_staff_name_study_no['study_no']; ?></td>
      
      <?php } ?></tr>

		<?php while ( $row_form_6_current_status = mysqli_fetch_assoc($result_form_6_current_status)){ ?>
      <tr>
        <th colspan="1" id="">Current Status</th>
        <td colspan="6"><?php echo $row_form_6_current_status['current_status']; ?></td>
      </tr>
      <?php } ?>
		
      <?php while ($row_form_6_nfa_eess_qol_vas = mysqli_fetch_assoc($result_form_6_nfa_eess_qol_vas)){ ?>
      <tr>
        <th colspan="7" id="" style="color: blue;"><u>Physical Assessment:</u></th>
      </tr>
	  <tr>
        <th colspan="1" id="">NFA</th>
        <td colspan="6"><?php echo $row_form_6_nfa_eess_qol_vas['nfa']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">EESS</th>
        <td colspan="6"><?php echo $row_form_6_nfa_eess_qol_vas['eess']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">QOL Score</th>
        <td colspan="6"><?php echo $row_form_6_nfa_eess_qol_vas['qol']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">VAS</th>
        <td colspan="6"><?php echo $row_form_6_nfa_eess_qol_vas['vas']; ?></td>
      </tr>
      <?php } ?>

		<?php while ( $row_form_6_current_antireaction_therapy = mysqli_fetch_assoc($result_form_6_current_antireaction_therapy)){ ?>
      <tr>
        <th colspan="1" id="">Current Anti-Reaction Therapy</th>
        <td colspan="6"><?php echo   $row_form_6_current_antireaction_therapy['current_antireaction_therapy']; ?></td>
      </tr>
      <?php } ?>
		
		<tr>
      <th colspan="" id="">Checklist for adverse effects of prednisolone</th>
            <?php while( $row_form6_ad_pred = mysqli_fetch_assoc($result_form6_ad_pred)){ ?>
        <td colspan="6"><?php echo $row_form6_ad_pred['adv_eff_predni']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">Checklist for adverse effects of Clofazimine</th>
            <?php while( $row_form6_ad_clofa = mysqli_fetch_assoc($result_form6_ad_clofa)){ ?>
        <td colspan="6"><?php echo $row_form6_ad_clofa['adv_eff_clofa']; ?></td>
      </tr>
      <?php } ?>
		
	<?php while ($row_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl = mysqli_fetch_assoc($result_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl)){ ?>
      <tr>
        <th colspan="7" id="" style="color: blue;"><u>Summary of Observations:</u></th>
      </tr>
	  <tr>
        <th colspan="1" id="">Number of weeks extra vitamins received</th>
        <td colspan="6"><?php echo $row_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl['no_weeks_extra_clofazimine']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">ENL at Randomization</th>
        <td colspan="6"><?php echo $row_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl['enl_at_randomisation']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Duration of 1st Episode</th>
        <td colspan="6"><?php echo $row_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl['duration_first_episode']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">Flare of ENL while on steroid</th>
        <td colspan="6"><?php echo $row_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl['flare_of_enl']; ?></td>
      </tr>
      <?php } ?>

	<tr>
        <?php while( $row_form_6_if_flare_how_long_eess_at_flare = mysqli_fetch_assoc($result_form_6_if_flare_how_long_eess_at_flare)){ ?>
        <td colspan=""><strong>First flare after how long: </strong><?php echo $row_form_6_if_flare_how_long_eess_at_flare['if_flare_how_long']; ?></td>
        <td colspan="7" style="text-align:left"><strong>EESS at flare:</strong><?php echo "  ".$row_form_6_if_flare_how_long_eess_at_flare['eess_at_flare']; ?></td>
      </tr>
      <?php } ?>
	<tr>
      
        <?php while( $row_form_6_recurrent_enl_steroids_chronic_enl_randomisation = mysqli_fetch_assoc($result_form_6_recurrent_enl_steroids_chronic_enl_randomisation)){ ?>
        <td colspan=""><strong>Recurrent ENL more than 27 days after end of steroid course:</strong><?php echo"        ".$row_form_6_recurrent_enl_steroids_chronic_enl_randomisation['recurrent_enl_steroids']; ?></td>
        <td colspan="7" style="text-align:left"><strong>Chronic ENL continued after randomization:</strong><?php echo "  ".$row_form_6_recurrent_enl_steroids_chronic_enl_randomisation['recurrent_enl_steroids']; ?></td>
      
      <?php } ?></tr>
		
		<?php while ( $row_form_6_total_steroids_consumed = mysqli_fetch_assoc($result_form_6_total_steroids_consumed)){ ?>
      <tr>
        <th colspan="1" id="">Total Steriod Consumed</th>
        <td colspan="6"><?php echo $row_form_6_total_steroids_consumed['total_steroids_consumed']; ?></td>
      </tr>
      <?php } ?>

		<?php while ($row_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol = mysqli_fetch_assoc($result_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol)){ ?>
      <tr>
        <th colspan="1" id="">Change in NFA Baseline to end</th>
        <td colspan="6"><?php echo $row_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol['change_in_nfa']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">If yes?</th>
        <td colspan="6"><?php echo $row_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol['change_in_nfa_desc']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Change in QOL Score baseline to end</th>
        <td colspan="6"><?php echo $row_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol['change_in_qol']; ?></td>
      </tr>
	  
      <?php } ?>

		<tr>
        <th colspan="1" id="">Adverse Effects of drugs</th>
        <?php while( $row_form_6_adverse_effect_of_drug_drug_desc = mysqli_fetch_assoc($result_form_6_adverse_effect_of_drug_drug_desc)){ ?>
        <td colspan="5"><?php echo $row_form_6_adverse_effect_of_drug_drug_desc['adverse_effect_of_drug']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Adverse Effect:</strong><?php echo "  ".$row_form_6_adverse_effect_of_drug_drug_desc['drug_desc']; ?></td>
      </tr>
        <?php } ?>

		<tr>
      <th colspan="" id="">Reason of withdrawal before 24months observation</th>
            <?php while( $row_form6_with = mysqli_fetch_assoc($result_form6_with)){ ?>
        <td colspan="6"><?php echo $row_form6_with['withdrawal_reason']; ?></td>
      </tr>
      <?php } ?>
		
		<tr>
      <th colspan="" id="">Other Description</th>
            <?php while( $row_form6_others = mysqli_fetch_assoc($result_form_6_others)){ ?>
        <td colspan="6"><?php echo $row_form6_others['others']; ?></td>
      </tr>
      <?php } ?>
        
    <?php } ?>
  </tbody>
</table>
</div>

<div class="btn btn-light-blue" style="display: flex; justify-content:space-around; padding-left:115px;">
  <a href="form_3.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-primary btn-lg btn-block">3. Pre-randomisation 3 monthly routine follow up sheet</button>
  </a><br>
  <a href="form_4.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-primary btn-lg btn-block">4. Post-randomisation 3 monthly routine follow up sheet</button>
  </a><br>
</div>
<div class="btn btn-light-blue" style="display: flex; justify-content:space-around; padding-left:115px;">
  <a href="form_5.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-primary btn-lg btn-block">5. Clinical Record Sheet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;</button>
  </a><br>
  <a href="form_6.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-primary btn-lg btn-block" >6. Final follow up sheet at end of 24m of randomization&nbsp;&nbsp;&nbsp;</button>
  </a><br>
</div>

</body>