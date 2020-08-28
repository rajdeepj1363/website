<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="images/favicons/favicon.ico">
    <title>Projects | RJ</title>


    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bungee&display=swap" rel="stylesheet">  </head>

  </head>
  <style media="screen">
    body{
      background: #000;
      width: 100%;
      height: 100%;
      overflow-x: hidden;
    }
    .exp_detail{
      position: relative;
      background: #fff;
      padding: 20px 25px;
      margin: 20px 120px;
      border-radius: 5px;
    }
    .exp_img{
      width: 30%;
      padding-bottom:90px;
      height: 100%;
      float: left;
    }

    .exp_detail img{
      margin-top: 50px;
      width:20vw;

      margin-right: 20px;
    }
    .exp_pos{
      font-weight: bold;

    }
    @media (max-width:550px)
    {
      .exp_detail{
        margin: 10px 15px;
      }
      .exp_img{
        width: 100%;
        height: auto;
        padding: 0;
        float: none;
      }
      .exp_detail img{
        margin-top: 0;
        margin-bottom: 20px;
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
      <li class="nav-item  px-3">
        <a class="nav-link" href="#">Projects <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#blogs">Resume</a>
      </li>
      <li class="nav-item  active px-3">
        <a class="nav-link" href="experience.php">Experience</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>

  </div>
</nav>

    <section id="experience">

      <h1 style="text-align:center; color:yellow;font-family:'Bungee', cursive;font-size:50px;">EXPERIENCE</h1>
      <div class="row">
        <div class="col-lg-12">
          <div class="exp_detail">
            <div class="exp_img">
              <img src="images/experience/sheranis.png" alt="">
            </div>
            <div class="exp_txt">
              <p>Honed my Web Development skills by working with an Event Management company, SheranisEvents. My work included 3 projects with deadline of 1 month each. Tasks like
              Creating Company's Website, handling cPanel, maintaining Databases and developing responsive, SEO considered projects.</p>
              <p>Project : <a href="https://www.sheranisevents.in">Click Here!</a></p>
              <p><span class="exp_pos">Web Development Intern</span> @ SheranisEvents Pvt Ltd, Patna</p>
              <p>21st May 2020 - 21st August 2020 (Remote)</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="exp_detail">
            <div class="exp_img">
              <img src="images/experience/extremityIndia.png" alt="">
            </div>
            <div class="exp_txt">
              <p>Trained by Industry people in the field of programming especially C, C++ and Data Structures. Got to experience Industry level codes and actual application of Data Structures.
              Created a code based on LinkedList Data Structure to represent functionalities of an ATM / Bank.</p>
              <p>Project : <a href="https://github.com/rajdeepj1363/BankingApplication">Click Here!</a></p>
              <p><span class="exp_pos">Intern trainee</span> @ Extremity India Pvt Ltd, Pune</p>
              <p>August 2018 - November 2018 (In-Office)</p>
            </div>
          </div>
        </div>
      </div>
    </section>



  </body>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</html>