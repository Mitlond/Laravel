<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-widyh, initial-scale=1">
    <title> Laravel</title>
	
	 <link href="{{asset('/css/app.css')}}" rel="stylesheet">
	 
	 <link href='//fonts.googleapis.com/css?familly=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>	
<body>
   <nav class="navbar navbar-default">
  <div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle Bavigation</span>
       <span class="icon-bar"></span> 	   
	    <span class="icon-bar"></span> 
		 <span class="icon-bar"></span> 
		 </button>
		      <a class="navbar-brand" href="#">Laravel</a>
			  </div>
			
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
     <li><a href="http://laravel.local">Home</a></li>
 </ul>
<ul class=" nav navbar-nav navbar-right">
<li><a href="http://laravel.local/auth/login">Login</a></li>
<li><a href="http://laravel.local/auth/register">Register</a></li>
</ul>
     </div>
</div>
</nav>
    <div class="container-fluid">
   <div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading">Login</div>
  <div class="panel-body">

<form class="form-horizontal" role="form" method="POST"
action="http://laravel.local/auth/login">  
   <input type="hidden" name="_token" value="csuSHdxvFCD060wz6HBnzyF7soz5XdFfaPjjdCV">
    <div class="form-group">
	  <label class="col-md-4 control-label">E-Mail Address</label>
	   <div class="col-md-6">
	     <input type="email" class="form-control" name="email"
		 value="">
		   </div> 
		     </div>
			      <div class="form-goup">
				    <label class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
		  <input type="password" class="form-control" name="passwod">
		  </div>
		   </div>
		    <div class="form-group">
			 <div class="col-md-6 col-md-offset-4">
			 <div class="checkbox">
			  <label>
			      <input type="checkbox" name="remember">
				  </label>
				  </div>
				  </div>
				  </div>
		   
		  
		