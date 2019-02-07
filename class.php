<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
  <link rel="stylesheet" href="css/TCSS.css">
  <script src="js/1js.js"></script>
  <script src="js/2js.js"></script>
  <script src="js/aa.js"></script>
	
	
	

<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(0%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color:#0064FF;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">



<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">SRI LANKAN AIRWAYS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="economy.php">Economy Class</a></li>
        <li><a href="logaf.php">HOME</a></li>
        
       
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>



<!-- Container (The Band Section) -->

 
   
  <form action="insert.php" method="post">
		
			<table align="center" border="0">
				<tr height="200">
					<td width="800">
								<p>
									<font size="+3" face="calibri"><br>
										<center>Welcome To Business Class</center>
									</font>
									
									<font size="+1" face="calibri">
										<center>There's no better way to fly than SriLanka's Buisness Class.It is an experienced
of comfort and sophistication, sealed with traditional SriLankan hospitality and
warmth</center>
									</font>
								</p>
					</td>
				</tr>
			
		
		
		
			<table align="center" border="0">
		
				<tr height="200">
				<td width = "400">
			
				<video align="center" width="600" height="350" controls autoplay>
  <source src="class/Buisness/SriLankan Airlines Business Class.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>


		
				</td>
				<td width = "600">
					<table border="0" align="center">
						<tr height="200">
							<td width="500">
								<p>
									
									
									<font size="+3" face="calibri">
										<center>The Best in Entertainment</center>
									</font>
									
									<img src="new images/SriLankan-cabin.jpg" width="550" height="250">
									
									<font size="+1" face="calibri">
									<center>The state of the art Thales AVANT in-flight entertainment system has the latest
blockbusters from Hollywood and Bollywood, and a collection of classics and
favourites. Buisness Class features 15.4 inch screens, with over 50 TV channels, 
120 movies, an extensive library of audio CD's and radio channels, and a large number
of games for all age groups</center></font>
								</p>
							</td>
						</tr>
					</table>
				</td>
				</tr>
			
			</table>
			
			<table align="center" border="0">
		
				<tr height="200">
				<td width = "600">
								<p>
									<font size="+3" face="calibri">
										<center>The Flat Bed</center>
									</font>
									
									<img src="new images/Flat-Bed-012.jpg" width="550" height="320">
									
									<font size="+1" face="calibri">
										<center>Experience the highest levels of privacy and comfort on our A330 wide body aircraft
where seclusions blends with luxury. Individual storage space provides room for all
your personal belongings and you'll find more knee room and living space.With relaxing
mood lightning and dazzling night sky displays.</center>
									</font>
									
									
								</p>
		
				</td>
				<td width = "600">
					<table border="0" align="center">
						<tr height="200">
							<td width="500">
								
								<p>
									<font size="+3" face="calibri">
										<center>Geat Tasting Meals</center>
									</font>
									
									<img src="new images/SriLankan_CD-9.jpg" width="550" height="320">
									
									<font size="+1" face="calibri">
										<center>Indulge in delicious meals prepared with extra care to please your plate, with a wide
array of healthy options, for an unforgettable culinary experience at 37,000ft. Compliment
it with a selection from our finest wines</center>
									</font>
									
									
								</p>
									
							</td>
						</tr>
					</table>
				</td>
				</tr>
			
			</table>
			
			
			
			
	
		
		
    </div>
    <div id="menu1" class="tab-pane fade">
      
   
    </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      //////////
    </div>
  </div>
  
  <br><br>
  
  
</div>
</form>
</body>
</html>
	