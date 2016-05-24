<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SIMLAB LOGIN</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url(); ?>assets/template/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/template/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>assets/template/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?php echo base_url(); ?>assets/template/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">


<div class="">
  <div id="wrapper">
    <div id="login" class"animate form">
      <section class="login_content">
          <div>
            <img src="<?php echo base_url(); ?>assets/img/kkp-logo.png" style="width:200px;height:200px;"/>
          </div>
          <br />
          <p><?php echo lang('login_subheading');?></p>
          <div id="infoMessage"><?php echo $message;?></div>
          <?php echo form_open("auth/login");?>
          <h1>SIMLAB</h1>
            <div>
              <label for="identity">Username:</label> 
              <input type="text" class="form-control" name="identity" value="" id="identity"  />
            </div>
            <div>
              <label for="password">Password:</label> 
              <input type="password" class="form-control" name="password" value="" id="password"  />
            </div>
          <div>
         
            <button class="btn btn-default submit" type="submit" name="submit" id="submit">LOGIN</button>          
          </div>
          <div class="clearfix"></div>
          <div class="separator"></div>
          

          <?php echo form_close();?>
      </section>
    </div>
  </div>  
</div>
</body>

</html>
