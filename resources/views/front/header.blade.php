<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php if(isset($data)){ echo $data->meta_title; } else {
      echo "Yantra Homes";
    }?>
    </title>
    <meta name="description" content="<?php if(isset($data)){ echo $data->meta_description; } else {
      echo "Yantra Homes";
    }?>" />
    <link rel="shortcut icon" href="{{asset('assets/images/staticpages/yantrahomes.ico')}}" />
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/dipicons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/select2-bootstrap-5-theme.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/nsima.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nsima.css')}}" rel="stylesheet">
    <style>
      h3{ font-weight:bold}
    </style>  

  </head>
  <body>
    <!--=========================
    =            Nav            =
    ==========================-->
    
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{route('landing_page')}}"><img src="{{asset('assets/images/logo.png')}}"></a>
        <div class="dp-main-nav">
          <ul class="navbar-nav ms-auto d-flex d-lg-none dp-mobile-menu">     
            <li class="nav-item">
              <a class="nav-link dp-login-btn dp-blue-link" href="javascript:void()" onclick="showlogin()"><i class="dpicon-login"></i> Login<span class="d-none d-md-inline">/Register</span></a>
            </li>            
            <li class="nav-item dp-nav-listing-btn d-none d-md-block">
              <a class="nav-link dp-listing-btn dp-yellow-nav-btn" href="{{route('add_listing')}}"><i class="dpicon-home"></i> Add Listing</a>
            </li>            
            <li class="nav-item dp-bg-btn">
              <a class="nav-link" href="https://www.yantrahomes.com">BG</a>
            </li>            
          </ul> 
          <button class="navbar-toggler collapsed dp-navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#dp-main-nav" aria-controls="dp-main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar"></span>
            <span class="navbar-toggler-bar"></span>
            <span class="navbar-toggler-bar"></span>
          </button>
        </div>
        
        <div class="offcanvas offcanvas-start navbar-collapse dp-main-nav" id="dp-main-nav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('landing_page')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)" onclick="toggleDropdown('about-dropdown')">About</a>
              <div  id="about-dropdown" class="navbar-dropdown-content">
                <a href="{{route('about_us')}}">About Us</a>
                <a href="{{route('about_veliko_tarnova')}}">About Veliko Tarnovo</a>
                <a href="{{route('customer-service')}}">About Our Customer Service</a>
                <a href="{{route('about_bulgaria')}}">About Bulgaria</a>
                <a href="{{route('bulgaria_history')}}">History in Bulgaria</a>
                <a href="{{route('bulgarian_holidays')}}">Holidays in Bulgaria</a>
                <a href="{{route('about_agents')}}">About Our Agents</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)" onclick="toggleDropdown('guides-dropdown')">Free Guides</a>
              <div id="guides-dropdown" class="navbar-dropdown-content">
                <a href="{{route('buying_property_in_bulgaria')}}">Buying Property in Bulgaria</a>
                <a href="{{route('selling_property_bulgaria')}}">Selling Property in Bulgaria</a>
                <a href="{{route('move_to_bulgaria')}}">Moving to Bulgaria</a>
                <a href="{{route('bulgarian_pets')}}">Moving to Bulgaria with pets</a>
                <a href="{{route('bulgarian_visas')}}">Visas for Bulgaria</a>
                <a href="{{route('health_in_bulgaria')}}">Health in Bulgaria</a>
                <a href="{{route('bulgaria_services')}}">Connecting to Essential Services</a>
                <a href="{{route('school_in_vt')}}">Going to School in VT</a>
                <a href="{{route('bulgarian_language')}}">Bulgarian Language & Alphabet</a>
                <a href="https://vt-today.com/cost-of-living-in-bulgaria/" target="_blank">Cost of living in Bulgaria</a>
              </div>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)" onclick="toggleDropdown('services-dropdown')">Services</a>
              <div id="services-dropdown" class="navbar-dropdown-content">
                <a href="{{route('buy_bulgarian_property')}}">For Property Buyers</a>
                <a href="{{route('sell_property_bulgaria')}}">For Property Sellers</a>
                <a href="{{route('bulgarian_property_auctions')}}">At Property Auctions</a>
              </div>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact_us')}}">Contact</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="{{route('faq')}}">FAQs</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link dp-login-btn dp-blue-link" href="javascript:void()" onclick="showlogin()"><i class="dpicon-login"></i> Login/Register</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link dp-listing-btn dp-yellow-nav-btn" href="{{route('add_listing')}}"><i class="dpicon-home"></i> Add Listing</a>
            </li>            
            <li class="nav-item dp-bg-btn">
              <a class="nav-link" href="https://www.yantrahomes.com">BG</a>
            </li>            
          </ul>          
        </div>
      </div>
    </nav>
    
    <!--====  End of Nav  ====-->

   