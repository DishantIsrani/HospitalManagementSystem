<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User | Appointment History</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
    <body>
<?php include('include/sidebar.php');?>
<div class="app-content">
<?php include('include/header.php');?>

<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">

                <div align="center" class="imp">No of Beds available</div>
                <p align="center" id = "carrier" class="imp">540</p>

                <h2 align="center">Book A Bed</h2>
                <div align = "center"><button onclick = "displayCount()" id = "counter">Book</buttton></div>


                </div>
                <!-- <div class = "main-content">
                    <div class="wrap-content container">
                    <section id="page-title">
                        <h1 class = "mainTitle"> Availability of bed</h1>
                    </section>

                    </div>
                </div> -->
</div>
</div>
<!-- start: FOOTER -->
<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->

</body>
<script>
    var counter = 540;
    count = (function(){
        return function() {return counter -= 1;}
    })();
    function displayCount(){
        document.getElementById("carrier").innerHTML = count()
    }
</script>
</html>
