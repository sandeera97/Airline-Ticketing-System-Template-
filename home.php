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
	
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      background-color: #fff !important;
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
	  
	  
	  
	  
	  
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 5px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
  </style>
</head>



<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">



<audio controls autoplay>
  <source src="horse.ogg" type="audio/ogg">
  <source src="Audio/AUD-20180523-WA0004.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>


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
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">Book</a></li>
        <li><a href="ava2flight.php">Flight Schedule</a></li>
        <li><a href="#tour">ABOUT US</a></li>
        <li><a href="#contact">CONTACT & HELP</a></li>
        <li><a href="lg/logg.php"><span class="glyphicon glyphicon-log-in"></span>Login OR SignUP</a></li>
        	
            
          
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="new images/NEWW/extra/sri-lankan-airlines.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>      
      </div>

      <div class="item">
        <img src="new images/NEWW/extra/sri-lankan-airlines-1.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="new images/NEWW/IMG-20180523-WA0019.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- Container (The Band Section) -->

<div id="band" class="bg-1">
<table align="center" border="0" background="new images/1-1278141033-bg-blue-white-gradient-980x445.jpeg" width="100%" height="400">
 	<tr  height="400">
 	<td  width="50%">
 	
 <form action="" method="post">
	
	<h1><center><font face="calibri" color="#FFFFFF">Two Way</font></h1></center>
	
	<table border="0" align="center">
		<tr height="60">
			<td width="200">
				<center><font face="calibri" size="+1" color="#FFFFFF">Departure Airport :</center></font>
				
			</td>
			
			<td width="100">
				<center><input type="text" name="depa" required="">
				</center>
			</td>
		</tr>
			
			
		<tr height="50">
			<td width="100">
				<center><font face="calibri" size="+1" color="#FFFFFF">Arrival Airport :</center></font>
			</td>
			<td width="100">
				<center><input type="text" name="arr" required=""></center>
			</td>
			
		</tr>
			
			
		<tr height="50">	
			
			<td width="200">
				<center><font face="calibri" size="+1" color="#FFFFFF">Departs On :</center></font>
			</td>
			<td width="100">
				<center><input type="date" name="don" id="dateID" required=""></center>
			</td>
		</tr>
		
		<tr height="50">	
			<td width="100">
				<center><font face="calibri" size="+1" color="#FFFFFF">Returns On :</center></font>
			</td>
			
			<td width="100">
				<center><input type="date" name="ron" id="Date" required=""></center>
			</td>
		</tr>
	</table>
		<script>
			var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("ron")[0].setAttribute('min', today);
		</script>
		
		<script>
			var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("don")[0].setAttribute('min', today);
		</script>
			
			<table align="center" border="0">
		<tr height="50">
			<td width="100">
		
		<input class="btn btn-info" type="submit" value="Search Flight">
		
			</td>
		</tr>
	</table>
		</form>
		
</td>		
<td width="50%">
		
		<h1><center><font face="calibri" color="#FFFFFF">One Way</font></h1></center>
		
		<form action="" method="post">
	
	<table bgcolor="#0084FF" border="0" align="center">
		<tr height="60">
			<td width="250">
				<center><font face="calibri" size="+1" color="#FFFFFF">Departure Airport :</center></font>
			</td>
			
			<td width="200">
				<center><input type="text" name="depa" required="">
				</center>
			</td>
			
			</tr>
		<tr height="50">
			<td width="200">
				<center><font face="calibri" size="+1" color="#FFFFFF">Arrival Airport :</center></font>
			</td>
			<td width="200">
				<center><input type="text" name="arr" required=""></center>
			</td>
		</tr>
		<tr height="50">
			<td width="200">
				<center><font face="calibri" size="+1" color="#FFFFFF">Departs On :</center></font>
			</td>
			<td width="200">
				<center><input type="date" name="don" id="dateID" required=""></center>
			</td>
		</tr>
		<tr height="50">	
			<td width="100">
				
			</td>
			
			<td width="100">
				
			</td>
		</tr>
	</table>
		<script>
			var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("ron")[0].setAttribute('min', today);
		</script>
		
		
			<table align="center" border="0">
		<tr height="50">
			<td width="100">
		
		<input class="btn btn-info" type="submit" value="Search Flight">
		
			</td>
		</tr>
	</table>
		
		
		</form>
		
    </div>
    
    
    
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	
    </tr>
		</td>
	</table>
    
    <div id="menu1" class="tab-pane fade">
      	 
   			
    </div>
    </div>
    
  </div>
</div>


<table align = "center" border = "0">
		<tr height = "10">
			<td width = "200">
				
				<font size = "+2" color=" #004CFF" face = "calibri"><center>Avaliable Flight</center></font>
			
			</td>
			<td width = "400">
			<?php
			if(isset($_GET['id']))
			{
                 $dis=$_GET["id"];
				
				//echo"<a href=/'avaflight.php/'>$dis</a>";
				echo"<a href=''>$dis</a>";
				
			}
			
			
			?>
			
			</td>
		</tr>
</table>
	</div>
	
	
	<font size = "+1" color=" #004CFF" face = "calibri"><center>Note : You Want Search and Book Flight Please</font><a href="lg/logg.php"><font size = "+1" color="#FF2B2E" face = "calibri"> SignUp</font></a></center>
	
	<div class="well well-small">
			<h4>Enjoy Travel <small class="pull-right">All for you</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="new images/NEWW/575729_9xk5oxt3vhzjqhyku3f0n0lbk_500x700.jpg" width="100" height="300" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="new images/NEWW/859454c18ac90d5d22f8f605919c6da4--phuket-print-ads_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="new images/NEWW/C8Keg_gU0AIE2Jh_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="new images/NEWW/DHlMB34XcAEoCe9_1_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="new images/NEWW/CR-Flightcrew-20170104154233034_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="new images/NEWW/Create_New_Memories_In_Srilanka_1_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="new images/NEWW/f64646b8673c8e374c05284aa9d9fec0_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="new images/NEWW/94ac31b3-66c7-425e-94cf-5582b402859e_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="new images/NEWW/575729_9xk5oxt3vhzjqhyku3f0n0lbk_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="new images/NEWW/859454c18ac90d5d22f8f605919c6da4--phuket-print-ads_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="new images/NEWW/C1DAa-nUsAI4cpM_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="new images/NEWW/575729_9xk5oxt3vhzjqhyku3f0n0lbk_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="new images/NEWW/DHlMB34XcAEoCe9_1_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="new images/NEWW/C8Keg_gU0AIE2Jh_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="new images/NEWW/C2QvyUEXEAAdhD8_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="new images/NEWW/bagitad-E_500x700.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h2 class="text-center">ABOUT OUR AIRLINE</h2>
	  
    <p class="text-center">
	  		<h2>Our Vision :</h2>
	  		To be the most preferred airline in Asia.
	</p>
	<p class="text-center">
	  		<h2>Our Misson :</h2>
	  		We are in the air transportation business. We provide our customers 
with a reliable and pleasant travel experience. We provide our business 
partners with a variety of innovative, professional and mutually profitable 
services. We meet Shareholder expectations of profitably marketing Sri Lanka 
and contributing towards the well-being of Society. We are a competent, 
proactive and diligent team. Our contribution is recognized and rewarded.
	</p>
	<p class="text-center">
	  		<h2>OUR FLEET :</h2>
	  		Our all new A330-300s come with a range of novelties where the ease of modern 
air travel harmoniously blends in with the uniqueness of Sri Lanka. 
With cabins illustrated by motifs featuring the diversity and beauty 
of the island’s flora and fauna, they feature the latest amenities.

Enjoy your flight and relax in greater comfort on-board in our enhanced Business Class, 
designed to pamper. With seats that transform into full flat beds, extra space, on-demand 
entertainment and direct aisle access, our new and enhanced Business Class makes you
 feel right at home at 35,000ft.

Our comfortable Economy Class sector provides a pleasant flying experience, and lets you 
relax to the latest movies on-demand, while lavishing in the true SriLankan Airlines hospitality
that we are renowned for. With mood-lighting and in-seat power for portable electronic devices across all classes – 
you can also stay connected and be productive throughout the flight with Wi-Fi and mobile phone connectivity. 
Surf the internet, send an email, and make a call or text your friends – all while you fly.
	</p>
    
    		
    
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h2 class="text-center">Contact</h2>
  <p class="text-center"><em>  </em></p>
	
	<form action="fan.php" method="post">

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
	  
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
	  
  </div>
  <br>
  
  </form>
  
</div>

<!-- Add Google Maps -->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Follow US On Social Media</p>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-skype"></a>
<a href="#" class="fa fa-yahoo"></a>


</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
