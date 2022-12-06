<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>About</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl-carousel.css">

</head>

<body style="background: #bfbfbf">

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky background-header">
        <img style="float: left;padding: 10px;margin-left: 50px;" src="/storage/images/favicon.ico" alt=""
            srcset="" width="80px" height="80px" class="img-responsive">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->

                        <a href="/" class="logo">MERR-C Society Academy</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/">Home</a></li>
                            <li class="scroll-to-section"><a href="/about" style="color:#f55858 !important; ">About</a>
                            </li>
                            <li class="scroll-to-section "><a href="/strands">Academic Strands</a></li>
                            <li class="scroll-to-section"><a href="#login" data-toggle="modal"
                                    data-target="#loginModal">Login</a></li>
                            <li class="scroll-to-section"><a href="#signup" data-toggle="modal"
                                    data-target="#signUpModal">Signup</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <section class="section" id="about"
        style="background: #ff589e;margin-top: 50px; background-image: url('/images/schoolpic.png');background-repeat: no-repeat;background-size: cover;">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0"
                    style="border-bottom-right-radius: 5px;border-top-right-radius: 5px;">

                </div>
                <div class="col py-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <center>
                                <h1 style="margin-left: -150px;">About US</h1>
                            </center>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" style="margin-right: 60px;height: 180px;">
                            <div class="card" style="width: 60rem;height: 100%;background: #f9efa8;">
                                <div class="card-body">
                                    <h5 class="card-title">Mission</h5>
                                    <p class="card-text" style="color: black">Academy builds a Godly, patriotic,
                                        environmental, skillful,
                                        and intellectual learner.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">

                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" style="margin-right: 60px;height: 220px;">
                            <div class="card" style="width: 60rem;height:100%;background: #f9efa8;">
                                <div class="card-body">
                                    <h5 class="card-title">Vision</h5>
                                    <p class="card-text" style="color: black">MERR- C Society Academy as vessel of
                                        the light of Christ through a
                                        well-rounded educational program and holistic learning experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->



    <!-- ***** Footer Start ***** -->
    <footer style="background-color: #bfbfbf;margin-top: 10px;">
        <div class="container">
            <div class="row">
                <center>
                    <p class="copyright" style="color: black;">Copyright &copy; 2022</p>
                    {{-- <div class="col-lg-7 col-md-12 col-sm-12">
                        <p class="copyright" style="color: white;">Copyright &copy; 2022
                    </div> --}}
                </center>
                {{-- <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </footer>
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 450px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUpModalLabel">Signup</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/signup" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group" style="margin-left: 60px;">
                                <label for="Username" class="for">Username</label>
                                <label for="Firstname" class="for" style="margin-left: 110px;">First Name</label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="text" name="username" id="" style="width:150px;">
                                <input required type="text" name="firstname" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -12px;">
                                <label for="Middlename" class="for">Middle Name</label>
                                <label for="Lastname" class="for" style="margin-left: 89px;">Last Name</label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="text" name="middlename" id=""
                                    style="width:150px;">
                                <input required type="text" name="lastname" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -12px;">
                                <label for="lrn" class="for">LRN</label>
                                <label for="Track" class="for" style="margin-left: 153px;">Track</label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="text" name="lrn" id="" style="width:150px;">
                                <select name="track" id="civilstat" style="width:150px;margin-left: 33px;">
                                    <option value="ABM" selected>ABM</option>
                                    <option value="GAS">GAS</option>
                                    <option value="HUMSS">HUMSS</option>
                                    <option value="STEM">STEM</option>
                                    <option value="TVL">TVL
                                    </option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -12px;">
                                <label for="password" class="for">Password</label>
                                <label for="Email" class="for" style="margin-left: 111px;">Email</label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="password" name="password" id="password" style="width:150px;">
                                <input required type="email" name="email" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -12px;">
                                <label for="password" class="for">Retype Password</label>
                            </div>
                            <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                                <input required type="password" name="repassword" id="repassword"
                                    style="width:150px;">
                            </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnSignup"
                        style="background-color: #ff589e" value="yes">Sign Up</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade " id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/login" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <center>
                                <div class="form-group">
                                    <input required type="text" style="width:350px;margin-left: 50px;"
                                        name="username" id="un" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input required type="password" style="width:350px;margin-left: 50px;"
                                        name="password" id="pw" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input style="margin-left: -170px;" type="checkbox" name="remember"
                                        id="remember" placeholder="remember">
                                    <label for="remember" class="remember">Remember me</label>

                                </div>
                            </center>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #ff589e">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/owl-carousel.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="js/custom.js"></script>

</body>

</html>
