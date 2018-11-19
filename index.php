<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/site.webmanifest">
    <link rel="mask-icon" href="icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/index.css">

    <title>Lala</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header>
    
        <nav id="navbar" class="navbar navbar-scroll fixed-top bg-light">
                  <!--<a class="navbar-brand" href="#">Lala</a>-->
                  <ul class="nav nav-pills mx-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#about-me">Me</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#projects">Projects</a>
                    </li>
                  </ul>
                </nav>

      <div id="about-me">

      <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-white" style="background-image: url(https://source.unsplash.com/collection/590961/1920x1080);background-color: white;">
      
      </section>
      <div class="container u-overlay__inner u-ver-center u-content-space" > 
              

              <div class="row intro">

                  <div class="col-sm-12 intro text-center bg-p">
                    <p id="intro">Hi there my name is Nhlalala and I love creating with code.
                      <!-- <a href="#skills"  ><i class="fas fa-angle-down fa-5x"></i>
                      </a>  -->
                      
                    </p>
                  </div>


              </div>

           

          </div>
</header>
<section>
        <div class="container">
          <!-- Profile Block -->
          <div class="row">
            <div class="col-md-4 mx-auto">
              <div class="u-pull-half text-center">
                <img class="img-fluid u-avatar u-box-shadow-lg rounded-circle mb-3" width="200" height="auto" src="asset/css/me1.png" alt="Image Description">
              </div>
            </div>
          </div>
</div>
</section>
</div> <!--about me-->

    <!--Contact me Modal-->

    <div class="container-fluid">
  

          <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Contact Me</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>


                <div class="modal-body">
                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                  Your message was sent successfully.
                </div>
                  <form id="contactform" name="contactform" class="needs-validation" action="contact.php" novalidate method="post">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Name:</label>
                      <input type="text" class="form-control" name="name" id="name" required> 
                      <div class="invalid-feedback">
                          Please provide your name
                        </div>
                  
                    </div>

                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Email:</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                      <div class="invalid-feedback">
                          I need your email to reply :D 
                        </div>
                    </div>


                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Message:</label>
                      <textarea class="form-control" name="message" id="message" required></textarea>
                      <div class="invalid-feedback">
                          Surely you have something to tell me.
                        </div>
                    </div>

                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                    
                    <div class="valid-feedback form-feedback">Your email has been sent</div>
                    <div class="invalid-feedback form-feedback">Your email failed to send</div>
                    </form>
                      
                    <input type="text" class="d-none" value="nshiburi@nshiburi.co.za" id="cpymail">
                    <button type="button" class="btn btn-secondary" onclick="copyEmail()">Copy email</button>


                </div>
            </div>
          </div>
        </div>
      
    </div>


    <!--End of modal-->







  <!--Projects modal-->
  <div class="container">


      <div class="modal fade" id="projectmodal" tabindex="-1" role="dialog" aria-labelledby="projectmodal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="">The Hand-Off</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <div class="container-fluid">

                          <div class="row">

                            <div class="col-md-4"></div>
                            <div class="col-md-12">
                              <p>
                                The Hand Off is a rugby blog build on wordpress for a client. I build a custom theme
                                for the site, used bootstrap for the grids and jquary for most dynamic behaviour.
                              </p>
                            </div>
 
                          </div>
                          <br>


                          <!--Carousal-->


                          <div class="row">

                              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">

                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                                  </ol>

                                  <div class="carousel-inner">
                                          <div class="carousel-item active">

                                            <img class="d-block w-100" src="asset/img/blog.png" alt="First slide">

                                          </div>

                                          <div class="carousel-item">

                                            <img class="d-block w-100" src="asset/img/thehand1.png" alt="Second slide">

                                          </div>

                                          <div class="carousel-item">

                                            <img class="d-block w-100" src="asset/img/thehand2.png" alt="Third slide">

                                          </div>

                                  </div>
                                  
                                </div>

                          </div>



                          <!--End of Carousal-->



                          <br>
                          <div class="row">

                            <div class="col-md-12">Tools</div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <i class="fab fa-html5 fa-2x"> </i> 
                                <i class="fab fa-php fa-2x"></i>
                                <i class="fab fa-css3-alt fa-2x"></i>
                                <i class="fab fa-js fa-2x"></i>
                                <i class="fab fa-wordpress fa-2x"></i>
                            </div>
                            
                          </div>
                          <br>
                          <div class="row">
                            
                            <div class="col-md-12">visit website <a href="https://thehandoff.international">thehandoff</a>
                            
                            </div>
                          </div>
                      
                  </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      




  </div>



  <!--Second one-->
  <div class="modal fade" id="project1" tabindex="-1" role="dialog" aria-labelledby="project1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="">Lala Photography</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <div class="container-fluid">

                          <div class="row">

                            <div class="col-md-4">Summary</div>
                            
                            <div class="col-md-12">
                              <br>
                              <p>
                                I love photography so I build this site for later use, the website was build with pure css and html.
                                It's currently using unsplash to dynamical pull pictures from their website. Media qeuries and flex box were used for 
                                responsiveness.
                              </p>
                            </div>
 
                          </div>
                          <br>


                          <!--Carousal-->


                          <div class="row">

                              <div id="carousel2" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel2" data-slide-to="1"></li>
                                    <li data-target="#carousel2" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="asset/img/photography1.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="asset/img/photography2.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="asset/img/photography3.png" alt="Third slide">
                                    </div>
                                  </div>
                                  
                                </div>

                          </div>



                          <!--End of Carousal-->



                          <br>
                          <div class="row">

                            <div class="col-md-12">Tools</div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <i class="fab fa-html5 fa-2x"> </i>
                                <i class="fab fa-css3-alt fa-2x"></i>
                                <i class="fab fa-js fa-2x"></i>
                                
                            </div>
                            
                          </div>
                          <br>
                          <div class="row">
                            
                            <div class="col-md-12">visit website <a href="http://portfolio.nshiburi.co.za/photography/">Lala photography</a>
                            
                            </div>
                          </div>
                      
                  </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
              </div>
            </div>
          </div>
        </div>
      




  </div>



  <!--Third one-->
  <div class="modal fade" id="project2" tabindex="-1" role="dialog" aria-labelledby="project2" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="">Seekers of Land</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <div class="container-fluid">

                          <div class="row">

                            <div class="col-md-4">Summary</div>
                            <br>
                            <div class="col-md-12">
                              <p>
                                This is a wordpress based blog for a client, I developed a custom theme but used a free plugin for the megamenu.
                                The theme uses bootstrap for grids and jquary for dynamic behaviour. 
                              </p>
                            </div>
 
                          </div>
                          <br>


                          <!--Carousal-->


                          <div class="row">

                              <div id="carousel3" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carousel3" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel3" data-slide-to="1"></li>
                                    <li data-target="#carousel3" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="asset/img/seekers1.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="asset/img/seekers2.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="asset/img/seekers3.png" alt="Third slide">
                                    </div>
                                  </div>
                                  
                                </div>

                          </div>



                          <!--End of Carousal-->



                          <br>
                          <div class="row">

                            <div class="col-md-12">Tools</div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <i class="fab fa-html5 fa-2x"> </i> 
                                <i class="fab fa-php fa-2x"></i>
                                <i class="fab fa-css3-alt fa-2x"></i>
                                <i class="fab fa-js fa-2x"></i>
                                <i class="fab fa-wordpress fa-2x"></i>
                            </div>
                            
                          </div>
                          <br>
                          <div class="row">
                            
                            <div class="col-md-12">visit website <a href="http://seekersofland.co.za">Seekers of land</a>
                            
                            </div>
                          </div>
                      
                  </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>
      




  </div>






  <!--fourth one-->
  <div class="modal fade" id="project3" tabindex="-1" role="dialog" aria-labelledby="project3" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="">Royal Digs</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <div class="container-fluid">

                          <div class="row">

                            <div class="col-md-4">Summary</div>
                            <div class="col-md-12">
                              <p>
                                Royal digs is a platform for students to easily find, view and apply for a digs.
                                The platform is developed with php Laravel and bootstrap for front end. A friend gave me the idea so I decided
                                to build the platform. 
                                <h4>Features</h4>
                                <ul>
                                  <li>User Login and register </li>
                                  <li>back end admin login</li>
                                  <li>Admin can post new listing on the back end</li>
                                  <li>Search functionality on the listings</li>
                                </ul>
                              </p>
                            </div>
 
                          </div>
                          <br>


                          <!--Carousal-->


                          <div class="row">

                              <div id="carousel4" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carousel4" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel4" data-slide-to="1"></li>
                                    <li data-target="#carousel4" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="asset/img/blog.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="asset/img/thehand1.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="asset/img/thehand2.png" alt="Third slide">
                                    </div>
                                  </div>
                                  
                                </div>

                          </div>



                          <!--End of Carousal-->



                          <br>
                          <div class="row">

                            <div class="col-md-12">Tools</div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <i class="fab fa-html5 fa-2x"> </i> 
                                <i class="fab fa-php fa-2x"></i>
                                <i class="fab fa-css3-alt fa-2x"></i>
                                <i class="fab fa-js fa-2x"></i>
                                <i class="fab fa-wordpress fa-2x"></i>
                            </div>
                            
                          </div>
                          <br>
                          <div class="row">
                            
                            <div class="col-md-12">visit website <a href="https://digs.nshiburi.co.za">Royal Digs</a>
                            
                            </div>
                          </div>
                      
                  </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      




  </div>


  <!--Fifth one-->
  <div class="modal fade" id="project4" tabindex="-1" role="dialog" aria-labelledby="project4" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="">DigiQal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <div class="container-fluid">

                          <div class="row">

                            <div class="col-md-4">Summary</div>
                            <br>
                            <div class="col-md-12">
                              <p>This is a website for a PR company based in joburg, the client wanted something 
                              minimal but functional. Some features don't work properly because the client doesn't
                              have content yet.
                                
                              </p>
                            </div>
 
                          </div>
                          <br>


                          <!--Carousal-->


                          <div class="row">

                              <div id="carousel5" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carousel5" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel5" data-slide-to="1"></li>
                                    <li data-target="#carousel5" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="asset/img/makops1.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="asset/img/makops2.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="asset/img/makops3.png" alt="Third slide">
                                    </div>
                                  </div>
                                  
                                </div>

                          </div>



                          <!--End of Carousal-->



                          <br>
                          <div class="row">

                            <div class="col-md-12">Tools</div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <i class="fab fa-html5 fa-2x"> </i> 
                                <i class="fab fa-php fa-2x"></i>
                                <i class="fab fa-css3-alt fa-2x"></i>
                                <i class="fab fa-js fa-2x"></i>
                                
                            </div>
                            
                          </div>
                          <br>
                          <div class="row">
                            
                            <div class="col-md-12">visit website <a href="http://digiqal.co.za">Digiqal</a>
                            
                            </div>
                          </div>
                      
                  </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>
      




  </div>









  
                
  <!--End of project modal-->



                
                
    
      
    <!--<div id="about-me" class="about-me">
          <!--<img src="asset/img/back.jpg" alt="">-->
          <!-- <div class="container">
              <div class="row">
              
                <div class="col-sm-12 col-md-1 offset-md-8">
                    <br><br>
                    <div class="ratio bg-display mx-auto  mt-5">
                    </div>

                </div>
              </div>

              <div class="row intro">

                  <div class="col-sm-12 intro text-center bg-p">
                    <p id="intro">Hi there my name is Nhlalala and among other thing I love code.
                      I'm a front-end developer looking for work opportunities anywhere in South Africa. 
                      
                    </p>
                  </div>

                  <div class="col-sm-12 text-center" id="scroll">
                      <p>Scroll <br><a href="#skills"  ><i class="fas fa-angle-down fa-5x"></i>
                      </a> </p>
                  </div>

              </div>

           

          </div> 
      </div>-->


      
      <div id="skills">
          <br><br> <br>
        <div class="container">

            
               

                    <br>
                    <h1>CSS and HTML</h1>
                    <div class="progress">
                      <div class="progress-bar"  id="css" style="width:0%;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">93%</div>
                    </div>
                    <br>

                    <h1>JavaScript</h1>
                    <div class="progress">
                        <div class="progress-bar" id="javascript" style="width: 0%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                      </div> 

                    <br>
                    <h1>jQuery</h1>
                    <div class="progress" >
                        <div class="progress-bar" id="jquery" style="width: 0%;" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                      </div>

                    <br>
                    <h1>Mysql</h1>
                    <div class="progress" >
                        <div class="progress-bar" id="mysql"  style="width: 0%;" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">88%</div>
                      </div> 

                    <br>
                    <h1>Wordpress</h1>
                    <div class="progress" >
                        <div class="progress-bar" id="wordpress" style="width: 0%;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                      </div>        
                
                
                  
                
            </div>
          
      </div>
        
    
      
      <div id="projects">
          <br><br><br><br>
        <div class="container">
            
          <div class="row align-items-center">
                
              <div class="col-md-6 p-5">
                  
                  <div class="card">
                      <img class="card-img-top" src="asset/img/blog.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Blog</h5>
                        <p class="card-text">A simple rugby wordpress blog with a custom theme.</p>
                        <a href="" data-toggle="modal" data-target="#projectmodal" class="btn btn-primary">More Info</a>
                      </div>
                  </div>
                  
              </div>

              <div class="col-md-6 p-5">
                  <div class="card">
                      <img class="card-img-top" src="asset/img/photography1.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Lala Photography</h5>
                        <p class="card-text">Responsive photography website .</p>
                        <a href="" data-toggle="modal" data-target="#project1" class="btn btn-primary">More Info</a>
                      </div>
                    </div>

              </div>

              <div class="col-md-6 p-5">
                  <div class="card">
                        <img class="card-img-top" src="asset/img/seekers1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Seekers of land</h5>
                            <p class="card-text">A intertainment blog with a custom theme</p>
                            <a href="" data-toggle="modal" data-target="#project2" class="btn btn-primary">More Info</a>
                        </div>
                  </div>
              </div>

              <div class="col-md-6 p-5">
                  <div class="card">
                        <img class="card-img-top" src="asset/img/makops1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Digiqal</h5>
                            <p class="card-text">Pr company website developed with bootstrap</p>
                            <a href="" data-toggle="modal" data-target="#project4" class="btn btn-primary">More Info</a>
                        </div>
                  </div>
              </div>

              <!-- <div class="col-md-6 p-5">
                  <div class="card">
                        <img class="card-img-top" src="asset/img/zoella.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Zoella</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" data-toggle="modal" data-target="#project3" class="btn btn-primary">More Info</a>
                        </div>
                  </div>
              </div> -->

          </div>
        </div>
      
      </div> <!--End of projects-->
    
      
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="container">
      <div class="row">
        <div class="col- mx-auto">
        <footer class="footer">
            <div class="contacts">
              <div class="col-sm-3 d-inline">
                <div class="d-inline-block" style="font-size:3em; color:Tomato">
                    <a href="https://www.linkedin.com/in/nhlalala-shiburi-a07541109/"><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
              
              <div class="col-sm-3 d-inline">
                  <div class="d-inline-block" style="font-size:3em; color:Tomato">
                    <a href="https://twitter.com/NhlalalaShiburi"><i class="fab fa-twitter"></i></a>
                  </div>
              </div>   

              <div class="col-sm-3 d-inline">
                  <div  class="d-inline-block p-1" style="font-size:3em; color:Tomato">
                    <a href="" data-toggle="modal" data-target="#modal" data-whatever="@mdo"><i class="fas fa-envelope"></i></a>
                  </div>
              </div>
      
              <div class="col-sm-3 d-inline">
                  <div class="d-inline-block p-1" style="font-size:3em; color:Tomato">
                    <a href="https://github.com/softholyic"><i class="fab fa-github"></i></a>
                  </div>
              </div>
            </div>
            
            
          </footer>
        </div>
        </div>
    </div>


    
    
    <!--This is the end of Container-fluid-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="asset/js/jquery-3.3.1.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <!-- Components Vendor  -->
    <script src="asset/js/jquery.parallax.js"></script>

     <script src="asset/js/index.js"></script>
    
<!-- Theme Components and Settings -->
    <script src="asset/js/parallax.js"></script>
   
  </body>
</html>