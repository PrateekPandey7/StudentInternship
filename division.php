<?php

	$check_list = array($div1,$div2,$div3);
	if(!empty($check_list))
  	{
		foreach($check_list as $selected)
		{
			switch ($selected) 
			{
			    case "Economics Services":
			        $division .= 'ES'.';';
			        break;
			    case "Agribusiness Division":
			        $division .= 'AB'.';';
			        break;
			    case "Energy Management":
			        $division .= 'EM'.';';
			        break;
			    case "Information Technology":
			        $division .= 'IT'.';';
			        break;
			    case "Environment Management":
			        $division .= 'EN'.';';
			        break;
			    case "Human Resource Management":
			        $division .= 'HRM'.';';
			        break;
			    case "Technology Management":
			        $division .= 'TM'.';';
			        break;
			    case "Productivity Awareness":
			        $division .= 'PA'.';';
			        break;
			    case "Industrial Engineering":
			        $division .= 'IE'.';';
			        break;
			    case "Finance Division":
			        $division .= 'FN'.';';
			        break;
			    case "Employee Development and Legal Cell":
			        $division .= 'ED'.';';
			        break;
			}
		}
	}
	/*else
	{
		$error .= 'Select atleast 1 Division.';
	}*/

?>