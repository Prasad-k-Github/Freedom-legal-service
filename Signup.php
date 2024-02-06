<?php
if(isset($_POST["btnsubmit1"]))
{
		$name = $_POST["txtname"];
		$iden = $_POST["txtNIC"];
		$add = $_POST["txtadd"];
		$ag = $_POST["txtage"];
		$mail = $_POST["txtEmail"];
		$mn = $_POST["txtMobNo"];
		$cpw = $_POST["txtcrpw"];
		$conpw = $_POST["txtconpw"];

	//Create a connection to MySQL server
	$conn = mysqli_connect("localhost","root","");
	if (!$conn){
		die("Connection failed");
	}

	//Select Db
	mysqli_select_db($conn,"lawyerdb");

	// Perform SQL
	$sql = "INSERT INTO clientdata(clname,NIC,claddress,age,email,mobileno,createpw,confirmpw)VALUE('$name','$iden','$add',$ag,'$mail',$mn,'$cpw','$conpw')";

	// check sql query
	if(mysqli_query($conn,$sql)){

		header("Location:Appointment.php");
	}
	else{

		header("Location:Signup.html");
	}

	echo"success";
	mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FREEDOM Legal Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="index.html"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Freedom</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-white border-bottom d-none d-lg-flex">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>freedom@gmail.com </small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+9476-908-7940</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center p-2">
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Freedom</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Services</a>
                            <a href="team.html" class="nav-item nav-link">Lawyers</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="LogIn.php" class="btn btn-primary mr-3 d-none d-lg-block">Log In</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Sign Up Start -->
    <div class="container-fluid py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-5">
                    <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Registration</h1>
                        <form action="Signup.php" method="post">
                            <div class="form-group">
                                <input name="txtname" type="text" class="form-control border-0 p-4"
                                    placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input name="txtNIC" type="text" class="form-control border-0 p-4"
                                    placeholder="NIC Number" required="required" />
                            </div>
                            <div class="form-group">
                                <input name="txtadd" type="text" class="form-control border-0 p-4" placeholder="Address"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input name="txtage" type="number" class="form-control border-0 p-4" placeholder="Age"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input name="txtEmail" type="email" class="form-control border-0 p-4"
                                    placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-group">
                                <input name="txtMobNo" type="number" class="form-control border-0 p-4"
                                    placeholder="Mobile Number" required="required" />
                            </div>
                            <div class="form-group">
                                <input name="txtcrpw" type="password" class="form-control border-0 p-4"
                                    placeholder="Create Password" required="required" />
                            </div>
                            <div class="form-group">
                                <input name="txtconpw" type="password" class="form-control border-0 p-4"
                                    placeholder="Confirm Password" required="required" />
                            </div>
                            <div>
                                <button name="btnsubmit1" class="btn btn-primary btn-block border-0 py-3" type="submit">
                                    Submit
                                </button>
                                <button class="btn btn-primary btn-block border-0 py-3" type="reset">
                                    Clear
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up end -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Location</h5>
                        <p class="m-0">123, Main Street, Galle</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Email Us</h5>
                        <p class="m-0">freedom@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Call Us</h5>
                        <p class="m-0">+9476-908-7940</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 display-4 text-primary text-uppercase">FREEDOM</h1>
                </a>
                <p class="m-0 mt-n2 display-4 text-primary text-uppercase">Legal Service</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white mb-2" href="service.html"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="team.html"><i class="fa fa-angle-right mr-2"></i>Lawyers</a>
                    <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                </div>
            </div>
        </div>
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">Freedom Legal Service</a>. All
                    Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>