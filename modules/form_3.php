<?php
// include('navbar.php');
//if(!isset($_SESSION['id'])){
  //  echo"<script>
    //alert('Please Login in');
    //document.location.href = 'login.php';
    //</script>
    //";
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/faviconsBLP/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/faviconsBLP/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/faviconsBLP/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/faviconsBLP/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/faviconsBLP/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/faviconsBLP/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/faviconsBLP/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/faviconsBLP/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/faviconsBLP/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../assets/images/faviconsBLP/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/faviconsBLP/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/faviconsBLP/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/faviconsBLP/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/faviconsBLP/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Patient Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css --><!--
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://localhost/BLP/assets/blp/jquery-1.11.1.min.js.download"></script>
<!-- stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="http://localhost/BLP/assets/css/style.css" rel="stylesheet" type="text/css" media="all">

  <!-- header -->   
  <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="../assets/css/form_style.css">
    <style type="text/css">
        
        
    </style>

</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Bombay Leprosy Project </h2>
            <form method="POST" id="signup-form" class="signup-form" onsubmit="return formThreeJavascript(this)" action="../assets/php/form-33.php" enctype="multipart/form-data">
                <div class="form-group" style="margin-top: 20px">
                            <label for="patient_name" class="form-label">Patient Name</label>
                            <input type="text" style="width: 259px" name="patient_name" id="patient_name" placeholder="" />
							<label for="clinic_id" class="form-label">Clinic id</label>
                            <input type="text" style="width: 259px" name="clinic_id" id="clinic_id" placeholder="" />
                            <label for="study_no" class="form-label">Study number</label>
                            <input type="text" style="width: 259px" name="study_no" id="study_no" placeholder="" />
                </div>

            <hr>
				<h3>
                    <span class="title_text"><center><b>3. Pre-randomisation 3 monthly routine follow up sheet(while no ENL treatment)</b></center></span>
                </h3>
            <hr>
                
                <!--<fieldset>-->
				<div class="form-row" style="padding-left: 45px ;margin-top: 9px;">
                            <div class="form-group" style="padding-left: 34px ;margin-top: 9px;">
                                <label for="date" class="form-label">Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <input style="margin-left: 13px;" type="date" name="date" id="date" />
                            </div>
                            <div class="form-group" style="padding-left:300px;">
                                <label for="staff_name" class="form-label">Staff Name</label>
                                <input type="text" name="staff_name" id="staff_name" placeholder="Staff Name" />
                            </div>
                        </div>
				<div class="form-radio" style="padding-left:34px">
                                <label for="current_reaction_status" class="form-label">Current Reaction Status:</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="current_reaction_status" value="no enl" id="no_enl" />
                                    <label for="no_enl" style="width:120px;">No ENL</label>
    
                                    <input type="radio" name="current_reaction_status" value="RR" id="RR" />
                                    <label for="RR" style="width:120px;">RR</label>

                                    <input type="radio" name="current_reaction_status" value="acute enl" id="acute_enl" />
                                    <label for="acute_enl" style="width:120px; ">Acute ENL</label>
									
									<input type="radio" name="current_reaction_status" value="recurrent enl" id="recurrent_enl" />
                                    <label for="recurrent_enl" style="width:120px; ">Recurrent ENL</label>
									
									<input type="radio" name="current_reaction_status" value="chronic enl" id="chronic_enl" />
                                    <label for="chronic_enl" style="width:120px;">Chronic ENL</label>
                                </div></div>
                           
					<div class="form-group" style="padding-left:20px; color:blue;"><label><u><b>Physical Assessment :</u></b></label></div>
					
                    
					
                    <div class="fieldset-content">
                      <!--   <div class="form-group">
                            <label for="ID" class="form-label">ID</label>
                            <input type="text" name="ID" value="1" style="text-align: center;" placeholder=""  />
                        </div> -->
                        
                        <div class="form-group" style="padding-left:34px;">
						<div class="form-radio" >
                                <label for="nfa_3" class="form-label">NFA</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="nfa_3" value="yes" id="nfayes" />
                                    <label for="nfayes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="nfa_3" value="no" id="nfano" />
                                    <label for="nfano" style="width:80px;">No</label>
                                </div>
                            </div>
                         
                 
                        </div>
							<div class="form-radio"style="padding-left:40px;" >
                                <label for="new_nfi_3" class="form-label">new NFI</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="new_nfi_3" value="yes" id="nfiyes" />
                                    <label for="nfiyes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="new_nfi_3" value="no" id="nfino" />
                                    <label for="nfino" style="width:80px;">No</label>
									
                                </div>
								<div style="padding-left:30px;"><textarea rows="4" cols="50" name="Add1" id="Add1" placeholder="within past 6m,not yet treated with steroids" ></textarea></div>
                            </div>
							
<div class="form-group" style="padding-left:60px">
                                <label for="eess" >EESS</label>
                    
								<input type="range" style="border:1px solid;background-color: lightblue;" name="eess_3" id="eess_3" min="0" max="30" value="0" onchange="show_value2(this.value)"/>
								 <span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
								 <span id="slider_value2" style="color:black;font-weight:bold;"></span>
								
								<style type="text/css">
                                #eess_3{
                                    height:0px ;
                                    -webkit-appearance:none;
                                    border-radius: 5px;
                                    background-color: black;
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #eess_3::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #eess_3::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #eess_3:active::-webkit-slider-thumb{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                }
                            </style>
								
								<script type="text/javascript">
								function show_value2(x)
								{
									document.getElementById("slider_value2").innerHTML=x;
								} 
								</script>
                            </div>			
							  
                          
					<div class="form-group" style="padding-left:20px"><label style="color:blue;"><u><b>Patient Experience Assessment :</u></b></label></div>
                    
                        <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                              <label for="qol_3" class="form-label">QOL(SF36) score</label>
                              <input style="width: 180px;"type="text" name="qol_3" id="qol_3" placeholder="QOL score"/>
                          </div>

                          <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                              <label for="vas_for_pig_3" class="form-label">VAS for pigmentation</label>
                              <input style="width: 180px;" type="text" name="vas_for_pig_3" id="vas_for_pig_3" placeholder="VAS between 0-100"/ >
                          </div>
					
                    <label>Randomisation:</label>
                         <div class="form-row" style="padding-left:40px;">
                            <div class="form-group" style="padding-left:34px;">
                                <label for="rand_date" class="form-label">Randomisation Date </label>
                                <input style="margin-left: 10px;" type="date" name="rand_date" id="rand_date"/>
                            </div>
                            
                        </div>
						 <label style="color:blue;"><u><b>Treatment prescribed:</u></b></label>
						 
						 
						 
                       <div class="form-group" style="padding-left: 34px">
                          <label for="dp" class="form-label">Prednisolone</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Drug Dosage</th>
                                            <th>Drug Duration</th>   
                                           <!---  <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>-->
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="drug_dose_predni" class="valid"></td>
                                            <td><input type="text" name="drug_dura_predni"class="valid"></td>
                                           <!--- <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>-->
                                        </tr>
                                        

                                    </tbody>

                            </table>
                        
                        </div>
						
							 
                   
						 
                       <div class="form-group" style="padding-left: 34px">
                          <label for="dp" class="form-label">Chlofazimine</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Drug Dosage</th>
                                            <th>Drug Duration</th>   
                                           <!---  <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>-->
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="drug_dose_clofa" class="valid"></td>
                                            <td><input type="text" name="drug_dura_clofa" class="valid"></td>
                                           <!--- <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>-->
                                        </tr>
                                        

                                    </tbody>

                            </table>
                        
                        </div>
						    <div class="form-group" style="padding-left:34px;">
                                <label  class="form-label">Others</label>
                                 <table style="padding-left: 34px ;margin-top: 9px;" id="tb6" class="tab orlist">
                                    <tbody>
                                          <tr class="tr-header">
                                            <th>Drug Name</th>
                                            <th>Drug Dosage</th>
                                            <th>Drug Duration</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore6" title="Add More Person"><span class="fa fa-plus"></span></a></th>   
                                          </tr> 
                                          <tr style="padding: 2px;" >
                                            <td><input type="text" name="others_drug_name[]" class="valid"></td>
                                            <td><input type="text" name="others_drug_dosage[]" class="valid"></td>
                                            <td><input type="text" name="others_drug_duration[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove6'><span class='fa fa-minus'></span></a></td>                                            
                                          </tr>                                                   
                                    </tbody>
                                   
                                 </table>                                                     
                            </div>
						 <div class="form-group" style="padding-left:34px;">
						<div class="form-radio" >
                                <label for="advise_ad" class="form-label">Adviced admission </label>
                                <div class="form-radio-item">
                                    <input type="radio" name="advise_ad" value="yes" id="advyes" />
                                    <label for="advyes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="advise_ad" value="no" id="advno" />
                                    <label for="advno" style="width:80px;">No</label>
                                </div>
                            </div>
                         
                 
                        </div>
						 <div class="form-row" style="padding-left:60px;">
                            <div class="form-group" >
                                <label for="assessment_date" class="form-label">Date of next Routine<br> Assessment </label>
                                <input style="margin-left: 13px; width:180px;" type="date" name="assessment_date" id="assessment_date"/>
                            </div>
                            
                        </div>
						 <div class="form-row" style="padding-left:12px;">
                            <div class="form-group" >
                                <label for="prednisolone_review" class="form-label">Date of prednisolone review </label>
                                <input style="margin-left: 13px; width:180px;" type="date" name="prednisolone_review" id="prednisolone_review"/>
                            </div>
                            
                        </div>
						
 <input type="submit" value="submit" name="submit" id="submit">
				<br>
                    <div class="fieldset-footer">
                        <span>Form 3</span>
                    </div>
                    </div>
                
                <!--</fieldset>-->

               

            </form>
        </div>
        <div class="copy w3ls">
               <p>&copy; 2019  Bombay Leprosy Project  </p>
            </div>
     </div>


    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <!---  
<script type="text/javascript">
    
$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(0)").clone(true).appendTo("#tb");
              var data1 = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              var data2 = $("#tb tr:eq(2)").clone(true).appendTo("#tb");
              var data3 = $("#tb tr:eq(3)").clone(true).appendTo("#tb");
              var data4 = $("#tb tr:eq(4)").clone(true).appendTo("#tb");
              var data5 = $("#tb tr:eq(5)").clone(true).appendTo("#tb");
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb").deleteRow(trIndex1);
             document.getElementById("tb").deleteRow(trIndex1);
             document.getElementById("tb").deleteRow(trIndex1-1);
             document.getElementById("tb").deleteRow(trIndex1-2);
             document.getElementById("tb").deleteRow(trIndex1-3);
             
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>


<script type="text/javascript">
    
$(function(){
    $('#addMore1').on('click', function() {
              var data = $("#tb1 tr:eq(0)").clone(true).appendTo("#tb1");
              var data1 = $("#tb1 tr:eq(1)").clone(true).appendTo("#tb1");
              var data2 = $("#tb1 tr:eq(2)").clone(true).appendTo("#tb1");
              var data3 = $("#tb1 tr:eq(3)").clone(true).appendTo("#tb1");
              var data4 = $("#tb1 tr:eq(4)").clone(true).appendTo("#tb1");
              var data5 = $("#tb1 tr:eq(5)").clone(true).appendTo("#tb1");
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove1', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb1").deleteRow(trIndex1);
             document.getElementById("tb1").deleteRow(trIndex1);
             document.getElementById("tb1").deleteRow(trIndex1-1);
             document.getElementById("tb1").deleteRow(trIndex1-2);
             document.getElementById("tb1").deleteRow(trIndex1-3);
             
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>


<script type="text/javascript">
$("#Sex").change(function() {
  if ($(this).val() == "female") {
    $('#ObstetricHDiv').show();
   
  } else {
    $('#ObstetricHDiv').hide();
    
  }
});
$("#Sex").trigger("change");
    
    
$(function(){
    $('#addMore6').on('click', function() {
              var data = $("#tb6 tr:eq(0)").clone(true).appendTo("#tb6");
              var data1 = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
              var data2 = $("#tb6 tr:eq(2)").clone(true).appendTo("#tb6");
              var data3 = $("#tb6 tr:eq(3)").clone(true).appendTo("#tb6");
              var data4 = $("#tb6 tr:eq(4)").clone(true).appendTo("#tb6");
              var data5 = $("#tb6 tr:eq(5)").clone(true).appendTo("#tb6");
              var data6 = $("#tb6 tr:eq(6)").clone(true).appendTo("#tb6");
              var data7 = $("#tb6 tr:eq(7)").clone(true).appendTo("#tb6");
              data7.find("input").val('');
              data6.find("input").val('');
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove6', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb6").deleteRow(trIndex1);
             document.getElementById("tb6").deleteRow(trIndex1);
             document.getElementById("tb6").deleteRow(trIndex1-1);
             document.getElementById("tb6").deleteRow(trIndex1-2);
             document.getElementById("tb6").deleteRow(trIndex1-3);
             document.getElementById("tb6").deleteRow(trIndex1-4);
             document.getElementById("tb6").deleteRow(trIndex1-5);
           } else {
             alert("Sorry!! Can't remove first row!");
          } 
      });
});      
</script>

    
<script type="text/javascript">
    
$(function(){
    $('#addMore5').on('click', function() {
              var data = $("#tb5 tr:eq(0)").clone(true).appendTo("#tb5");
              var data1 = $("#tb5 tr:eq(1)").clone(true).appendTo("#tb5");
              var data2 = $("#tb5 tr:eq(2)").clone(true).appendTo("#tb5");
              var data3 = $("#tb5 tr:eq(3)").clone(true).appendTo("#tb5");
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove5', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb5").deleteRow(trIndex1);
             document.getElementById("tb5").deleteRow(trIndex1);
             document.getElementById("tb5").deleteRow(trIndex1-1);
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore7').on('click', function() {
              var data = $("#tb7 tr:eq(0)").clone(true).appendTo("#tb7");
              data.find("input").val('');
     });
     $(document).on('click', '.remove7', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>0) {
             $(this).closest("tr").remove();
             document.getElementById("tb7").deleteRow(trIndex1);
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>-->


<script type="text/javascript">
    
$(function(){
    $('#addMore5').on('click', function() {
        
              var data = $("#tb5 tr:eq(1)").clone(true).appendTo("#tb5");
              data.find("input").val('');
     });
     $(document).on('click', '.remove5', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
}); 
</script>



<script type="text/javascript">
  $(function(){
    $('#avg').on('click', function() {
      var tbl = document.getElementById('tb6');
      var count = 0;
      var total = 0;
      for(var i = 1; i < tbl.rows.length - 1; i++){
        var num = Number(tbl.rows[i].cells[1].children[0].value);
        total += num;
        count++;
    }
      var count1 = 0;
      var total1 = 0;
      for(var i = 1; i < tbl.rows.length - 1; i++){
        var num1 = Number(tbl.rows[i].cells[2].children[0].value);
        total1 += num1;
        count1++;
    }
    var avgMi = (total / count).toFixed(2);
    var avgBi = (total1 / count1).toFixed(2);
    // console.log(avgMi);
    // console.log(avgBi);
    document.getElementById("average").innerHTML = "Average MI &ensp;" + avgMi;
    document.getElementById("average1").innerHTML = "Average BI &ensp;" + avgBi;
    document.getElementById("avg_mi").value = avgMi;
    document.getElementById("avg_bi").value = avgBi;
  });
});
</script>

<script type="text/javascript">
    
$(function(){
    $('#addMore4').on('click', function() {
              var data = $("#tb4 tr:eq(1)").clone(true).appendTo("#tb4");
              data.find("input").val('');
     });
     $(document).on('click', '.remove4', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore6').on('click', function() {
              var data = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
              data.find("input").val('');
     });
     $(document).on('click', '.remove6', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>


<script type="text/javascript">
	 function formThreeJavascript(thisform)
     {

			 var dt3 = thisform.date.value;
			 var asstd3 = thisform.assessment_date.value;
			 var presr3  = thisform.prednisolone_review.value;
			 var qol   = thisform.qol_3.value;
			 var vas   = thisform.vas_for_pig_3.value;

			

			 var p = new Date(dt3);
		     var q = new Date(asstd3);
		     var r = new Date(presr3);


		     var oneJanp =  new Date(new Date(dt3).getFullYear(), 0, 1); 
			 var oneJanq =  new Date(new Date(asstd3).getFullYear(), 0, 1);
			 var oneJanr =  new Date(new Date(presr3).getFullYear(), 0, 1); 
				           
		     var numberOfDaysp =   Math.floor((p  - oneJanp) / (24 * 60 * 60 * 1000)); 
		     var numberOfDaysq =   Math.floor((q  - oneJanq) / (24 * 60 * 60 * 1000)); 
		     var numberOfDaysr =   Math.floor((r  - oneJanr) / (24 * 60 * 60 * 1000)); 

		     var s = Math.ceil((new Date(dt3).getDay() + 1 + numberOfDaysp) / 7);
		     var t = Math.ceil((new Date(asstd3).getDay() + 1 + numberOfDaysq) / 7);
		     var u = Math.ceil((new Date(presr3).getDay() + 1 + numberOfDaysr) / 7);

		     if(t < s + 12)
		     {
		     	alert("Date of assessment should be 12 weeks later");
		     	thisform.assessment_date.focus();
		     	return false;
		     }
             

		     if(u < s + 2)
		     {
		     	alert("Date should be 2 weeks later");
		     	thisform.prednisolone_review.focus();
		     	return false;
		     }

		     if(isNaN(qol))
		     {
		     	alert("enter a valid nunber QOL number");
		     	thisform.qol_3.focus();
		     	return false;
		     }
		     if(isNaN(vas))
		     {
		     	alert("enter a valid VAS number");
		     	thisform.vas_for_pig_3.focus();
		     	return false;
		     }

		     if(vas > 100)
		     {
		     	alert("Number should be between 0 and 100");
		     	thisform.vas_for_pig_3.focus();
		     	return false;
		     }

	     return true;

    }
</script>

</body>

</html> 