<!DOCTYPE html>
<html>
<head>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N8GM42SL');</script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Tre reformer som förändrar världen | A multi-religion election</title>
	 
<meta name="description" content="online voting system ,A multi-religion election .">
<meta name="abstract" content="Political Practices in Exile: politik, historia,A multi-religion election system, religionskunskap .">
<meta name="keywords" content="EUs-medborgarinitiativ, Politik, Historia, Geografi, Religionskunskap, online-voting-system,Tre reformer som förändrar världen, A multi-religion election system, The Faith Representatives Chamber (FRC),Multi-Religion Support ">
	
	<title> A multi-religion election</title>
	<meta charset="utf-8">
</head>
<body>
	
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8GM42SL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
     <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://online-voting-system.multireligionvalsystem.eu.org/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://online-voting-system.multireligionvalsystem.eu.org/css/style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <title></title>
</head>
<body>
<div class="container-fluid" id="cont-3">
        <header id="nav-bar">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href=index.html  style="color: white; font-weight: 600; margin-top: 15px;">GO VOTE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="color: white;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
                <li class="nav-item" >
                  <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/admin_dashboard.php" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Dashboard</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/user_suggestion.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Suggestions</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/show_contact.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Contact</a>
                </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/user_details_year.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/user_cand_year.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidates</a>
                </li>
              
                <li class="nav-item" >
                  <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/logout.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Logout</a>
                </li>
              
              </ul>
            </div>
          </nav>
        </header>
	<section style="padding-top:50px; padding-botton:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >

            
	<?php session_start();


	include('dbConnect.php');
	$sql = "select * from users order by id desc";

	$stmt = $pdo->prepare($sql);
	$stmt->execute();

	$rs =  $stmt->fetchAll();

	echo "
		<table border='2'>
			<tr>
				<th>Sno.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Number</th>
				<th>Vote</th>
				<th>Roll No.</th>
				<th>Reason</th>
			</tr>
	";
	$i = 1;
	foreach($rs as $row){
		$uid = $row['id'];
		echo "
		<tr>
			<td>".$i."</td>
			<td>".$row['name']."</td>
			<td>".$row['email']."</td>
			<td>".$row['number']."</td>
			<td>".$row['candidate']."</td>
			<td>".$row['rollno']."</td>
			<td>".$row['reason']."</td>
			
        </tr>
		";
		$i++;
	}
	echo "</table>";
    ?>
        </div>
            </div>
        </div>
    </section>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
        <script src="https://online-voting-system.multireligionvalsystem.eu.org/js/jquery-3.2.1.slim.min.js"></script>
        <script src="https://online-voting-system.multireligionvalsystem.eu.org/js/popper.min.js"></script>    
        <script src="https://online-voting-system.multireligionvalsystem.eu.org/js/bootstrap.min.js"></script>  
        <!-- <script src="https://online-voting-system.multireligionvalsystem.eu.org/js/aos.js"></script>
        <script>
         AOS.init();
        </script> -->
</body>
</html>
