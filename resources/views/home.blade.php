<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Youth Project</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');

html, body{
  height: 100%;
  width: 100%;
  font-family: 'Poppins', sans-serif;
  color: #222;
}
.navbar{
  padding: 1px;
}

.navbar-nav li{
  padding-right: 20px;
}
.navbar-link{
  font-size: 40px;
}


/*---Media Queries --*/
@media (max-width: 992px) {

  }
@media (max-width: 768px) {
  
}
@media (max-width: 576px) {
  
}


/*---Firefox Bug Fix --*/
.carousel-item {
  transition: -webkit-transform 0.5s ease;
  transition: transform 0.5s ease;
  transition: transform 0.5s ease, -webkit-transform 0.5s ease;
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
}
section.cta {
  position: relative;
  padding: 250px 0;
  background-image: url("/img/bg.jpg");
  background-position: center;
  background-size: cover;
}

section.cta .cta-content {
  position: relative;
  z-index: 1;
}

section.cta .cta-content h2 {
  font-size: 50px;
  max-width: 450px;
  margin-top: 0;
  margin-bottom: 25px;
  color: white;
}

@media (min-width: 768px) {
  section.cta .cta-content h2 {
    font-size: 80px;
  }
}


section.cta .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

section.download {
  position: relative;
  padding: 150px 0;
}

section.download h2 {
  font-size: 50px;
  margin-top: 0;
}


@media (min-width: 768px) {
  section.download h2 {
    font-size: 70px;
  }
}
section.features .section-heading {
  margin-bottom: 10px;
}

section.features .section-heading h2 {
  margin-top: 10px;
}

section.features .section-heading p {
  margin-bottom: 0;
}

section.features .device-container,
section.features .feature-item {
  max-width: 325px;
  margin: 0 auto;
}

section.features .device-container {
  margin-bottom: 100px;
}

@media (min-width: 992px) {
  section.features .device-container {
    margin-bottom: 0;
  }
}

section.features .feature-item {
  padding-top: 10px;
  padding-bottom: 50px;
  text-align: center;
}

section.features .feature-item h3 {
  font-size: 30px;
}

.ff {
  margin-left: 7cm;
  margin-left: 7cm;
}

  </style>
</head>
<body>

<!-- Navigation -->


<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand"  href="#"><img src="{{ ('img/logo.png ') }}" width="50" height="50" class="d-inline-block align-top" alt="Youth Project"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"> -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home2">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/panduan">Panduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/FAQ">FAQ</a>
                </li>
            </ul>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
    </div>
</nav>

</body>
</html>