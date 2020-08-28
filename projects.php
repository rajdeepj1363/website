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
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bungee&display=swap" rel="stylesheet">
  </head>
  <style media="screen">
    body{
      background: #000;
      width: 100%;
      height: 100%;
      overflow-x: hidden;
    }
    #projects{

      width:100%;
      height: 100%;
    }
    .project{
      background: #fff;
      margin:30px 20px 40px;


    }
    .project img{
      width: 100%;
      height: 200px;
    }
    .project_detail{
      padding: 20px;
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
        <a class="nav-link" href="#">Projects <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#blogs">Resume</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="experience.php">Experience</a>
      </li>
      <li class="nav-item  active px-3">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>

  </div>
</nav>

    <section id="projects">


  <div class="project_description">
    <p style="text-align:center; color:yellow;font-size:50px;font-family:'Bungee', cursive;">PROJECTS</p>

    <div class="project_list" >
      <div class="row">
        <div class="col-lg-6">
          <div class="project">
            <img src="images/projects/stock.png" alt="">
            <div class="project_detail">
              <h1>STOCK MARKET PREDICTION</h1>
              <h5>In this project, the main objective was to show how good is LSTM at datasets like Stock Market. It was a comparison between LSTM and other regression
              algorithms. Model used : Sequential. Layers used : LSTM, Dense. Dataset: Huge Stock Market Dataset (Kaggle).</h5>
              <p>Skills used : Pandas, Numpy, Matplotlib, Keras(Sequential, Dense, LSTM), MinMaxScaler</p>
              <a href="https://github.com/rajdeepj1363/Stock-Market-Prediction-ML-">GitHub Link</a>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="project">
            <img src="images/projects/covid.png" alt="">
            <div class="project_detail">
              <h1>COVID 19 TRACKER</h1>
              <h5>This was an Android Application project mainly focused on API Integration. The UI part of the app is quite simple. The COVID-19 data
              is fetched from an API which gives two statistics : World Count and Country-wise. Thus, app includes both options i.e to check World Count or
              Country-wise based on user input of country name.</h5>
              <p>Skills used : Android Studio, JAVA, XML, JSON</p>
              <a href="https://github.com/rajdeepj1363/COVID-19-Tracker-Android-Application">GitHub Link</a>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="project">
            <img src="images/projects/sps.png" alt="">
            <div class="project_detail">
              <h1>STONE PAPER SCISSOR</h1>
              <h5>A Javascript based simple yet fun game to play between 2 people! Actual representation of real-world Stone Paper Scissor. User can input number of rounds to Play
               and upon finishing, result is displayed ! This was one of my projects when I had just entered into Web Development domain.</h5>
              <p>Skills used : HTML, CSS, Javascript</p>
              <a href="https://rajdeepj1363.github.io/Stone_Paper_Scissor/">Play it Now!</a>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="project">
            <img src="images/projects/rj.png" alt="">
            <div class="project_detail">
              <h1>TERMINAL RJ PATTERN</h1>
              <h5>This was a side project just for fun which i created when I was deep diving into Coding Questions based on Patterns! The Sir who was teaching me on coding basics
                was bragging about his student who created Avengers Logo pattern, so I just answered him with RJ, which is just an initial of my name :P !
               </h5>
              <p>Skills used : C++, Data Structures</p>
              <a href="https://github.com/rajdeepj1363/RJ-Initials">GitHub Link</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="project">
            <img src="images/projects/rfid.png" alt="">
            <div class="project_detail">
              <h1>RFID ATTENDANCE SYSTEM</h1>
              <h5>This is an Electronics project, actually my BE mini-project where along with 2 more partners, we built an PIC16F877A based RFID Attendance system.
                This unit took 240V AC mains as Input and has inbuilt Transformer unit, Regulator unit, Microcontroller Unit and LCD for displaying status. One card is registered
                as 'Administrator' and other cards in PIC memory belong to students. Upon tapping of admin card, attendance of all students one by one is displayed on LCD.
               </h5>
              <p>Skills used : Embedded Electronics, MPLAB, EasyEDA, Proteus</p>
              <a href="https://github.com/rajdeepj1363/RFID-Attendance-System">GitHub Link</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    </section>



  </body>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


</html>