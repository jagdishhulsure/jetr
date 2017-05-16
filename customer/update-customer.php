<!DOCTYPE html>
<?php
	error_reporting(0);
	session_start(); //Starting the Session.
	include('../database/database.php'); //Including PHP/MYSQL Connection File.
	if(isset($_SESSION['email'])){
?>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
	<title>jetr.in | Customer</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/bootstrap-summernote/summernote.css">
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<script>
function showLocation(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("displayLocation").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("displayLocation").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","load-location.php?qty="+str,true);
xmlhttp.send();
}
</script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="navbar-header">
            <a class="navbar-brand" href="index.php">JET Reacharge</a>
        </div>
		<!-- END LOGO -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">					
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					
					<span class="username username-hide-on-mobile">
					Admin </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						
						<li>
							<a href="../logout.php">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu " data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<a href="../dashboard.php">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">Main Category</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="../main-category/add-main-category.php">
							<i class="icon-home"></i>
							Add</a>
						</li>
						<li>
							<a href="../main-category/view-main-category.php">
							<i class="icon-basket"></i>
							View/Edit/Delete</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">Sub Category</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="../sub-category/add-sub-category.php">
							<i class="icon-home"></i>
							Add</a>
						</li>
						<li>
							<a href="../sub-category/view-sub-category.php">
							<i class="icon-basket"></i>
							View/Edit/Delete</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">Operator</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="add-operator.php">
							<i class="icon-home"></i>
							Add</a>
						</li>
						<li>
							<a href="view-operator.php">
							<i class="icon-basket"></i>
							View/Edit/Delete</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">Circle</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="add-circle.php">
							<i class="icon-home"></i>
							Add</a>
						</li class="active">
						<li>
							<a href="view-circle.php">
							<i class="icon-basket"></i>
							View/Edit/Delete</a>
						</li>
					</ul>
				</li>
				<li class="start active open">
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">User</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="add-customer.php">
							<i class="icon-home"></i>
							Add</a>
						</li>
						<li class="active">
							<a href="view-customer.php">
							<i class="icon-basket"></i>
							View/Edit/Delete</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">Order</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="../order/view-order.php">
							<i class="icon-basket"></i>
							View/Edit/Delete</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<?php if(isset($_GET['customer_key'])){ ?>
	<?php
		$customer_id = trim($_GET['customer_key']); 
		$sql1 = "SELECT * FROM customer where customer_id='$customer_id'";
		$result1 = mysqli_query($conn,$sql1);
		// output data of each row
		while($row1 = mysqli_fetch_array($result1)) {
	?>
	<div class="page-content-wrapper">
		<div class="page-content">
		<div class="note note-info" id="customer_error" style="display:none;">
			<h4 class="block">Sucess Message</h4>
			<p>
			Customer Updated Sucessfully..
			</p>
		</div>
		<form class="form-horizontal" enctype="multipart/form-data" id="uploadimage" method="post" action="" name="uploadimage">	
		<input type="hidden" value="<?php echo $row1['customer_id']; ?>" id="customer_id" name="customer_id" />
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i>User
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3">
							<ul class="nav nav-tabs tabs-left">
								<li class="active">
									<a href="#tab_6_1" data-toggle="tab" id="tab1">
									Customer Details </a>
								</li>
								<li>
									<a href="#tab_6_2" data-toggle="tab">
									Address Information </a>
								</li>
							</ul>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="tab-content">
								<div class="tab-pane active" id="tab_6_1">
									<!-- BEGIN PAGE CONTENT-->
									<div class="row">
										<div class="col-md-12">
											<!-- BEGIN EXTRAS PORTLET-->
											<div class="portlet-body form">
												<div class="form-body">
													<div class="form-group">
													   <label  class="col-md-3 control-label">First Name:</label>
													   <div class="col-md-3">
														  <input type="text" name="customer_first_name" id="customer_first_name" value="<?php echo $row1['customer_first_name']; ?>" class="form-control" placeholder="Enter First Name">
													      <div id="customer_first_name_error" style="font-size:12px; color:red; font-weight:700;"></div> 
													   </div>
													  
													   <label  class="col-md-3 control-label">Last Name:</label>
													   <div class="col-md-3">
														  <input type="text" name="customer_last_name" id="customer_last_name" value="<?php echo $row1['customer_last_name']; ?>" class="form-control" placeholder="Enter Last Name">
													      <div id="customer_last_name_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													</div>
													<div class="form-group">
													   <label  class="col-md-3 control-label">Email:</label>
													   <div class="col-md-3">
														  <input type="text" name="customer_email" id="customer_email" value="<?php echo $row1['customer_email']; ?>" class="form-control" placeholder="Enter Email-Id">
													      <div id="customer_email_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													   
													   <label  class="col-md-3 control-label">Password:</label>
													   <div class="col-md-3">
														  <input type="text" name="customer_password" id="customer_password" value="<?php echo $row1['customer_password']; ?>" class="form-control" placeholder="Enter Password">
													      <div id="customer_password_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Gender :</label>
														<div class="col-md-3">
														<select class="form-control" name="customer_gender" id="customer_gender">
															<?php if($row1['customer_gender']=='Male') { ?>
															<option value="Male" selected="select">Male</option>
															<option value="Female">Female</option>
															<?php } else { ?>
															<option value="Male">Male</option>
															<option value="Female" selected="select">Female</option>
															<?php } ?>
														</select>
														<div id="customer_gender_error" style="font-size:12px; color:red; font-weight:700;"></div>
														</div>
														
														<label  class="col-md-3 control-label">Number:</label>
													   <div class="col-md-3">
														  <input type="text" name="customer_number" id="customer_number" value="<?php echo $row1['customer_number']; ?>" class="form-control" placeholder="Enter Last Name">
													      <div id="customer_number_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Disable:</label>
														<div class="col-md-3">
														<select class="form-control" name="disable_flag" id="disable_flag">
															<?php if($row1['disable_flag']=='No') { ?>
															<option value="No" selected="select">No</option>
															<option value="Yes">Yes</option>
															<?php } else { ?>
															<option value="No">No</option>
															<option value="Yes" selected="select">Yes</option>
															<?php } ?>
														</select>
														<div id="disable_flag_error" style="font-size:12px; color:red; font-weight:700;"></div>
														</div>
													</div>
												</div>												
											</div>
												
										</div>
									</div>
									<!-- END PAGE CONTENT-->
								</div>
								<div class="tab-pane fade" id="tab_6_2">
									<!-- BEGIN PAGE CONTENT-->
									<div class="row">
										<div class="col-md-12">
											<!-- BEGIN EXTRAS PORTLET-->
											<div class="portlet-body form">
												<div class="form-body">
													<div class="form-group">
													   <label  class="col-md-3 control-label">Address 1:</label>
													   <div class="col-md-3">
														  <input type="text" name="customer_address1" id="customer_address1" value="<?php echo $row1['customer_address1']; ?>" class="form-control" placeholder="Enter Address">
													      <div id="customer_address1_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													   
													   <label  class="col-md-3 control-label">Address 2:</label>
													   <div class="col-md-3">
														  <input type="text" name="customer_address2" id="customer_address2" value="<?php echo $row1['customer_aaddress2']; ?>" class="form-control" placeholder="Enter Address">
													      <div id="customer_address2_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													</div>
													<div class="form-group">
													   <label  class="col-md-3 control-label">State:</label>
													   <div class="col-md-3">
														  <select class="form-control" name="state_id" id="state_id">
															<?php
															$data = file_get_contents ("../state/state.json");
																$json = json_decode($data, true);
																foreach ($json as $key => $value) {
																	if($value['state_id']!=""){
																		if($value['state_id']==$row1['state_id']){		
															?>
															<option value="<?php echo $value['state_id']; ?>" selected="select"><?php echo $value['state_title']; ?></option>
															<?php 
																		}
																	} 
																}
															?>
															<?php
															$data = file_get_contents ("../state/state.json");
																$json = json_decode($data, true);
																foreach ($json as $key => $value) {
																if($value['state_id']!="" && $value['state_id']!=$row1['state_id']){			
															?>
															<option value="<?php echo $value['state_id']; ?>" ><?php echo $value['state_title']; ?></option>
															<?php } 
																}
															?>
														</select>
														<div id="customer_state_id_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													   
													   <label  class="col-md-3 control-label">City:</label>
													   <div class="col-md-3">
														<select class="form-control" name="city_id" id="city_id" onChange="showLocation(this.value)">
															<?php
															$data = file_get_contents ("../city/city.json");
																$json = json_decode($data, true);
																foreach ($json as $key => $value) {
																	if($value['city_id']!=""){
																		if($value['city_id']==$row1['city_id']){		
															?>
															<option value="<?php echo $value['city_id']; ?>" selected="select"><?php echo $value['city_title']; ?></option>
															<?php 
																		}
																	} 
																}
															?>
															<?php
															$data = file_get_contents ("../city/city.json");
																$json = json_decode($data, true);
																foreach ($json as $key => $value) {
																if($value['city_id']!="" && $value['city_id']!=$row1['city_id']){			
															?>
															<option value="<?php echo $value['city_id']; ?>" ><?php echo $value['city_title']; ?></option>
															<?php } 
																}
															?>
														</select>
														<div id="customer_city_id_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													</div>
													<div class="form-group">
													   <div id="displayLocation">
													   <label  class="col-md-3 control-label">Location:</label>
													   <div class="col-md-3">
														  <select class="form-control" name="location_id" id="location_id">
															<?php
															$data = file_get_contents ("../location/location.json");
																$json = json_decode($data, true);
																foreach ($json as $key => $value) {
																	if($value['location_id']!=""){
																		if($value['location_id']!="" && $value['location_id']==$row1['location_id'] && $value['city_id']==$row1['city_id']){		
															?>
															<option value="<?php echo $value['location_id']; ?>" selected="select"><?php echo $value['location_title']; ?></option>
															<?php 
																		}
																	} 
																}
															?>
															<?php
															$data = file_get_contents ("../location/location.json");
																$json = json_decode($data, true);
																foreach ($json as $key => $value) {
																if($value['location_id']!="" && $value['location_id']!=$row1['location_id'] && $value['city_id']==$row1['city_id']){			
															?>
															<option value="<?php echo $value['location_id']; ?>" ><?php echo $value['location_title']; ?></option>
															<?php } 
																}
															?>
														</select>
														<div id="customer_location_id_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													   </div>
													   
													   <label  class="col-md-3 control-label">LandMark:</label>
													   <div class="col-md-3">
														  <input type="text" name="customer_landmark" id="customer_landmark" value="<?php echo $row1['customer_landmark']; ?>" class="form-control" placeholder="Enter Company Name">
													      <div id="customer_landmark_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													</div>
													<div class="form-group">
													   <label  class="col-md-3 control-label">Pincode:</label>
													   <div class="col-md-3">
														  <input type="text" name="customer_pincode" id="customer_pincode" value="<?php echo $row1['customer_pincode']; ?>" class="form-control" placeholder="Enter Pincode">
													      <div id="customer_pincode_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div>
													  
													   <label  class="col-md-3 control-label">Company:</label>
													   <div class="col-md-3">
														  <input type="text" name="customer_company" id="customer_company" value="<?php echo $row1['customer_company']; ?>" class="form-control" placeholder="Enter Company Name">
													      <div id="customer_company_error" style="font-size:12px; color:red; font-weight:700;"></div>
													   </div> 
													</div>
												</div>	
											</div>		
										</div>
									</div>
									<!-- END PAGE CONTENT-->	
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
									   <input type="submit" class="btn blue" name="submit" value="Submit" id="submit"/>
									   <input type="reset" class="btn default" name="reset" value="Reset" />                              
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	<?php } ?>
	<?php } ?>
	<!-- END CONTENT -->
	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2017 &copy; <a href="http://www.jetr.in" target="_new">www.jetr.in</a>.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="../assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/components-editors.js"></script>

<script type="text/javascript">
$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();

var customer_first_name = $("#customer_first_name").val();
var customer_email = $("#customer_email").val();
var customer_password = $("#customer_password").val();
var customer_number = $("#customer_number").val();

var customer_address1 = $("#customer_address1").val();
var state_id = $("#state_id").val();
var city_id = $("#city_id").val();
var location_id = $("#location_id").val();
var customer_landmark = $("#customer_landmark").val();
var customer_pincode = $("#customer_pincode").val();

if(customer_first_name== ''){
$("#tab1").css("color","red");	
$("#customer_first_name_error").html("Please Enter First Name").show();
$('#customer_first_name_error').fadeOut(5000);
return false;
}

if(customer_email== ''){
$("#tab1").css("color","red");	
$("#customer_email_error").html("Please Enter Email Address").show();
$('#customer_email_error').fadeOut(5000);
return false;
}

if(customer_password== ''){
$("#tab1").css("color","red");	
$("#customer_password_error").html("Please Enter Password").show();
$('#customer_password_error').fadeOut(5000);
return false;
}

if(customer_number== ''){
$("#tab1").css("color","red");	
$("#customer_number_error").html("Please Enter Nubmer").show();
$('#customer_number_error').fadeOut(5000);
return false;
}

if(customer_address1== ''){
$("#tab2").css("color","red");	
$("#customer_address1_error").html("Please Enter Address").show();
$('#customer_address1_error').fadeOut(5000);
return false;
}

if(state_id== ''){
$("#tab2").css("color","red");	
$("#customer_state_id_error").html("Please Select State").show();
$('#customer_state_id_error').fadeOut(5000);
return false;
}

if(city_id== ''){
$("#tab2").css("color","red");	
$("#customer_city_id_error").html("Please Select City").show();
$('#customer_city_id_error').fadeOut(5000);
return false;
}

if(location_id== ''){
$("#tab2").css("color","red");	
$("#customer_location_id_error").html("Please Select Location").show();
$('#customer_location_id_error').fadeOut(5000);
return false;
}

if(customer_landmark== ''){
$("#tab2").css("color","red");	
$("#customer_landmark_error").html("Please Enter LandMark").show();
$('#customer_landmark_error').fadeOut(5000);
return false;
}

if(customer_pincode== ''){
$("#tab2").css("color","red");	
$("#customer_pincode_error").html("Please Enter Pincode").show();
$('#customer_pincode_error').fadeOut(5000);
return false;
}

var formData = new FormData(this);
$.ajax({
url: "update.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: formData,		// Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
	if(data=='Sucess'){
/*	$('#category_error').css("display", "block");
	$('#category_error').fadeOut(9000); */
	window.location = "view-customer.php";
	return false;
	}else{
	$("#category_error").html("").show();
	return true;
	}
}
});
return false;
}));
});
</script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   ComponentsEditors.init();
});   
</script>
<!-- END JAVASCRIPTS -->
</body>

<!-- END BODY -->
</html>
<?php
		} else {
		header('Location: ../index.php');
		}
?>