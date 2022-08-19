<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta Name="Description" content="RepairIt guides and disassembly information for phones from all manufacturers and service providers, including Apple iPhone and Samsung Galaxy. Get everything... Phone troubleshooting, repair, and service manuals.">
	<meta Name="keyword" content="Phone Repair, Phone, iFixit, Mac, MacBook, iPod, iPhone, Repair, Parts, XBox, PlayStation, Game Boy, Nintendo DSi, tools, repair it, need a repair, bad phone, spoilt phone, ikeja, computer village.">
	<meta Name="Author" content="Caleb, repairIt">
	<title>Repair It</title>
	 
	
<script type="text/javascript" src='+-jqy/jquery.js'></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link type='text/css' rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
 <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.bundle.js')}}"></script> 
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style type="text/css">
  *{
    font-family: Roboto, sans-serif;
  }
  .active{
    color:green;
  }
</style>
<body>
	<!--Navbar-->
    @include('layouts.styles')
		<nav class="navbar navbar-expand-lg "style="background: black;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><span style="color:gold">REPAIR</span><span style="color:white">IT</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color:gold;">
      <span class="navbar-toggler-icon">click</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 10%;">
      <ul class="navbar-nav  mb-1 mb-md-0" >
        <li class="nav-item" >
          <a class="nav-link active hover"  href="/"
          class="{{request()->is('/') ? 'active' : ''}}" style="color:gold">Home</a>
        </li> 
        <li class="nav-item" >
          <a class="nav-link hover" href="{{url('services')}}"
           class="{{request()->is('services') ? 'active' : ''}}">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link hover" href="{{url('contact')}}"
           class="{{request()->is('contact') ? 'active' : ''}}">Contacts</a>
        </li>  
        <li class="nav-item ">
          <a class="nav-link hover" href="{{url('signup')}}"
           class="{{request()->is('signup') ? 'active' : ''}}">Sign up</a>
        </li> 
        <li class="nav-item ">
          <a class="nav-link hover" href="{{url('login')}}"
           class="{{request()->is('login') ? 'active' : ''}}">Login</a>
        </li> 
        
         
      </ul> 
    </div>
  </div>
</nav>

@yield('content')

<div class="container-fluid" style="background: black;">
	<div class="row">
		<div class="col-sm-1 col-lg-2"></div>
		<div class="col-sm-5 col-lg-2">
		<div class="kfoot">
		<h5 style="margin-top:30%">Repair It </h5>
		<p style="color:white">Repair It always got you covered</p>
		</div></div>

		<div class="col-sm-6 col-lg-2">
		<div class="kfoot">
		<h5>pages</h5>
		<ul style="list-style:circle ;">
		<li >Home</li>
		<li>About</li>
		<li>Contact</li>
		<li>Book a repair</li>
		<li>Services</li>
		</ul>
		</div></div>

		<div class="col-sm-6 col-lg-2">
		<div class="kfoot">
		<h5>services</h5>
		<ul style="list-style:circle ;">
		<li>Phone Repairs</li>
		<li>Tablet Repairs</li>
		<li>Mac&PC Repairs</li>
		<li>Smartwatch & Accessories</li>
		<li>Speaker Repairs</li>
		</ul>
		</div></div>

		<div class="col-sm-6 col-lg-2">
		<div class="kfoot">
		<h5>contact us</h5>
		<ul style="list-color:circle ;">
		<li>1 Repair it Opebi Avenue, Ikeja,<br> Lagos. (Balogun Busstop)</li>
		<li>+2347031512930</li>
		<li>info@k-repair.com</li>
		</ul>
		</div>
		</div>
		<div class="col-md-1 col-lg-2"></div>	
	 </div>

	 <div style="text-align: center;">
			Copyright &copy; <?php echo date('Y'); ?>
			REPAIR IT. All rights reserved.caybaby;
		</div>
	 </div>	
	</footer>
	</body>

</html>