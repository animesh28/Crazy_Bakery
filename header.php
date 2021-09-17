<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="" height="80px"></span></a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
        <div class="hamburger-toggle">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbar-content">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Multilevel</a>
            <ul class="dropdown-menu shadow">
              <li><a class="dropdown-item" href="#">Gallery</a></li>
              <li><a class="dropdown-item" href="blog.html">Blog</a></li>
              <li class="dropstart">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Submenu Left</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href=""> Third level 1</a></li>
                  <li><a class="dropdown-item" href=""> Third level 2</a></li>
                  <li><a class="dropdown-item" href=""> Third level 3</a></li>
                  <li><a class="dropdown-item" href=""> Third level 4</a></li>
                  <li><a class="dropdown-item" href=""> Third level 5</a></li>
                </ul>
              </li>
              <li class="dropend">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Submenu Right</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href=""> Second level 1</a></li>
                  <li><a class="dropdown-item" href=""> Second level 2</a></li>
                  <li><a class="dropdown-item" href=""> Second level 3</a></li>
                  <li class="dropend">
                    <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Let's go deeper!</a>
                    <ul class="dropdown-menu dropdown-submenu shadow">
                      <li><a class="dropdown-item" href=""> Third level 1</a></li>
                      <li><a class="dropdown-item" href=""> Third level 2</a></li>
                      <li><a class="dropdown-item" href=""> Third level 3</a></li>
                      <li><a class="dropdown-item" href=""> Third level 4</a></li>
                      <li><a class="dropdown-item" href=""> Third level 5</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href=""> Third level 5</a></li>
                </ul>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown dropdown-mega position-static">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Megamenu</a>
            <div class="dropdown-menu shadow">
              <div class="mega-content px-4">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <h5>Pages</h5>
                      <div class="list-group">
                        <a class="list-group-item" href="#">Accomodations</a>
                        <a class="list-group-item" href="#">Terms & Conditions</a>
                        <a class="list-group-item" href="#">Privacy</a>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <h5>Card</h5>
                      <div class="card">
                  <img src="https://via.placeholder.com/320x180" class="img-fluid" alt="image">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <h5>Lot of Pages</h5>
                      <p>Lorem ipsum dolo sit achmet muhamed borlan de irtka.
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 py-4">
                      <h5>Damn, so many</h5>
                      <div class="list-group">
                        <a class="list-group-item" href="#">Accomodations</a>
                        <a class="list-group-item" href="#">Terms & Conditions</a>
                        <a class="list-group-item" href="#">Privacy</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        <!-- <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light btco-hover-menu">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo" height="70px"></a>
                <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="career.php">ABOUT US</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                OUR BRANDS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item dropdown-toggle" href="portfolio-commercail.php">READY TO COOK</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="portfolio-commercail.php" >INSTANT POPCORN</a></li>
                                        <li><a class="dropdown-item" href="patel-showroom.php" >MIRCOWAVE POPCORN</a></li>
                                        <li><a class="dropdown-item" href="shree-radhe-empire.php" >DIET POPCORN</a></li>
                                        <li><a class="dropdown-item" href="shree-ram-business-center.php" >SWEET CORN</a></li>
                                        <li><a class="dropdown-item" href="wis-pawan-baug.php" >SAUCES & MEAL KITS</a></li>
                                    </ul>
                                </li>

                                <li><a class="dropdown-item dropdown-toggle" href="portfolio-residential.php">READY TO EAT</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="portfolio-residential.php">POPCORN</a></li>
                                        <li><a class="dropdown-item" href="vardham.php">EXTRUDED SNACKS</a></li>
                                        <li><a class="dropdown-item" href="nand-nandan-bhavan.php">NACHOS</a></li>
                                        <li><a class="dropdown-item" href="la-regalia.php">SNACKO</a></li>
                                        <li><a class="dropdown-item" href="sunvision.php">PEANUTS & CHANA</a></li>
                                    </ul>
                                </li>

                                <li><a class="dropdown-item" href="vision-mission.php">CEREAL SNACKS</a></li>

                                <li><a class="dropdown-item" href="vision-mission.php">CHOCOLATE CONFECTIONERY</a></li>

                                
                                <li><a class="dropdown-item dropdown-toggle" href="#">SPREADS</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">PEANUT BUTTER</a></li>
                                        <li><a class="dropdown-item" href="#">PEANUT SPREADS</a></li>
                                        <li><a class="dropdown-item" href="#">BETTER FOR YOU</a></li>
                                        <li><a class="dropdown-item" href="#">CHOCO SPREADS</a></li>
                                        <li><a class="dropdown-item" href="#">HUMUS</a></li>
                                    </ul>
                                </li>

                                <li><a class="dropdown-item dropdown-toggle" href="#">OILS</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">SUNDROP SUPERLITE</a></li>
                                        <li><a class="dropdown-item" href="#">SUNDROP HEART</a></li>
                                        <li><a class="dropdown-item" href="#">SUNDROP NUTRIFIT</a></li>
                                        <li><a class="dropdown-item" href="#">SUNDROP GOLDLITE</a></li>
                                        <li><a class="dropdown-item" href="#">SUNDROP LITE</a></li>
                                        <li><a class="dropdown-item" href="#">SUNDROP NUTRILITE</a></li>
                                        <li><a class="dropdown-item" href="#">CRYSTAL</a></li>
                                        <li><a class="dropdown-item" href="#">HEALTHY WORLD</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="service.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            INVESTOR RELATIONS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="service.php">BOARD OF DIRECTORS</a></li>
                                <li><a class="dropdown-item" href="construction.php">QUARTERLY RESULTS</a></li>
                                <li><a class="dropdown-item" href="re-development.php">ANALYST CALLS & PRESENTAION</a></li>
                                <li><a class="dropdown-item" href="jointventure.php">ANNUAL REPORTS</a></li>
                                <li><a class="dropdown-item" href="realestate.php">STOCK PERFORMANCE</a></li>
                                <li><a class="dropdown-item" href="service.php">CODE OF CONDUCT</a></li>
                                <li><a class="dropdown-item" href="construction.php">SHAREHOLDING PATTERN</a></li>
                                <li><a class="dropdown-item" href="re-development.php">UNCLAIMED DIVIDEND</a></li>
                                <li><a class="dropdown-item" href="jointventure.php">STOCK EXCHANGE UPDATES</a></li>
                                <li><a class="dropdown-item" href="realestate.php">INVESTORS INFORMATION</a></li>
                                <li><a class="dropdown-item" href="realestate.php">PAPER PUBLICATION</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CAREERS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="about.php">LIFE @CRAZY_BAKERY</a></li>
                                <li><a class="dropdown-item" href="vision-mission.php">RECRUITMENT PROCESS</a></li>
                                <li><a class="dropdown-item" href="about.php">PEOPLE SPEAK</a></li>
                                <li><a class="dropdown-item" href="vision-mission.php">JOB OPPORTUNITIES</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="career.php">MEDIA</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="career.php">BLOG</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="career.php">CSR</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT US</a>
                        </li>
                        
                    </ul>
                </div>
            </nav> -->
