<?php
include 'config.php';

$applicant_fname = $_POST['applicant_fname'];
$applicant_lname = $_POST['applicant_lname'];
$applicant_email = $_POST['applicant_email'];
$applicant_city = $_POST['applicant_city'];
$applicant_phone = $_POST['applicant_phone'];

$sql_applicant =
"INSERT INTO applicants
(applicant_fname, applicant_lname, applicant_email, applicant_city, applicant_phone)
VALUES
('$applicant_fname', '$applicant_lname', '$applicant_email', '$applicant_city', '$applicant_phone');"
;
$rs_applicants = mysqli_query($con, $sql_applicant);

if($rs_applicants){
  echo "Application succesfully posted!";
}
?>
