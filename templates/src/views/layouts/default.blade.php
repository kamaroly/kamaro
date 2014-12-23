<!DOCTYPE html>
<html class="no-js">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Web Application</title>
 <meta name="description" content="Responsive Admin Web App">
 <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <!-- Needs images, font... therefore can not be part of main.css -->
   {{ HTML::style('packages/kamaro/templates/css/themify-icons.min.css') }}
       <!-- end Needs images -->
   {{ HTML::style('packages/kamaro/templates/css/main.css') }}
</head>
    <body  class="app ng-scope" >
        <!--[if lt IE 9]>
            <div class="lt-ie9-bg">
                <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
                <p>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            </div>
        <![endif]-->
<section    id="header" class="header-container header-fixed bg-white" >
 @include('templates::partials.headnav')                
</section>
<div class="main-container">
      <!-- Left nav -->
    @include('templates::partials.leftnav')
    
    @yield('modulemenu')
     <div id="content" class="content-container">
        <div class="page page-dashboard" >
       <section class="panel panel-default">
        <div class="panel-body">
            @yield('content')
        </div>
    </section>
     </div>
    </div>

 </div>
 </div>


</body>
</html>