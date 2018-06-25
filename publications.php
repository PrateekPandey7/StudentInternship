<?php	
if(empty($_POST["pt11"]))
  	{
    	$publications1 = '';
  	}
  	else
  	{
    	for($x = 1; $x <= 5; $x++)
    	{
      		$string1 = "pt".'1'.$x;
      		$publications1 .= clean_text($_POST["$string1"]).';';
    	}
      $publications1 = '('.$publications1;
  	}
  	if(empty($_POST["pt21"]))
  	{
    	$publications2 = '';
  	}
  	else
  	{
    	for($x = 1; $x <= 5; $x++)
    	{
      		$string2 = "pt".'2'.$x;
      		$publications2 .= clean_text($_POST["$string2"]).';';
    	}
      $publications1 .= ')    ('.$publications2;
  	}
  	if(empty($_POST["pt31"]))
  	{
    	$publications3 = '';
  	}
  	else
  	{
    	for($x = 1; $x <= 5; $x++)
    	{
      		$string3 = "pt".'3'.$x;
      		$publications3 .= clean_text($_POST["$string3"]).';';
    	}
      $publications1 .= ')    ('.$publications3;
  	}

    ?>