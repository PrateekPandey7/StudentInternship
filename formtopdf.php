<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
	function Footer()
    {
        // Go to 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Arial','I',10);
        // Print centered page number
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    }
}

$pdf = new PDF('P','mm',array(300,300));
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(300,5,'NATIONAL PRODUCTIVITY COUNCIL',0,2,'C');
$pdf->Ln(3);
$pdf->Cell(300,5,'APPLICATION PROFORMA',0,2,'C');
$pdf->Ln(3);
$pdf->Cell(300,5,'FOR',0,2,'C');
$pdf->Ln(3);
$pdf->Cell(300,5,'Student Internship Programme',0,1,'C');
$name = "uploads/".$_POST["name"].'('.$_POST["dob"].')'."(Photo).".$imageFileType;

$pdf->Ln(20);
$pdf->SetFont('Arial','B',18);
$pdf->Cell(100,10,'PERSONAL DETAILS',1,0,'C');
$pdf->Ln(2);

//Photo
$pdf->Image($name,250,100,30);
//Name
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Name :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['name']);
$pdf->Ln(10);

//FatherName
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Fathers Name :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['fname']);
$pdf->Ln(10);

//DOB
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Date of Birth :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['dob']);
$pdf->Ln(10);

//Gender
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Gender :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['gender']);
$pdf->Ln(10);

//Nationality
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Nationality :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['nationality']);
$pdf->Ln(10);



//Address
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Address :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['address']);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'City :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['city']);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'State :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['state']);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Pincode :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pincode']);
$pdf->Ln(10);

//Contact
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Contact :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['contact']);
$pdf->Ln(10);

//Email
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Email :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['email']);
$pdf->Ln(10);

//Mobile
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Mobile :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['mobile']);
$pdf->Ln(10);

//Start Date
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Tentative Start Date :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST["sdate"]);
$pdf->Ln(10);

//Date
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Tentative End Date :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST["edate"]);
$pdf->Ln(10);


$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell(100,10,'EDUCATIONAL DETAILS',1,0,'C');

//Education1
$pdf->Ln(2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Qualification');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et11']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Year');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et12']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Institution');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et13']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Marks');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et14']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Remarks');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et15']);
$pdf->Ln(10);
//Education2
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Qualification');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et21']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Year');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et22']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Institution');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et23']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Marks');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et24']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Remarks');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et25']);
$pdf->Ln(10);
//Education3
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Qualification');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et31']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Year');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et32']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Institution');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et33']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Marks');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et34']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Remarks');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et35']);
$pdf->Ln(10);
//Education4
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Qualification');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et41']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Year');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et42']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Institution');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et43']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Marks');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et44']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Remarks');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et45']);
$pdf->Ln(10);
//Education5
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Qualification');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et51']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Year');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et52']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Institution');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et53']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Marks');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et54']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Remarks');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['et55']);
$pdf->Ln(10);

//Details
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Computer Proficiency :');
$pdf->SetFont('Arial','',10);
$pdf->Ln(40);
$pdf->MultiCell(200,7,$_POST['computer'],0,'L',false);


$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell(100,10,'PREVIOUS EXPERIENCE',1,0,'C');
$pdf->Ln(2);

//Experience1
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'S.No.');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet11']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Designation');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet12']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Organization');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet13']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'From');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet14']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'To');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet15']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Salary/Month');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet16']);
$pdf->Ln(10);
//Experience2
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'S.No.');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet11']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Designation');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet22']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Organization');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet23']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'From');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet24']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'To');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet25']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Salary/Month');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet26']);
$pdf->Ln(10);
//Experience3
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'S.No.');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet31']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Designation');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet32']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Organization');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet33']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'From');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet34']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'To');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet35']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Salary/Month');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet36']);
$pdf->Ln(10);
//Experience4
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'S.No.');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet41']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Designation');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet42']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Organization');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet43']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'From');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet44']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'To');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet45']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Salary/Month');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet46']);
$pdf->Ln(10);
//Experience5
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'S.No.');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet51']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Designation');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet52']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Organization');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet53']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'From');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet54']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'To');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet55']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Salary/Month');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pet56']);
$pdf->Ln(10);

$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell(100,10,'PUBLICATIONS',1,0,'C');
$pdf->Ln(2);

//Publication1
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'S.No.');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt11']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Name of Research Paper');
$pdf->SetFont('Arial','',10);
$pdf->Cell(300,50,$_POST['pt12']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Details of Publication');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt13']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'ISSN No/UGC No');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt14']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Impact Factor');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt15']);
$pdf->Ln(10);
//Publication2
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'S.No.');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt21']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Name of Research Paper');
$pdf->SetFont('Arial','',10);
$pdf->Cell(300,50,$_POST['pt22']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Details of Publication');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt23']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'ISSN No/UGC No');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt24']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Impact Factor');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt25']);
$pdf->Ln(10);
//Publication3
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'S.No.');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt31']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Name of Research Paper');
$pdf->SetFont('Arial','',10);
$pdf->Cell(300,50,$_POST['pt32']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Details of Publication');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt33']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'ISSN No/UGC No');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt34']);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,50,'Impact Factor');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST['pt35']);
$pdf->Ln(10);

//Details
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Other Information :');
$pdf->SetFont('Arial','',10);
$pdf->Ln(30);
$pdf->MultiCell(200,7,$_POST['details'],0,'L',false);
$pdf->Ln(10);


//Division
$string = '';
$string = 'CHOICE 1 : '.$div1 . '    CHOICE 2 : ' . $div2 . '    CHOICE 3 : ' . $div3;
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Division :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$string);
$pdf->Ln(10);


//Location
$string = '';
$string = 'CHOICE 1 : '.$loc1 . '    CHOICE 2 : ' . $loc2 . '    CHOICE 3 : ' . $loc3;
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Location :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$string);

$pdf->SetFont('Arial','B',15);
$pdf->Ln(40);
$pdf->Cell(100,10,'Terms and Conditions as specified in the Online Application Proforma/ related notification on NPC website');
$pdf->Ln(15);
$pdf->SetFont('Arial','',12);
if($_POST["gender"] == "Male")
	$string = "I " . $_POST["name"] . " son of " . $_POST["fname"] . " hereby verify that the information provided by me above is true and correct and my application can be summarily rejected if it is found incorrect. I shall further be liable to other legal action. Further, I have read through the terms and conditions and understood them. I agree to these terms and conditions.";
else if($_POST["gender"] == "Female")
	$string = "I " . $_POST["name"] . " daughter of " . $_POST["fname"] . " hereby verify that the information provided by me above is true and correct and my application can be summarily rejected if it is found incorrect. I shall further be liable to other legal action. Further, I have read through the terms and conditions and understood them. I agree to these terms and conditions.";
$pdf->MultiCell(270,7,$string,0,'L',false);
//Place
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,10,'Place :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,10,$_POST["place"]);
$pdf->SetFont('Arial','',12);
$pdf->Cell(50,10,'');
$pdf->Cell(100,10,$_POST["name"]);
$pdf->Ln(10);
//Date
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,10,'Date :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,10,$date);


$target = "Application/".$_POST["name"].'('.$_POST["dob"].')'.".pdf";
$pdf->Output($target,'F'); 
?>