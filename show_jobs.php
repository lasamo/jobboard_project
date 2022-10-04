<?php
  $con = mysqli_connect("localhost","svp","kaeya","jobboard_project");
  $con->set_charset("utf8");
  $showme = "SELECT * FROM jobs";
  $resultat = $con->query($showme);
  while ($chat = $resultat->fetch_assoc()) {
    echo $chat['job_title'] . ' ' . $chat['job_location'] . ' ' . $chat['job_description'] . ' ' . $chat['job_salary'] . ' ' . $chat['job_salary'] . '<br>';
  }
  $con->close();
?>
