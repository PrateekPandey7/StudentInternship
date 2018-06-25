<?php	

$years1 = 0;$months1 = 0;$years2 = 0;$months2 = 0;$years3 = 0;$months3 = 0;$years4 = 0;$months4 = 0;$years5 = 0;$months5 = 0;

if(empty($_POST["pet11"]))
  	{
    	$experience1 = '';
  	}
  	else
  	{
    	for($x = 1; $x <= 6; $x++)
    	{
      		$string1 = "pet".'1'.$x;
      		$experience1 .= clean_text($_POST["$string1"]).';';
          if($x == 4)
            $date1 = $_POST["$string1"];
          if($x == 5)
            $date2 = $_POST["$string1"];
      }
      $diff = abs(strtotime($date2) - strtotime($date1));
      $years1 = floor($diff / (365*60*60*24));
      $months1 = floor(($diff - ($years1 * (365*60*60*24))) / (30*60*60*24));
      $experience1 = '('.$experience1;
  	}
  	if(empty($_POST["pet21"]))
  	{
    	$experience2 = '';
  	}
  	else
  	{
    	for($x = 1; $x <= 6; $x++)
    	{
      		$string2 = "pet".'2'.$x;
      		$experience2 .= clean_text($_POST["$string2"]).';';
          if($x == 4)
            $date1 = $_POST["$string2"];
          if($x == 5)
            $date2 = $_POST["$string2"];
    	}
      $diff = abs(strtotime($date2) - strtotime($date1));
      $years2 = floor($diff / (365*60*60*24));
      $months2 = floor(($diff - ($years2 * (365*60*60*24))) / (30*60*60*24));
      $experience1 .= ')    ('.$experience2;
  	}
  	if(empty($_POST["pet31"]))
  	{
    	$experience3 = '';
  	}
  	else
  	{
    	for($x = 1; $x <= 6; $x++)
    	{
      		$string3 = "pet".'3'.$x;
      		$experience3 .= clean_text($_POST["$string3"]).';';
          if($x == 4)
            $date1 = $_POST["$string3"];
          if($x == 5)
            $date2 = $_POST["$string3"];
    	}
      $diff = abs(strtotime($date2) - strtotime($date1));
      $years3 = floor($diff / (365*60*60*24));
      $months3 = floor(($diff - ($years3 * (365*60*60*24))) / (30*60*60*24));
      $experience1 .= ')    ('.$experience3;
  	}
  	if(empty($_POST["pet41"]))
  	{
    	$experience4 = '';
  	}
  	else
  	{
    	for($x = 1; $x <= 6; $x++)
    	{
      		$string4 = "pet".'4'.$x;
      		$experience4 .= clean_text($_POST["$string4"]).';';
          if($x == 4)
            $date1 = $_POST["$string4"];
          if($x == 5)
            $date2 = $_POST["$string4"];
    	}
      $diff = abs(strtotime($date2) - strtotime($date1));
      $years4 = floor($diff / (365*60*60*24));
      $months4 = floor(($diff - ($years4 * (365*60*60*24))) / (30*60*60*24));
      $experience1 .= ')    ('.$experience4;
  	}
  	if(empty($_POST["pet51"]))
  	{
    	$experience5 = '';
  	}
  	else
  	{
    	for($x = 1; $x <= 6; $x++)
    	{
      		$string5 = "pet".'5'.$x;
      		$experience5 .= clean_text($_POST["$string5"]).';';
          if($x == 4)
            $date1 = $_POST["$string5"];
          if($x == 5)
            $date2 = $_POST["$string5"];
    	}
      $diff = abs(strtotime($date2) - strtotime($date1));
      $years5 = floor($diff / (365*60*60*24));
      $months5 = floor(($diff - ($years5 * (365*60*60*24))) / (30*60*60*24));
      $experience1 .= ')    ('.$experience5;
  	}

    $totalyear = $years1+$years2+$years3+$years4+$years5;
    $totalmonth = $months1+$months2+$months3+$months4+$months5;
    if($totalmonth > 12)
      $totalyear = $totalyear + ($totalmonth/12);
    $totalmonth = $totalmonth%12;
    $totalexperience = $totalyear."years-".$totalmonth."months";
    ?>