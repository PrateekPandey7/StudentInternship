<?php

$error = '';
$name = '';$fname = '';$dob = '';$address = '';$city = '';$state = '';$pincode = '';$contact = '';$email = '';$mobile = '';$heducation = '';$education1 = '';$education2 = '';$education3 = '';$education4 = '';$education5 = '';$experience1 = '';$experience2 = '';$experience3 = '';$experience4 = '';$experience5 = '';$publications1 = '';$gender = '';
$publications2 = '';$publications3 = '';$computer = '';$date = '';$place = '';$division = '';$location = '';$sdate = '';$edate = '';$skills = '';$totalexperience = '';$details = '';$nationality = '';$div1 = '';$div2 = '';$div3 = '';$loc1 = '';$loc2 = '';$loc3 = '';
function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}
if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]))
	{
	    $error = 'Name field cannot be blank.';
	}
	else
	{
	   $name = clean_text($_POST["name"]);
	   //if(!preg_match("/^[a-zA-Z ]*$/",$name))
	   //{
	     //$error = 'Name field not correctly filled.';
	   //}
	}
	if(empty($_POST["fname"]))
	{
	    $error = 'Fathers Name field cannot be blank.';
	}
	else
	{
	   $fname = clean_text($_POST["fname"]);
	   //if(!preg_match("/^[a-zA-Z ]*$/",$fname))
	   //{
	     //$error = 'Fathers Name field not correctly filled .';
	   //}
	}
	if(empty($_POST["dob"]))
	{
	    $error = 'DOB field cannot be blank.';
	}
	else
	{
	   $dob = clean_text($_POST["dob"]);
	}
	if(empty($_POST["address"]))
    {
      $error = '';
    }
    else
    {
      $address = clean_text($_POST["address"]);
    }
    if(empty($_POST["state"]))
    {
      $error = 'State field cannot be blank.';
    }
    else
    {
      $state = clean_text($_POST["state"]);
    }
    if(empty($_POST["city"]))
    {
      $error = 'City field cannot be blank.';
    }
    else
    {
      $city = clean_text($_POST["city"]);
    }
    if(empty($_POST["pincode"]))
    {
      $error = 'PinCode field cannot be blank.';
    }
    else
    {
      $pincode = clean_text($_POST["pincode"]);
    }
    if(empty($_POST["contact"]))
    {
      $error = '';
    }
    else
    {
      $contact = clean_text($_POST["contact"]);
    }
    if(empty($_POST["mobile"]))
    {
      $error = 'Mobile field cannot be blank.';
    }
    else
    {
      $mobile = clean_text($_POST["mobile"]);
    }
	if(empty($_POST["email"]))
	{
	   $error = 'Email field cannot be blank.';
	}
	else
	{
	   $email = clean_text($_POST["email"]);
	   //if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	   //{
	     //$error = 'Email field not correctly filled.';
	   //}
	}
  if(empty($_POST["et11"]) || empty($_POST["et21"]) || empty($_POST["et31"]))
  	{
    	$error = 'Top 3 degree fields cannot be blank.';
  	}
  	else
  	{
    	for($x = 1; $x <= 5; $x++)
    	{
      		$string1 = "et".'1'.$x;
      		$string2 = "et".'2'.$x;
      		$string3 = "et".'3'.$x; 
      		$education1 .= clean_text($_POST["$string1"]).';';
      		$education2 .= clean_text($_POST["$string2"]).';';
      		$education3 .= clean_text($_POST["$string3"]).';';
     	}
     	$heducation = $_POST["et31"];
  	}
  	$education1 = '('.$education1.")    ".'('.$education2.")    ".'('.$education3.")    ";
  	if(empty($_POST["et41"]))
  	{
    	$education4 = '';
  	}
  	else
  	{
    	for($x = 1; $x <= 5; $x++)
    	{
      		$string4 = "et".'4'.$x;
      		$education4 .= clean_text($_POST["$string4"]).';';
    	}
    	$heducation = $_POST["et41"];
    	$education1 .= '('.$education4.")    ";
  	}
  	if(empty($_POST["et51"]))
  	{
    	$education5 = '';
  	}
  	else
  	{
    	for($x = 1; $x <= 5; $x++)
    	{
      		$string5 = "et".'5'.$x;
      		$education5 .= clean_text($_POST["$string5"]).';';
    	}
    	$heducation = $_POST["et51"];
    	$education1 .= '('.$education5.")    ";
  	}

    if(!empty($_POST["details"]))
    {
      $details = clean_text($_POST["details"]);
    }

    if(!empty($_POST["computer"]))
    {
      $computer = clean_text($_POST["computer"]);
    }

    $date = date("Y/m/d"); 

    if(!empty($_POST["place"]))
    {
      $place = clean_text($_POST["place"]);
    }

    if(!empty($_POST["sdate"]))
    {
      $sdate = clean_text($_POST["sdate"]);
    }


    if(!empty($_POST["edate"]))
    {
      $edate = clean_text($_POST["edate"]);
    }
    if(!empty($_POST["nationality"]))
    {
      $nationality = clean_text($_POST["nationality"]);
    }

    if(!empty($_POST["div1"]))
    {
      $div1 = clean_text($_POST["div1"]);
    }
    if(!empty($_POST["div2"]))
    {
      $div2 = clean_text($_POST["div2"]);
    }
    if(!empty($_POST["div3"]))
    {
      $div3 = clean_text($_POST["div3"]);
    }

    if(!empty($_POST["loc1"]))
    {
      $loc1 = clean_text($_POST["loc1"]);
    }
    if(!empty($_POST["loc2"]))
    {
      $loc2 = clean_text($_POST["loc2"]);
    }
    if(!empty($_POST["loc3"]))
    {
      $loc3 = clean_text($_POST["loc3"]);
    }

    if(!empty($_POST["gender"]))
    {
      $gender = clean_text($_POST["gender"]);
    }
    if(!empty($_POST["nationality"]))
    {
      $nationality = clean_text($_POST["nationality"]);
    }



  	include 'personalexperience.php';
  	include 'publications.php';
  	include 'division.php';
  	include 'location.php';

	if(empty($_POST['accept']))
	{
		$error .= '<p class="text-danger"><strong>Please accept the terms and conditions.';
	}

  if($error == '')
  {
      include 'PhotoUpload.php';
  }
	if(file_exists("Internship.csv") == 0)
  {
    $file_open = fopen("Internship.csv","a");
    $form_data = array(
      'sno' => 'S.No.',
      'name' => 'Name',
      'fname' => 'Fathes Name',
      'dob' => 'DoB',
      'gender' => 'Gender',
      'nationality' => 'Nationality',
      'address' => 'Address',
      'city' => 'City',
      'state' => 'State',
      'pincode' => 'PinCode',
      'contact' => 'Contact No.',
      'email' => 'Email',
      'mobile' => 'Mobile No.',
      'startdate' => 'Tentaive Start Date for Internship',
      'enddate' => 'Tentaive End Date for Internship',
      'education' => 'Education',
      'computer' => 'Computer Proficiency',
      'experience' => 'Experienc',
      'totalexperience' => 'Total Experience',
      'publications' => 'Publications',
      'details' => 'Other Information',
      'division' => 'Division (First Preference)',
      'division2' => 'Division (Second/Third Preference)',
      'location' => 'Location (First Preference)',
      'location2' => 'Location (Second/Third Preference)',
      'date' => 'Date',
      'place' => 'Place',
    );
    fputcsv($file_open,$form_data);
  }
	if($error == '' && $flag == 0)
	{
    
		$file_open = fopen("Internship.csv", "a");
		/*$file_open1 = fopen("Report.csv","a");
		$no_rows1 = count(file("Report.csv"));*/
    $no_rows = count(file("Internship.csv"));
    if($no_rows > 1)
    {
      $no_rows = $no_rows;
    }
		$form_data = array(
      'sno' => $no_rows,
			'name' => $name,
			'fname' => $fname,
			'dob' => $dob,
      'gender' => $gender,
		  'nationality' => $nationality,
    	'address' => $address,
			'city' => $city,
			'state' => $state,
			'pincode' => $pincode,
			'contact' => $contact,
			'email' => $email,
			'mobile' => $mobile,
      'startdate' => $sdate,
      'enddate' => $edate,
			'education' => $education1,
      'computer' => $computer,
			'experience' => $experience1,
			'totalexperience' => $totalexperience,
			'publications' => $publications1,
      'details' => $details,
			'division' => $div1,
      'division2' => $div2.'/'.$div3,
      'location' => $loc1,
      'location2' => $loc2.'/'.$loc3,
      'date' => $date,
      'place' => $place,
			);
		/*$form_data1 = array(
			's_no' => $no_rows1,
			'name' => $name,
      'startdate' => $sdate,
      'enddate' => $edate,
			'education' => $heducation,
			'totalexperience' => $totalexperience,
			'division' => $division,
			'location' => $location,
      'date' => $date,
      'place' => $place,
						);
		//include 'ReportLocationWise.php';
    */
		//fputcsv($file_open1,$form_data1);
		fputcsv($file_open, $form_data);
		include 'formtopdf.php';
    $stringfile = 'Application/'.$_POST["name"].'('.$_POST["dob"].').pdf';
    $error = '<p class="text-danger"><strong>Your Information has been recorded.</p>';
    //include 'confirmation.php';
    header('Location: confirmation.php?name='.urlencode($stringfile));
  }
	else
	{
		$error .= '<p class="text-danger"><strong>All Data have not been correctly filled.</p>';
	}
}

?>