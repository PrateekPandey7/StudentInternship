<?php

	$check_list = array($loc1,$loc2,$loc3);
	if(!empty($check_list))
  	{
		foreach($check_list as $selected)
		{
			switch ($selected) 
			{
			    case "Chandigarh":
			        $location .= 'CHD'.';';
			        break;
			    case "Delhi":
			        $location .= 'DLI'.';';
			        break;
			    case "Kanpur":
			        $location .= 'KNR'.';';
			        break;
			    case "Hyderabad":
			        $location .= 'HYD'.';';
			        break;
			    case "Chennai":
			        $location .= 'CHN'.';';
			        break;
			    case "Guwahati":
			        $location .= 'GWH'.';';
			        break;
			    case "Patna":
			        $location .= 'PTN'.';';
			        break;
			    case "Jaipur":
			        $location .= 'JPR'.';';
			        break;
			    case "Mumbai":
			        $location .= 'MUM'.';';
			        break;
			    case "Kolkata":
			        $location .= 'KOL'.';';
			        break;
			    case "Gandhinagar":
			        $location .= 'GND'.';';
			        break;
			    case "Bhubaneswar":
			        $location .= 'BHB'.';';
			        break;
			    case "Bengaluru":
			        $location .= 'BNG'.';';
			        break;
			}
		}
	}
	/*else
	{
		$error .= 'Select atleast 1 Location.';
	}*/

?>