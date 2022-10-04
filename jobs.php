<!doctype html>
<html>
  <head>
    <link rel='stylesheet' href='style.css'>
    <title>Job Board</title>
  </head>
  <body>
    <header>
      <h1>Job Board</h1>
      <nav>
        <button type="button" onclick="location.href='index.html'">[&nbsp;Home&nbsp;]</button>
        <button type="button" onclick="location.href='jobs.php'">[&nbsp;Jobs&nbsp;]</button>
        <button>[&nbsp;Companies&nbsp;]</button>
        <button type="button" onclick="location.href='post_job.html'">[&nbsp;Post a Job&nbsp;]</button>
      </nav>
    </header>
    <main>

      <?php
        require 'config.php';
        $showme = "SELECT * FROM jobs";
        $resultat = $con->query($showme);
        if ($con){
          while ($chat = $resultat->fetch_assoc()) {
            echo "<div class='job_card'>
              <h1>".$chat['job_title']."</h1>
              <p>".$chat['job_description']."</p>
              <p>".$chat['job_salary']." €</p>
              <button>Learn more ... </button>
            </div>";
          }

        }
        else{
          echo 'connection to database failed';
        }
        $con->close();
      ?>
    </main>
    <footer>
    </footer>
  </body>
</html>
