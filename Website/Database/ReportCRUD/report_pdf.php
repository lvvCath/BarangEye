<?php


// $complainant = $_POST['complainant'];
// $c_address = $_POST['c_address'];
// $respondent = $_POST['respondent'];
// $r_address = $_POST['r_address'];
// $complain = $_POST['complain'];
// $date_time = $_POST['date_time'];
// $try = "CATHERINE";
// $case_no = '';
// if (!isset($_POST['complainant'])) {
//     echo "<script type='text/javascript'>alert('$complainant');</script>";
// } else {
//     // Do nothing here!
// }
// Report Data


require_once('../../TCPDF-main/tcpdf.php');

// create new PDF document
$pdf = new TCPDF('p', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Barangeye');

// ---------------------------------------------------------

$pdf->AddPage();

$html = '

<div class="brgyinfo" style="text-align:center; padding-top:50px;">
    <p> Republic of the Philippines     <br>
        Province of Negros Occidental   <br>
        Municipality of Bago            <br>
        Barangay Ma-ao 
    </p>
</div>

<div class="title" style="text-align:center;">
    <h3>OFFICE OF THE LUPONG TAGAPAMAYAPA</h3>
</div>

<table style="width:90%; text-align:center; margin-left:auto; margin-right:auto;">
  <tr>
    <td>
        <p>
            <u> MIA D. REYES</u><br>
                Complainant     <br><br>
                - against -
        </p>
    </td>
    <td>
        Barangay Case No. <u>11</u>
    </td>
  </tr>
  <tr>
    <td>
        <p>
            <br><br>
            <u> KARLOS D. CRUZ</u><br>
                Respondent
        </p>
    </td>
    <td>
        <p>For:<u> Profiling & Verification</u></p>
    </td>
  </tr>
</table>
<div class="subject" style="text-align:center;">
    <h3><strong><u> S U M M O N </u></strong></h3> 
</div>

<div class="body" style="padding-left:100px; padding-right:100px; margin-left:auto; margin-right:auto;">
    <p>
        You are herby summoned to appear before me
        in person, on 6th day of December 2017, at
        10:00 in the morning, For profiling and verification
        of your residency status. This is in connection with 
        the government program. <br> <br>
        You are herby warned that if you refuse or willingfully
        fail to appear in obidience to this summons, you may
        charge with contempt.
        <br><br>
        <strong>
        FAIL NOT OR ELSE FACE PUNISHMENT AS OF CONTEMPT OF COURT
        </strong>
        <br><br>
        Done this 3rd day of December 2017, at the Barangay Ma-ao, Bago City.
    </p>
</div>

<table style="width:90%; text-align:center; margin-left:auto; margin-right:auto;">
  <tr>
    <td>

    </td>
    <td>
        <u>JOVITO M. GAHATON</u><br>
        Punong Barangay
    </td>
  </tr>
  <tr>
    <td>
        <u>KARLOS D. CRUZ</u><br>
        Respondent
    </td>
    <td>
        
    </td>
  </tr>
</table>

';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');



// ---------------------------------------------------------
ob_end_clean();
// Close and output PDF document
// This method has several options, check the source code documentation for more information.

$pdf->Output(__DIR__ . 'Report.pdf', 'I');


//============================================================+
// END OF FILE
//============================================================+

?>