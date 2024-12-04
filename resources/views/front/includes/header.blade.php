<!doctype html>
<html class="no-js" lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Robert and Reynolds Consulting - Website</title>
      <meta name="robots" content="noindex, follow" />
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/front/images/fevicon.png">
      <!-- CSS
         ============================================ -->
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/bootstrap.min.css">
      <!-- Fontawesome -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/fontawesome.css">
      <!-- Flaticon -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/flaticon.css">
      <!-- optico Icons -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/pbminfotech-base-icons.css">
      <!-- Themify Icons -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/themify-icons.css">
      <!-- Slick -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/swiper.min.css">
      <!-- Magnific -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/magnific-popup.css">
      <!-- AOS -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/aos.css">
      <!-- Shortcode CSS -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/shortcode.css">
      <!-- Base CSS -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/base.css">
      <!-- root CSS -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/demo-1.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ url('/') }}/front/css/responsive.css">
      <!-- REVOLUTION STYLE SHEETS -->
      <link rel="stylesheet" type="text/css" href="{{ url('/') }}/front/revolution/rs6.css">
      
<style>
div.pbmit-ihbox.pbmit-ihbox-style-12::before {
    display: none;
}
rs-bullets.tp-bullets.hermes.vertical.nav-pos-hor-right.nav-pos-ver-center.nav-dir-vertical{
    display: none;    
}

.topnav-right {
  float: right;
}


</style>      

   </head>
   <body>
      <!-- page wrapper -->
      <div class="page-wrapper">

         <!-- Header Main Area -->
         <header class="site-header header-style-1">
            <div class="header-wrapper">
               <div class="site-header-menu">
                  <div class="container-fluid">
                     <div class="row g-0">
                        <div class="col-md-12">
                           <div class="d-flex align-items-center">
                              <div class="site-branding">
                                 <a href="{{ route('index') }}">
                                    <img class="logo-img" alt="Emphires" src="{{ url('/') }}/front/images/header/logo-white.png" />
                                    <img class="sticky-logo" alt="Emphires" src="{{ url('/') }}/front/images/header/logo-black-3.png" />
                                 </a>
                              </div>
                              <div class="site-navigation">
                                 <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                       <!-- Toggle Button --> 
                                       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                          <i class="pbmit-base-icon-menu-1"></i>
                                       </button>
                                    </div>
                                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                       <ul class="navigation clearfix">
                                          <li class="dropdown {{ (Route::currentRouteName() == 'index') ? 'active' : '' }}" href="{{ route('index') }}">
                                             <a href="{{ route('index') }}">Home</a>
                                          </li>
                                          <li class="dropdown {{ (Route::currentRouteName() == 'about') ? 'active' : '' }}" href="{{ route('about') }}">
                                             <a href="{{ route('about') }}">About Us</a>
                                          </li>
                                          <li class="dropdown {{ (Route::currentRouteName() == 'services.consultancy') ? 'active' : '' }}" href="{{ route('services.consultancy') }}">
                                                <a href="{{ route('services.index')}}">Services</a>
                                            <ul>
                                                <li><a href="{{ route('services.consultancy') }}">Consultancy & Advisory</a></li>

                                                <li class="dropdown {{ (Route::currentRouteName() == 'services.solution') ? 'active' : '' }}" href="{{ route('services.solution') }}">
                                                    <a href="#">People Solutions</a>
                                                <ul>
                                                        <li><a href="{{ route('services.talent') }}">Talent Development</a></li>
                                                        <li><a href="{{ route('services.training') }}">Training & Learning</a></li>
                                                </ul>                                            
                                                </li>
                                                
                                                <li class="dropdown {{ (Route::currentRouteName() == 'services.solution') ? 'active' : '' }}" href="{{ route('services.solution') }}">
                                                    <a href="#">Process Solutions</a>
                                                <ul>
                                                        <li><a href="{{ route('services.process') }}">Process Outsourcing</a></li>
                                                        <li><a href="{{ route('services.business') }}">Business Process Outsourcing</a></li>
                                                </ul>                                            
                                                </li>
                                                <li class="dropdown {{ (Route::currentRouteName() == 'services.organization') ? 'active' : '' }}" href="{{ route('services.organization') }}">
                                                    <a href="#">Organization Transformation</a>
                                                <ul>
                                                        <li><a href="{{ route('services.organization') }}">Organization Structure and Redesign</a></li>
                                                        <li><a href="{{ route('services.performance') }}">Performance Management</a></li>
                                                </ul> 
                                                </li>
                                                <li><a href="{{ route('services.industrial') }}">Industrial Relations</a></li>
                                                <li class="dropdown {{ (Route::currentRouteName() == 'services.mainstreaming') ? 'active' : '' }}" href="{{ route('services.mainstreaming') }}">
                                                    <a href="#">Diversity & Inclusion</a>
                                                <ul>
                                                        <li><a href="{{ route('services.mainstreaming') }}">Gender Mainstreaming</a></li>
                                                        <li><a href="{{ route('services.equality') }}">Gender Equality</a></li>
                                                </ul>
                                             </ul>
                                          </li>
                                          </li>
                                          <li class="dropdown {{ (Route::currentRouteName() == 'recruitment') ? 'active' : '' }}" href="{{ route('recruitment') }}">
                                             <a href="{{ route('recruitment') }}">Recruitment</a>
                                          </li>
                                          <li class="dropdown {{ (Route::currentRouteName() == 'stories') ? 'active' : '' }}" href="{{ route('stories') }}">
                                             <a href="{{ route('stories') }}">Our Stories</a>
                                          </li>
                                           
                                       </ul>
                                    </div>
                                 </nav>
                              </div>
                              <div class="site-contact">
                                 <a href="{{ route('contact') }}" class="btn btn-primary">
                                    CONTACT US
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>