<?php

	if(!empty($_POST['check_list1']))
  	{
		foreach($_POST['check_list1'] as $selected)
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
			    case "Bangalore":
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