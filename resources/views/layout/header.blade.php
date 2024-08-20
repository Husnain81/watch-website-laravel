<meta charset="utf-8">
<title>WATCH - Store</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Product Landing Page" name="keywords">
<meta content="Product Landing Page" name="description">

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400|Quicksand:500,600,700&display=swap" rel="stylesheet">

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
 

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Your Page Title</title>
     <!-- Include Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
 <body>
     <nav class="navbar navbar-expand-lg navbar-dark">
         <div class="container">
             <div id="logo" class="pull-left">
                 <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="Logo" /></a>
             </div>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="{{ route('home') }}">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('products') }}">Products</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('about') }}">About</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#testimonials">Reviews</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('cart') }}">Cart</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 
     <!-- Include Bootstrap JS and jQuery scripts here -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
 </html>
 

