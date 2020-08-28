<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="images/favicons/favicon.ico">
    <title>Education | RJ</title>


    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bungee&display=swap" rel="stylesheet">  </head>
  <style media="screen">
    body{
      text-align: center;
      background: #000;
    }
    .contact-form{
      display: inline-block;
      margin: 0 auto;
    }
    .contact-form form{
    margin: 30px auto;
    }
    input[type="text"]{
      padding: 15px 20px;
      border: none;
      margin: 10px 10px 20px;
      border-radius:5px;
    }
    input[type="email"]{
      padding: 15px 20px;
      border: none;
      margin: 10px 10px 20px;
      border-radius:5px;
    }
    textarea{
      padding: 5px 25px;
      border: none;
      border-radius: 5px;
    }
    .down-arrow{
      color:#e94560;
      margin-left: 10px;
      font-size: 50px;
    }
    .sendMessage{
      padding: 10px 30px;
      background-color: #eeeeee;
      border:none;
      border-radius: 35px;
      margin: 20px auto;
      color:#000;
    }
    .social_icons i{
      font-size: 30px;
      margin: 0 7px;
    }
    @media (max-width:550px)
    {

      .contact-form{
        display: block;
        padding:10px 5px;
      }
      textarea{
        margin: 10px auto;
        width: 100%;
      }
      input[type="text"]{
        margin:10px auto;
        width: 100%;
      }
      input[type="email"]{
        margin:10px auto;
        width: 100%;
      }

    }
  </style>
  <body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="index.php"><img src="images/favicons/favicon.ico"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item px-3">
        <a class="nav-link" href="about.php">About Me </a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="education.php">Education</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="skills.php">Skills</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="projects.php">Projects</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#blogs">Resume</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="experience.php">Experience</a>
      </li>
      <li class="nav-item active px-3">
        <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
      </li>
    </ul>

  </div>
</nav>

    <section id="contactme">

      <h1><span style="color:yellow;font-family:'Bungee', cursive;font-size:50px;">Connect with me </span> <i class="fas fa-arrow-down down-arrow"></i></h1>
      <div class="contact-form">
        <form id="contact_form" class="" action="send.php" method="post">
          <input type="text" name="Name" id="form_name" placeholder="Name" required>
          <input type="email" name="Email" id="form_email" placeholder="Email" required>
          <input type="text" name="" id="form_number" placeholder="Contact number"><br>
          <textarea name="name" id="form_msg" rows="8" cols="85" maxlength="250" placeholder="Type your Message" required></textarea><br>
          <button type="submit" name="button" class="sendMessage" onclick="sendEmail()">Send Message To Rajdeep Jadhav</button>
        </form>

        <div class="social_icons">
          <a href="https://www.linkedin.com/in/rajdeepjadhav"><i class="fab fa-linkedin"></i></a>
          <a href="https://www.facebook.com/rajdeep.jadhav.92/"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/___13rajdeeprj"><i class="fab fa-instagram"></i></a>
          <a href="https://github.com/rajdeepj1363"><i class="fab fa-github"></i></a>
        </div>
        <p>Copyrights @ 2020 Rajdeep Jadhav</p>
      </div>

    </section>

  </body>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript">
    function sendEmail(){
      var mail_data = "Name="+$("#form_name").val()+"&Email="+$("#form_email").val()+"&Contact="+$("#form_number").val()+"&Message="+$("#form_msg").val();
      return $.ajax({
        method:"POST",
        url:"send.php",
        data:mail_data,
        cache: false,
        success:function(e){
          document.getElementById("contact_form").reset();
          alert(e);
        }
      });
      return false;
    }
  </script>

</html>