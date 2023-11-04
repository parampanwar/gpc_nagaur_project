<!--
**********************************************************************************
                 COPYRIGHT © Governemnt Polytechnic College
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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <style>
        span {
          color: orange;
        }
        .top-header {
          padding: 10px;
        }
        .notice-sction {
          padding-top: 50px;
          padding-bottom: 50px;
        }
        .our-facility-sction {
          padding-top: 50px;
          padding-bottom: 50px;
        }
        .staff-sction {
          padding-top: 50px;
          padding-bottom: 50px;
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

}
      </style>
  </head>
  <body>
    <div class="header">
      <div class="container">

        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="font-weight: bold;">
              &nbsp&nbsp&nbsp&nbsp&nbsp
              <img src="./Images/logo.jpg" alt="gpc nagaur" style="width: 100px; height: auto" class="d-inline-block "/>
              GOVERNMENT POLYTECNIC COLLEGE, NAGAUR
            </a>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php"
                    >Home</a>
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
                  <a class="nav-link " href="users/index.php">
                    Login
                  </a>
                  
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

      <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Admission</li>
            </ol>
          </nav>
      </div>
      <div class="about-us-sction">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center" style="padding: 10px;">
              <h1>Admission</h1>
            </div>
            <div class="col-md-6" style="padding-bottom: 10px;">
              <form>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Father's Name</label>
                  <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mother Name</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Phone No.</label>
                  <input type="tel" class="form-control" aria-describedby="emailHelp">
                  <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Class</label>
                  <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Address</label>
                  <input type="text" class="form-control">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        
        <div class="col-md-6">
          <img src="./Images/addmissions.png" class="img-fluid" alt="admission" />
          </div>

          
          </div>
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
  </body>
</html>
