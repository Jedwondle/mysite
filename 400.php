<?php 
// echo URL; exit;
?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Jonathan Law || Portfolio</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="Jonathan Law">
   <link rel="shortcut icon" href="/img/favicon.ico" media="screen" type="image/ico">
   <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.js"></script>
<![endif]-->
<link rel="stylesheet" href="/css/bootstrap-responsive.css">
<link rel="stylesheet" href="/css/bootstrap.css">
<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
</head>

<body>
   <div class="navbar navbar-inverse navbar-fixed-top">
      <!-- <div class="navbar navbar-fixed-top"> -->
      <div class="navbar-inner">
         <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <!-- <a class="brand" style="width: 250px;" href="#">Jonathan Law</a> -->
            <div class="nav-collapse collapse inline_reset text-center" >
               <div class='inline' style="margin-bottom:-5px; margin-right: -200px;"> <!-- Add: margin-left:-250px;    to styles if including the brand at the top -->
                  <!-- <ul class="nav nav-tabs"> -->
                  <!-- <ul class="nav nav-pills"> -->
                  <ul class="nav">
                     <li class="active"><a href="#">Home</a></li>
                     <li class='hide-on-small'><a href="#about">About</a></li>
                     <li class='hide-on-small'><a href="#contact">Contact</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Action</a></li>
                           <li><a href="#">Another action</a></li>
                           <li><a href="#">Something else here</a></li>
                           <li class="divider"></li>
                           <li class="nav-header">Nav header</li>
                           <li><a href="#">Separated link</a></li>
                           <li><a href="#">One more separated link</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <div class='text-right pull-right' id='login' style='width: 200px; margin-top: 2px;'>
                  <a href="#logmein" role="button" class="btn" data-toggle="modal">Login</a>
                  <a href="#register" role="button" class="btn hide-on-smaller" data-toggle="modal">Register</a>
               </div>

            </div><!--/.nav-collapse -->
            <!-- Button to trigger modal -->
         </div>
      </div>
   </div>
   <!-- Modals -->
   <div id="logmein" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-header text-center">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h3>Login</h3>
      </div>
      <div class="modal-body">
         <!--  Usefull sign in form
         ================================================================= -->
         <form class="navbar-form text-center">
            <input class="span2" type="text" placeholder="Email">
            <input class="span2" type="password" placeholder="Password">
         </form>
      </div>
      <div class="modal-footer" style='text-align: center'>
         <button class="btn btn-primary" id="login-register">Register</button>
         <button class="btn" data-dismiss="modal" aria-hidden="true" onclick='console.log(document.URL);'>Login</button>
         <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
      </div>
   </div>

   <div id="register" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-header text-center">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h3>Register</h3>
      </div>
      <div class="modal-body text-center">
         <!--  Usefull sign in form
         ================================================================= -->
         <form class="navbar-form inline_reset text-center">
            <table class='inline'>
               <tr>
                  <td class='text-right'>
                     <label for="username_register">Username:</label>
                  </td>
                  <td>
                     <input class="span2" id='username_register' name='username_register' type="text" placeholder="Username">
                  </td>
               </tr>
               <tr>
                  <td class='text-right'>
                     <label for="email_register">Email:</label>
                  </td>
                  <td>
                     <input class="span2" id='email_register' name='email_register' type="email" placeholder="Email">
                  </td>
               </tr>
               <tr>
                  <td class='text-right'>
                     <label for="password_register">Password:</label>
                  </td>
                  <td>
                     <input class="span2" id='password_register' name='password_register' type="password" placeholder="Password">
                  </td>
               </tr>
               <tr>
                  <td class='text-right'>
                     <label for="password2_register">Repeat Password:</label>
                  </td>
                  <td>
                     <input class="span2" id='password2_register' name='password2_register' type="password" placeholder="Repeatkk Password">
                  </td>
               </tr>
            </table>
         </form>
      </div>
      <div class="modal-footer" style='text-align: center'>
         <button class="btn btn-primary" id="register-login">Login</button>
         <button class="btn" data-dismiss="modal" aria-hidden="true" onclick='console.log(document.URL);'>Register</button>
         <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
      </div>
   </div>
   <div class='inline_reset text-center' id='body-cover'>

      <div id="body" class='inline text-left'>
         <div class="container-fluid" >

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
               <h1 class="text-error">403 Error!</h1>
               <p>
                  The request you sent to the website server (e.g. a request to load a web page) was somehow malformed. Please try again. 
               </p>
            </div>

         </div> <!-- /container -->
         <footer class='text-center'>
            <hr>
            <p>© Jonathan Law 2013</p>
         </footer>
      </div>
   </div>

   <!-- Le javascript ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="/js/jquery.min.js"></script>
   <script src="/js/bootstrap.min.js"></script>
   <script src="/js/onload.js"></script>




   <embed id="embed_npwlo" type="application/npwlo" height="0"><object id="embed_npwlo_data" height="0"></object></embed>
</body>
</html>
