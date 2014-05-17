<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.html">

	<title>Clean Zone</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('html/admin'); ?>/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('html/admin'); ?>/js/jquery.gritter/css/jquery.gritter.css" />

	<link rel="stylesheet" href="<?php echo base_url('html/admin'); ?>/fonts/font-awesome-4/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="href="<?php echo base_url('html/admin'); ?>/assets/js/html5shiv.js"></script>
	  <script src="href="<?php echo base_url('html/admin'); ?>/assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url('html/admin'); ?>/css/style.css" rel="stylesheet" />	

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

	<div class="middle-login">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center"><img class="logo-img" src="<?php echo base_url('html/admin'); ?>/images/logo.png" alt="logo"/></h3>
			</div>
			<div>
				<form id="form_login" style="margin-bottom: 0px !important;" method="post" class="form-horizontal" action="<?php echo base_url('administrator').'/login/submit/';?>" parsley-validate novalidate >
					<div class="content">
						<h4 class="title">Login Access</h4>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text"  placeholder="Username" id="username" name="username" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" required parsley-trigger="change" placeholder="Password" id="password" name="password" class="form-control">
									</div>
								</div>
							</div>
							
					</div>
					<div class="foot">						
						<button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2014 Your Company</a></div>
	</div> 
	
</div>

<script src="<?php echo base_url('html/admin'); ?>/js/jquery.js"></script>
	<script src="<?php echo base_url('html/admin'); ?>/js/jquery.cookie/jquery.cookie.js"></script>
  <script src="<?php echo base_url('html/admin'); ?>/js/jquery.pushmenu/js/jPushMenu.js"></script>
	<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/jquery.sparkline/jquery.sparkline.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/jquery.ui/jquery-ui.js" ></script>
	<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/jquery.gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/behaviour/core.js"></script>
	<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/admin.js"></script>
	<script type="text/javascript">
    $(function(){
      $("#cl-wrapper").css({opacity:1,'margin-left':0});
	  $("#form_login").submit(function(){
		 var user=$.trim($("#username").val());
		 var pass=$.trim($("#password").val());
		 if(user=="" ){
			showTopnotification('Tên đăng nhập không được để trống');
			return false;
		 }
		 if(pass==""){
			showTopnotification('Mật khẩu không được để trống');
			return false;
		 }
		 return true;
	  })
    });
	<?php if(isset($b_Check) && $b_Check==false){
		if(!isset($msg) || $msg=="")
			$msg='Tên đăng nhập hoặc mật khẩu không đúng';
			?>
	$(function(){		
	     showTopnotification('<?php echo $msg?>');    
    });	
	<?php }?>
  </script>
 
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('html/admin'); ?>/js/behaviour/voice-commands.js"></script>
  <script src="<?php echo base_url('html/admin'); ?>/js/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/jquery.flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/jquery.flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/jquery.flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/jquery.flot/jquery.flot.labels.js"></script>

</body>
</html>
