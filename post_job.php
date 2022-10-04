<?php
include 'config.php';

$job_title = $_POST['job_title'];
$job_location = $_POST ['job_location'];
$job_description = $_POST['job_description'];
$job_salary = $_POST ['job_salary'];
$company_name = $_POST ['company_name'];
$company_email = $_POST['company_email'];
$company_city = $_POST['company_city'];
$company_phone = $_POST['company_phone'];

$sql_jobs =
"INSERT INTO jobs
(job_title, job_location, job_description, job_salary)
VALUES
('$job_title', '$job_location', '$job_description', '$job_salary');"
;
$rs_jobs = mysqli_query($con, $sql_jobs);

$sql_companies =
"INSERT INTO companies
(company_name, company_email, company_city, company_phone)
VALUES
('$company_name', '$company_email', '$company_city', '$company_phone');"
;
$rs_companies = mysqli_query($con, $sql_companies);

if($rs_jobs and $rs_companies){
  echo "";
  echo "
  <!DOCTYPE html>
  <html>

  <head>
    <link rel='stylesheet' href='style.css'>
    <title>PostAjoB</title>
  </head>
  <body>
    <h1 style='color:black'>
      Job succesfully posted!
    </h1>
    <p>Thanks for posting with us!</p>
    <a href=index.html >Click here to go back :)</a>
    <br>
    <a href=jobs.php >Click here to see other jobs :)</a>
  </body>

  </html>
  ";
}
?>
