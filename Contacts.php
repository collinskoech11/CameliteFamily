<!----------PHP PART-------------------->
    <?php

    require_once "connect.php";

        // Initialize the session
        session_start();
             
      //INITIALIZING CONTACT FORM DATA
      $name=" ";
      $email=" ";
      $message=" ";

      //CREATING CONNECTION
      $db = "contact";
    $conn = new mysqli("localhost","root","", "contact");

     // CHECKING CONNECTION
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    //CONVERTING HTML TO PHP
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    }

    //ensuring that data is valid....error handling logic gate
    if(empty($name)){
        echo '<script>alert("A Name is required")</script>';
    }
    else if(empty($email)){
        echo '<script>alert("Email is required")</script>';
    }
    else if(empty($message)){
        echo '<script>alert("Message is required")</script>';
    }

    //If data is clean then we feed it to the DB
    else{
        $sql = "INSERT INTO user(name, email,message)
                VALUES('$name','$email','$message')";
    }

    
     //Feedback if data has been inserted
    if(isset($_POST['submit'])){
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Your message has been submitted successfully.You will get a reply shortly")</script>';
        }
        else{
            echo '<script>alert("Error: Information was not captured well. Try again!!")</script>';
        }
    }
    ?>

    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camelite family kenya</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<body>

    <section class="HeaderContainer ">
      
        <nav class="navbar navbar-expand-sm  white" style="background-color: rgb(93,67,44,0.1);">
            <button class=" white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon white"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <img src="prayinghands.jpg">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Aboutus.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Membership.php">MEMBERSHIP</a>
                    </li>
                    <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="Gallery.php" id="navbardrop" data-toggle="dropdown">
                        REFLECTIONS
                        </a>
                        <div class="dropdown-menu sm-menu">
                            <a class="dropdown-item" href="daily.php">Daily Reflections</a>
                            <a class="dropdown-item" href="morning.php">Morning devotions</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="Gallery.php" id="navbardrop" data-toggle="dropdown">
                        GALLERY
                        </a>
                        <div class="dropdown-menu sm-menu">
                            <a class="dropdown-item" href="workshops.php">Workshops and seminars</a>
                            <a class="dropdown-item" href="retreat.php">Retreats</a>
                            <a class="dropdown-item" href="photos.php">Photos and videos</a>
                            <a class="dropdown-item" href="music.php">Music</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="Gallery.php" id="navbardrop" data-toggle="dropdown">
                        EVENTS
                        </a>
                        <div class="dropdown-menu sm-menu">
                            <a class="dropdown-item" href="upcoming.php">Upcoming events</a>
                            <a class="dropdown-item" href="local.php">Local events</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contacts.php">CONTACT US</a>
                    </li>

                </ul>
                <div class="social-part">
                    <a href="facebook.html"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="facebook.html"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="facebook.html"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </nav>
<!-- Menu Icon -->
</section>
    </div>

   
    <contact>
        <h1>Contacts</h1>
            <p >
                <font face="Lato" color="#" size="5">
                    Address Email and related Links, Br. Dan willl ensure it's well done.  
                </font>
            </p>
        </contact>
    
    
        <!-- {/*contact page*/} -->
    <div class="app">
    <form action="Contacts.php" method="POST">
        <h2>Contact us...</h2>
    
        <label for="name">Name</label>
        <input type="text" placholder="name" name="name" required>
    
        <label>Email</label>
        <input type="text" placholder="Email" name="email" required>
    
        <label>Message</label>
        <textarea type="text" placeholder="Message" name="message"></textarea>
    
        <button type="submit" name="submit">Submit</button>
    </form>
    
    </div>



    <section class="FooterSection">
        <footer>
            <div class="main-content">
                <div class="left box">
                    <h2>Camelite Family Kenya</h2>   
                <div class="content">
                    <div class="product1">
                        <span class="text"><a href="#">Books</a></span>
                    </div>
                    <div class="product2">
                        <span class="text"><a href="#">Policies</a></span>
                    </div>
                    <div class="product3">
                        <span class="text"><a href="#">Vocations</a></span>
                    </div>
                </div>
                </div>


            <div class="center box">
                <h2>Address</h2>
                <div class="content">
                    <div class="place">

                        <span class="fa fa-map-marker"></span>
                        <span class="text">Nairobi,Kenya</span>
                    </div>
                    <div class="phone">
                        <span class="fa fa-phone"></span>
                        <span class="text">0700000000</span>
                    </div>
                    <div class="place">
                        <span class="fa fa-envelope"></span>
                        <span class="text">camelitefamily@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>Products</h2>
                <div class="content">
                    <div class="product1">
                        <span class="text"><a href="donate.html">Donate online</a></span>
                    </div>
                    <div class="product2">
                        <span class="text"><a href="#">Leave a legacy</a></span>
                    </div>
                    <div class="product3">
                        <span class="text"><a href="#">Annual contributions</a></span>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </footer>


   <script src="./img/js/script.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
</script>
</body>
</html>