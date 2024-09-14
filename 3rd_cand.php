<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5P4LD3288P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5P4LD3288P');
</script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','G-5P4LD3288P');</script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Tre reformer som förändrar världen | A multi-religion election</title>
	 
<meta name="description" content="online voting system ,A multi-religion election .">
<meta name="abstract" content="Political Practices in Exile: politik, historia,A multi-religion election system, religionskunskap .">
<meta name="keywords" content="EUs-medborgarinitiativ, Politik, Historia, Geografi, Religionskunskap, online-voting-system,Tre reformer som förändrar världen, A multi-religion election system, The Faith Representatives Chamber (FRC),Multi-Religion Support ">
	
  <!------------------  Required Meta Tags ------------------>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!------------------  Bootstrap css ------------------>

<link rel="stylesheet" href="https://online-voting-system.multireligionvalsystem.eu.org/css/bootstrap.min.css">

  <!------------------  FontAwesome CDN ------------------>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!------------------  Custom css------------------>

<link rel="stylesheet" href="css/style.css">

<!------------------  Fonts CDN ------------------>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!------------------  Internal Css ------------------>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }
</style>
</head>
<body>
  <!------------------  Navbar Section ------------------>
  <div class="container-fluid" id="cont-3">
    <header id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="https://online-voting-system.multireligionvalsystem.eu.org/index.html"  style="color: white; font-weight: 600; margin-top: 15px;">GO VOTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
            <li class="nav-item" >
              <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/candidate.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidate</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/result.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Result</a>
            </li>
          
            <li class="nav-item" >
              <a class="nav-link" href="https://online-voting-system.multireligionvalsystem.eu.org/about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
            </li>
          
          </ul>
        </div>
    </nav>
</header>
<div class="container">
         
         <div class="row">
           <div class="col-md-12" >
           <h1 class="text-center">
            
           <p class="text-center" style="margin-bottom: 50px;">Candidates and Voting System</p>
         </div>
         <?php 
   
      

   $sql = "select * from candidate_3rd where approve_status=1";
   include("dbConnect.php");
    
       $result= $pdo->query($sql);
     
     $rs =   $result->fetchAll();
      
     foreach($rs as $row){
?>
        <!-- Card Start -->
          <div class="col-md-3 " style=" margin-left:25px; padding-top: 30px;">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="https://online-voting-system.multireligionvalsystem.eu.org/img/9.svg" alt="shinzo" height="350px">
                  <div class="card-body">
                    <h2 class="card-title"><?php echo $row['name']; ?></h2>
                    <p class="card-text"><?php echo $row['branch']; ?></p>
                    <a href="confirmation_3.php" class="btn btn-primary">Vote Now</a>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- Card End -->
    
          </div>
        </div>
      </section>
      <!------------------  Footer Section ------------------>

      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <hr>
              <div class="Footer">
                <ul style="display: flex;">
                  <li style="list-style: none; padding: 10px; "><a href="https://online-voting-system.multireligionvalsystem.eu.org/index.html" style="text-decoration: none; color: #a517ba;">Home</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="https://online-voting-system.multireligionvalsystem.eu.org/about.php" style="text-decoration: none; color: #a517ba;">About</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="https://online-voting-system.multireligionvalsystem.eu.org/suggestion.html" style="text-decoration: none; color: #a517ba;">Suggestion</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="https://online-voting-system.multireligionvalsystem.eu.org/contact_form.php" style="text-decoration: none; color: #a517ba;">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <hr>
              <div class="social-icon">
                <ul >
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
              </div>
            </div>
          </div>
        </div>
        </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://online-voting-system.multireligionvalsystem.eu.org/js/jquery-3.2.1.slim.min.js"></script>
    <script src="https://online-voting-system.multireligionvalsystem.eu.org/js/popper.min.js"></script>
    <script src="https://online-voting-system.multireligionvalsystem.eu.org/js/bootstrap.min.js"></script>

</body>
</html>
