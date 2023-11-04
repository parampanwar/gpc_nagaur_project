<!--
**********************************************************************************
                COPYRIGHT © Governemnt Polytechnic College,Nagaur
                          Designed by CSE Department 
**********************************************************************************

-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GPC Nagaur</title>
    <link rel="icon" href="Images/logofavi.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
<style>
/***************************************Scrollbar Design Start******************************************************/
/* width */
::-webkit-scrollbar {
  width: 5px;
}


/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-moz-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #556D9C;
  border-radius: 2em;
}

::-moz-scrollbar-thumb {
  background: #556D9C;
  border-radius: 2em;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: crimson;
}

::-moz-scrollbar-thumb:hover {
  background: crimson;
}
/****************************************Scrollbar Design End******************************************************/
span {
        color: orange;
     }
.top-header {
        padding: 10px;
      }
.notice-section {
        padding-top: 50px;
        padding-bottom: 50px;
      }
.our-facility-section {
        padding-top: 50px;
        padding-bottom: 50px;
      }
.team_sec {
  border-bottom: 1px solid #000;
  padding: 20px 0px 10px;
  margin-top: 40px;
}


.team_list {
  padding: 0px;
  margin: 0px;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex-wrap: wrap;
}

.team_list li {
  list-style: none;
  width: 20%;
  padding: 0px 15px;
  text-align: center;
}

.team_list li span img {
  width: 90px;
  height: 90px;
  object-fit: cover;
  object-position: center top 10px;
}

.team_list li h5 {
  color: rgb(0, 0, 0);
  font-size: 16px;
  margin: 26px 0 0 -5px;
  font-weight: bold;
}

.team_list li p {
  color: #000000;
  font-weight: bold;
  font-size: 14px;
  padding-left: -18px;
}
      .notice {
        background-color: orange;
        color: #fff;
        text-align: center;
        padding: 10px;
      }
      .footer{
        padding-left: 35px;
    padding-right: 35px;
    padding-top: 35px;

      }

.navbar{
    
    margin-left: -120px;
    margin-right: -117px;
   
}

.navbar .nav-item:hover{
  background-color: #FFA500;
  border-radius: 15px;

 
}
.navbar .nav-item a{ 
  color: black;

}
.navbar .nav-item a:hover{ 
  color: white;
  transition: 0.01s;
}
#loading{
  position: fixed;
  width: 100%;
  height:100vh;
  background: #fff url('loading.gif') no-repeat center;
  z-index: 9999;
 }

    </style>
  </head>
  <body onload="myFunction()">
    <div id="loading"></div>
  <div class="header">

      <div class="container">

        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="font-weight: bold;">
              &nbsp&nbsp&nbsp&nbsp&nbsp
              <img src="./Images/logo.jpg" alt="gpc nagaur" style="width: 100px; height: auto;" class="d-inline-block "/>
              GOVERNMENT POLYTECNIC COLLEGE, NAGAUR </a> 
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"  >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="admission.php">Admission</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="download.php">Download</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link " href="users/login.php">
                    Login
                  </a>
                  
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="main-slider">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="true"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./Images/Slider/jobfair.png" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="./Images/Slider/2.jpg" class="d-block w-100" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="notice-section">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 100%">
              <h5 class="card-title notice">Notice Board</h5>
              <div class="card-body">
                
                  <p class="card-text">
                    Regular Classes have started
                  </p>
                  </marquee>
              </div>
            </div>
          </div>

          

          <div class="col">
            <div class="card" style="width: 100%">
              <h5 class="card-title notice">News</h5>
              <div class="card-body">
                
                  
                  <p class="card-text">
                    IT Job fair in Jodhpur. <br>
                    Venue- Government Polytechnic College, Jodhpur
                  </p>
                </marquee>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="about-us-sction">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Government Polytechnic College <span> Nagaur</span></h1>
            <p>
              Government Polytechnic College, Nagaur, established in 2013, offers technical education and training at diploma level to achieve excellence in domain knowledge, co-curricular and extra-curricular activities with special emphasis on character and personality.
            </p>
          </div>
          <div class="col">
            <img
              src="./Images/about.png" class="img-fluid"
              alt="GPC nagaur"
            />
          </div>
        </div>
      </div>
    </div>

    <div class="our-facility-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>DEPARTMENT OF ENGINEERING</h1>
          </div>

          <div class="col">
            <div class="card" style="width: 100%">
              <img
                src="./Images/TECHNOLOGY.jpeg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">COMPUTER SCIENCE</h5>
                
                
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 100%">
              <img
                src="./Images/civil.png"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">CIVIL ENGINEERING</h5>
                
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 100%">
              <img
                src="./Images/electrical.png"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">ELECTRICAL ENGINEERING</h5>
                
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 100%">
              <img
                src="./Images/mechanical.png"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">MECHANICAL ENGINEERING</h5>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team_sec">
        <div class="container">
            <div class="col-md-12">
            <h1>MANAGEMENT</h1>
          </div>
            <ul class="team_list ">
                <li> <span>
                        <img src="Images/management/cm_rajasthan.jpg" class="img-responsive" /></span>
                    <h5>Hon'ble Chief Minister</h5>
                    <p>Shri Ashok Gehlot</p>
                </li>
                <li> <span>
                        <img src="Images/management/Subhash mte.jpg" class="img-responsive" /></span>
                    <h5>Hon'ble Minister, Technical Education</h5>
                    <p>Dr. Subhash Garg</p>
                </li>
                <li> <span>
                        <img src="Images/management/secretary.jpeg" class="img-responsive" /></span>
                    <h5>Secretary Higher and Technical Education Department</h5>
                    <p>Shri Bhawani Singh Detha IAS</p>
                </li>
                <li> <span>
                        <img src="Images/management/Alok Sir.jpg" class="img-responsive" /></span>
                    <h5>Director</h5>
                    <p>Shri Alok Bansal</p>
                </li>
                <li><span>
                        <img src="Images/management/devaram sir.jpg" class="img-responsive" /> </span>
                    <h5>Principal</h5>
                    <p>Dr Deva Ram Godara</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer bg-dark">
      <div class="container">
        <div class="row">
          <div class="col">
            <h4 class="text-white">Nodal Officer</h4>
            <ul style="list-style-type: none;">
              <li class="text-white">Mr. Harendra Chahar</li>
              <li class="text-white">Lecturer Computer Science & Engineering</li>
              <li class="text-white">Phone No.: 7737275820</li>
              <li class="text-white">Email ID: gpc.nagaur@rajasthan.gov.in</li>
              <li class="text-white">Fax: 0158-2247505</li>
            </ul>
          </div>


          <div class="col">
            <h4 class="text-white">Menu</h4>
            <ul>
              <li><a class="text-white" href="#" style="text-decoration: none;">Home</a></li>
              <li><a class="text-white" href="#" style="text-decoration: none;">About Us</a></li>
              <li><a class="text-white" href="#" style="text-decoration: none;">Gallery</a></li>
              <li><a class="text-white" href="#" style="text-decoration: none;">Admission</a></li>
              <li><a class="text-white" href="#" style="text-decoration: none;">Download</a></li>
              <li><a class="text-white" href="#" style="text-decoration: none;">Contact Us</a></li>
            </ul>
          </div>
<div class="col-md-3 item-text" style="color:white;">

                            <?php echo "Site Last Updated: " . date("d/m/Y") . "<br>"; ?>
                        </div>
          <div class="col">
            <h4 class="text-white">Contact Us</h4>
            <ul style="list-style-type: none;">
              <li class="text-white">GOVERNMENT POLYTECHNIC COLLEGE</li>
              <li class="text-white">BEHIND DTO , RIICO INDUSTRIAL AREA, BALWA ROAD, NAGAUR</li>
              
            </ul>
          </div>
          <div class="col-md-12 text-center">
            
            <p class="copyright" style="border-top: 1px solid #fff;color:#fff; font-family: sans-serif;color:white">Designed & Developed by CSE Department</p>
                    <p class="copyright" style="color:white"><?php echo "© " . date("Y") . " GOVERNMENT POLYTECHNIC COLLEGE, NAGAUR. All Rights Reserved"; ?></p>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>

    <script>
      var preloader = document.getElementById('loading');
      function myFunction(){
        preloader.style.display ='none';
      }

    </script>
  </body>
</html>
