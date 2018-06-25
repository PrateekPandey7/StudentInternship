<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{

	function Header()
	{
	    $this->Image('npc.jpg',10,6,30);
	    $this->SetFont('Arial','B',15);
	    $this->Cell(65);
	    $this->Cell(80,10,'Application Proforma',1,0,'C');
	    $this->Ln(20);
	}

}

$pdf = new PDF('P','mm',array(300,300));
$pdf->AddPage();
$name = "uploads/".$_POST["name"].'('.$_POST["dob"].')'."(Photo).jpg";

//Photo
$pdf->Image($name,250,30,30);
$pdf->Ln(10);

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

//Education
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Education :');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);



$pdf->Ln(10);

//Education1
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'Qualification');
$pdf->Cell(100,50,$_POST['et11']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Year');
$pdf->Cell(100,50,$_POST['et12']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Institution');
$pdf->Cell(100,50,$_POST['et13']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Marks');
$pdf->Cell(100,50,$_POST['et14']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Remarks');
$pdf->Cell(100,50,$_POST['et15']);
$pdf->Ln(10);
//Education2
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'Qualification');
$pdf->Cell(100,50,$_POST['et21']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Year');
$pdf->Cell(100,50,$_POST['et22']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Institution');
$pdf->Cell(100,50,$_POST['et23']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Marks');
$pdf->Cell(100,50,$_POST['et24']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Remarks');
$pdf->Cell(100,50,$_POST['et25']);
$pdf->Ln(10);
//Education3
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'Qualification');
$pdf->Cell(100,50,$_POST['et31']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Year');
$pdf->Cell(100,50,$_POST['et32']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Institution');
$pdf->Cell(100,50,$_POST['et33']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Marks');
$pdf->Cell(100,50,$_POST['et34']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Remarks');
$pdf->Cell(100,50,$_POST['et35']);
$pdf->Ln(10);
//Education4
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'Qualification');
$pdf->Cell(100,50,$_POST['et41']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Year');
$pdf->Cell(100,50,$_POST['et42']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Institution');
$pdf->Cell(100,50,$_POST['et43']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Marks');
$pdf->Cell(100,50,$_POST['et44']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Remarks');
$pdf->Cell(100,50,$_POST['et45']);
$pdf->Ln(10);
//Education5
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'Qualification');
$pdf->Cell(100,50,$_POST['et51']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Year');
$pdf->Cell(100,50,$_POST['et52']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Institution');
$pdf->Cell(100,50,$_POST['et53']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Marks');
$pdf->Cell(100,50,$_POST['et54']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Remarks');
$pdf->Cell(100,50,$_POST['et55']);
$pdf->Ln(10);

//Details
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Computer Proficiency :');
$pdf->SetFont('Arial','',10);
$pdf->Ln(40);
$pdf->MultiCell(200,7,$_POST['computer'],0,'L',false);
$pdf->Ln(20);


//Experience
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Experience :');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Ln(10);

//Experience1
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'S.No.');
$pdf->Cell(100,50,$_POST['pet11']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Designation');
$pdf->Cell(100,50,$_POST['pet12']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Organization');
$pdf->Cell(100,50,$_POST['pet13']);
$pdf->Ln(5);
$pdf->Cell(50,50,'From');
$pdf->Cell(100,50,$_POST['pet14']);
$pdf->Ln(5);
$pdf->Cell(50,50,'To');
$pdf->Cell(100,50,$_POST['pet15']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Salary/Month');
$pdf->Cell(100,50,$_POST['pet16']);
$pdf->Ln(10);
//Experience2
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'S.No.');
$pdf->Cell(100,50,$_POST['pet21']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Designation');
$pdf->Cell(100,50,$_POST['pet22']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Organization');
$pdf->Cell(100,50,$_POST['pet23']);
$pdf->Ln(5);
$pdf->Cell(50,50,'From');
$pdf->Cell(100,50,$_POST['pet24']);
$pdf->Ln(5);
$pdf->Cell(50,50,'To');
$pdf->Cell(100,50,$_POST['pet25']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Salary/Month');
$pdf->Cell(100,50,$_POST['pet26']);
$pdf->Ln(10);
//Experience3
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'S.No.');
$pdf->Cell(100,50,$_POST['pet31']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Designation');
$pdf->Cell(100,50,$_POST['pet32']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Organization');
$pdf->Cell(100,50,$_POST['pet33']);
$pdf->Ln(5);
$pdf->Cell(50,50,'From');
$pdf->Cell(100,50,$_POST['pet34']);
$pdf->Ln(5);
$pdf->Cell(50,50,'To');
$pdf->Cell(100,50,$_POST['pet35']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Salary/Month');
$pdf->Cell(100,50,$_POST['pet36']);
$pdf->Ln(10);
//Experience4
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'S.No.');
$pdf->Cell(100,50,$_POST['pet41']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Designation');
$pdf->Cell(100,50,$_POST['pet42']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Organization');
$pdf->Cell(100,50,$_POST['pet43']);
$pdf->Ln(5);
$pdf->Cell(50,50,'From');
$pdf->Cell(100,50,$_POST['pet44']);
$pdf->Ln(5);
$pdf->Cell(50,50,'To');
$pdf->Cell(100,50,$_POST['pet45']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Salary/Month');
$pdf->Cell(100,50,$_POST['pet46']);
$pdf->Ln(10);
//Experience5
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'S.No.');
$pdf->Cell(100,50,$_POST['pet51']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Designation');
$pdf->Cell(100,50,$_POST['pet52']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Organization');
$pdf->Cell(100,50,$_POST['pet53']);
$pdf->Ln(5);
$pdf->Cell(50,50,'From');
$pdf->Cell(100,50,$_POST['pet54']);
$pdf->Ln(5);
$pdf->Cell(50,50,'To');
$pdf->Cell(100,50,$_POST['pet55']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Salary/Month');
$pdf->Cell(100,50,$_POST['pet56']);
$pdf->Ln(10);

//Publication
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Publication :');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Ln(10);

//Publication1
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'S.No.');
$pdf->Cell(100,50,$_POST['pt11']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Name of Research Paper');
$pdf->Cell(300,50,$_POST['pt12']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Details of Publication');
$pdf->Cell(100,50,$_POST['pt13']);
$pdf->Ln(5);
$pdf->Cell(50,50,'ISSN No/UGC No');
$pdf->Cell(100,50,$_POST['pt14']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Impact Factor');
$pdf->Cell(100,50,$_POST['pt15']);
$pdf->Ln(10);
//Publication2
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'S.No.');
$pdf->Cell(100,50,$_POST['pt21']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Name of Research Paper');
$pdf->Cell(300,50,$_POST['pt22']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Details of Publication');
$pdf->Cell(100,50,$_POST['pt23']);
$pdf->Ln(5);
$pdf->Cell(50,50,'ISSN No/UGC No');
$pdf->Cell(100,50,$_POST['pt24']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Impact Factor');
$pdf->Cell(100,50,$_POST['pt25']);
$pdf->Ln(10);
//Publication3
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,50,'S.No.');
$pdf->Cell(100,50,$_POST['pt31']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Name of Research Paper');
$pdf->Cell(300,50,$_POST['pt32']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Details of Publication');
$pdf->Cell(100,50,$_POST['pt33']);
$pdf->Ln(5);
$pdf->Cell(50,50,'ISSN No/UGC No');
$pdf->Cell(100,50,$_POST['pt34']);
$pdf->Ln(5);
$pdf->Cell(50,50,'Impact Factor');
$pdf->Cell(100,50,$_POST['pt35']);
$pdf->Ln(10);


//Details
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Other Information :');
$pdf->SetFont('Arial','',10);
$pdf->Ln(40);
$pdf->MultiCell(200,7,$_POST['details'],0,'L',false);
$pdf->Ln(20);


//Division
$string = '';
foreach($_POST['check_list'] as $selected)
{
	$string .= $selected." / ";
}
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Division :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$string);
$pdf->Ln(10);


//Location
$string = '';
foreach($_POST['check_list1'] as $selected)
{
	$string .= $selected." / ";
}
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Location :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$string);
$pdf->Ln(10);

//Date
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Date :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST["date"]);
$pdf->Ln(10);


//Place
$pdf->SetFont('Arial','B',14);
$pdf->Cell(50,50,'Place :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$_POST["place"]);
$pdf->Ln(10);

$target = "Application/".$_POST["name"].'('.$_POST["dob"].')'.".pdf";
$pdf->Output($target,'F'); 
?>