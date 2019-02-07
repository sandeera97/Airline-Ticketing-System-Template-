<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Admin</b>LTE</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Dileepa Sandeera</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Dileepa Sandeera - Web Developer
                      <small>Member since Nov. 2017</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      
                    </div>
                    <div class="pull-right">
                      <a href="../adminsign.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Dileepa Sandeera</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              
              <span class="input-group-btn">
                
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span><h4>Dashboard</h4></span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                
              </ul>
            </li>
            <li>
              
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       
        
         <h1> Dashboard</h1><h5>Control Panel</h5>
        
      <table align="center">
       <tr height="20">
       <td width="1000">  
        	<h4>Click & Go Directly Pages</h4>
        
      <a href="../home.php">  
      <input type="submit" value="Home"></a>
      
      <a href="../sign.php">
      <input type="submit" value="Sign in"></a>
      
      <a href="../login.php">
      <input type="submit" value="Log in"></a>
       
       <a href="../logaf.php">
      <input type="submit" value="Home page2"></a>
       
       <a href="../ava2flight.php">
      <input type="submit" value="Return Flight Schedule"></a>
      
      <a href="../returnsc.php">
      <input type="submit" value="One Way Flight Schedule"></a>
       
       <a href="../avaflight.php">
      <input type="submit" value="Avaliable Flight"></a>
       
       <a href="../payform.php">
      <input type="submit" value="Payment"></a>
      
      
       </tr>
       </td>
       </table>
       <br><br>
        
        <form action="admininsert.php" method="post">
<table border = "0" align = "left">
	<tr height = "200">
		<td width = "400">
				<h3><center> Enter Return Flight Details</center></h3>
				
	<table border="0" align="center">
		<tr height="30">
			<td width="140">
				<center>Flight Name :</center>
			</td>
			<td width="200">
				<center><input type="text" name="fname" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter City 1 :</center>
			</td>
			<td width="200">
				<center><input type="text" name="flyy" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter City 2 :</center>
			</td>
			<td width="200">
				<center><input type="text" name="flytwo" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter Price :</center>
			</td>
			<td width="200">
				<center><input type="text" name="price" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter Depart Date :</center>
			</td>
			<td width="200">
				<center><input type="date" name="ddate" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter Return Date :</center>
			</td>
			<td width="200">
				<center><input type="date" name="rdate" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter Class :</center>
			</td>
			<td width="140">
  <input type="text" name="class" id="displayValu" 
         placeholder="add/select a value">
         


			</td>
		</tr>
		</td>
		
		
		
	</table>
	
	<table align="center" border="0">
		<tr height="30">
			<td width="70">
				<input type="submit" value="Enter Details">
			</td>
		</tr>
	</table>
		</td>
	</tr>
</table>
		
	</form>
      
          <form action="oneway.php" method="post">
<table border = "0" align = "left">
	<tr height = "200">
		<td width = "400">
				<h3><center> Enter One Way Flight Details</center></h3>
	<table border="0" align="center">
		<tr height="30">
			<td width="140">
				<center>Flight Name :</center>
			</td>
			<td width="200">
				<center><input type="text" name="fname" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter City 1 :</center>
			</td>
			<td width="200">
				<center><input type="text" name="flyy" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter City 2 :</center>
			</td>
			<td width="200">
				<center><input type="text" name="flytwo" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter Price :</center>
			</td>
			<td width="200">
				<center><input type="text" name="price" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter Depart Date :</center>
			</td>
			<td width="200">
				<center><input type="date" name="ddate" required=""></center>
			</td>
		</tr>
		<tr height="30">
			<td width="140">
				<center>Enter Class :</center>
			</td>
			<td width="140">
  <input type="text" name="class" id="displayValu" 
         placeholder="add/select a value">
         


			</td>
		</tr>
		
		</td>
		
		
		
	</table>
	
	<table align="center" border="0">
		<tr height="30">
			<td width="70">
				<input type="submit" value="Enter Details">
			</td>
		</tr>
	</table>
		</td>
	</tr>
</table>
		
	</form>
        </td>
	</tr>
</table> 
        
        
        
        <!-- Main content -->
        <section class="content">
          <div class="row">
           <table border = "0" align = "left">
	<tr height = "200">
		<td width = "400">
				<h3><center>Check Comments & Messages</center></h3>
	<table border="0" align="center">
		<tr height="30">
			
			<td width="200">
				<a href="../com.php">
      <input type="submit" value="New Messages & Comments"></a>
			</td>
		</tr>
		</td>
	</table>
          
           
           <table border = "0" align = "left">
	<tr height = "200">
		<td width = "400">
				<h3><center>Delete Flight Schedule</center></h3>
	<table border="0" align="center">
		<tr height="30">
			
			<td width="200">
				<a href="../deletesche.php">
      <input type="submit" value="Delete Flight schedule"></a>
			</td>
		</tr>
		</td>
	</table>
          
          <table border = "0" align = "left">
	<tr height = "200">
		<td width = "400">
				<h3><center>Check Payment Details</center></h3>
	<table border="0" align="center">
		<tr height="30">
			
			<td width="200">
				<a href="../chepay.php">
      <input type="submit" value="Payment Details"></a>
			</td>
		</tr>
		</td>
	</table>
           
           
            <section class="col-lg-7 connectedSortable">
              
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

              
 </div><!-- /.box-header -->
                
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>