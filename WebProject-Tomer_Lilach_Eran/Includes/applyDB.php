<?php

$servername = "localhost";
$username = "lilahbu";
$password = "te@ha9eyA9";
$dbname = "lilahbu_lectureme_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO applys (first_name, last_name, email,password,category,about,image)
VALUES ('".$_POST["first_name"]."', '".$_POST["last_name"]."', '".$_POST["email"]."', '".$_POST["password"]."', '".$_POST["category"]."', '".$_POST["about"]."', '".$_POST["image"]."')";
?>


 

<!DOCTYPE html>
<html dir="rtl" lang="he">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css" />
    <script src="../JS/script.js">        
        </script>
  </head>

    <body>
       <header class="sticky-top">
    <nav class="navbar navbar-expand-sm bg-light bg-dark navbar-dark">
      
      <!-- Logo -->
      <a class="navbar-brand" href="../index.html">LectureMe</a>

      <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">דף הבית</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Categories.html">קטגוריות</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" title="לא מומש" href="#">שאלות ותשובות</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="apply.html">להגשת מועמדות</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">אודות</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">צור קשר</a>
            </li>
          </ul>
        </div>
      </nav>
  </header>
        <main>
            <section id="text">
                <?php
                if ($conn->query($sql) === TRUE) {

                    
                    echo " אישור ההזמנה ישלח למייל"; ?> 
           


                <a href="../index.html"><button class="button">לחזרה לחץ כאן </button>
                </a> 
                <?php

                }

                else {

                    echo "Error: " . $sql . "<br>" . $conn->error;?> 

                <a href="apply.html"><button class="button">לחזרה לחץ כאן </button>
                </a> 
                <?php
                }

                $conn->close();
                ?><br>

            </section>


        </main>

        <footer>
      <div class="container-fluid padding">
        <div class="row text-center">
          <div class="col-md-12">
            <hr class="light" />
            <h5 style="padding: 1%;">רשתות חברתיות</h5>
            <a href="#" title="לא מומש"
              ><img
                src="../Images/social/facebook.jpg"
                alt="facebook"
                height="40"
                width="40"
            /></a>
            <a href="#" title="לא מומש"
              ><img
                src="../Images/social/instagram.jpg"
                alt="instagram"
                height="40"
                width="40"
            /></a>
            <a href="#" title="לא מומש"
              ><img
                src="../Images/social/twitter.jpg"
                alt="twitter"
                height="40"
                width="40"
            /></a>
          </div>
          <div class="col-12">
            <hr class="light-100" />
            <h6>Lilah Burger, Eran Sevil, Tomer Cohen&copy;</h6>
          </div>
        </div>
      </div>
    </footer>
    </body>
</html>
