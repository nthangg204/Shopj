@extends('layout')
@section('tile', 'welcome to NTShop')
@section('title2', 'Welcome to NTTNShop')
@section('content')
<style>
    body{
        background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/19/6e/ae/22/bistro-restaurant.jpg');

    }
    header .row{
height: 80px;
padding-top: 25px;
background-color: #46694f;
color: white;
font-size: 17px;
}

.logo .row{
background-color:#dff0e2;
padding-top: 20px;
}
.logo .text{
padding-left: 520px;
position: absolute;
color: #46694f;
text-align: center;
font-family:sans-serif;
font-size: 110px;
opacity: 0.08;
font-weight: bold;
}
.logo .text-center{
padding-top: 35px;
padding-bottom: 35px;
color: #46694f;
font-weight: bolder;
font-size: 2.5rem;
font-family:serif;
}
.barsp .col-3{
text-align: center;
}
.spnb .col-3 p{
font-size: 14px;
color:#46694f ;
}
.spnb .col-3 h4{
font-weight: 600;
color: #46694f;
}
.spnb .col-3 h6{
font-weight:700;
}
.spcct h1{
font-family:Palatino Linotype;
font-size: 50px;
font-weight: 600;
color: #46694f;
padding-left: 260px;
padding-bottom: 50px;
}
#pills-tab{
padding-left: 500px;
}
#pills-tab button{
color: white;
background-color: #46694f;
margin-right: 20px;
font-weight: 500;
}
#pills-tab button:hover{
background-color:#90bd9c ;
color: black;
}
.barsp .col-2{
padding-left: 50px;
}
.barsp .col-lg-3 p{
padding-left: 140px;
font-size: 14px;
color:#46694f ;
}
.barsp .col-lg-3 h4{
padding-left: 100px;
font-weight: 600;
color: #46694f;
}
.barsp .col-lg-3 h6{
font-weight:700;
padding-left: 70px;
}
.barsp .col-2 p{
padding-left: 80px;
font-size: 14px;
color:#46694f ;
}
.barsp .col-2 h4{
padding-left: 47px;
font-weight: 600;
color: #46694f;
}
.barsp .col-2 h6{
font-weight:700;
padding-left: 50px;
}
.sale{
background-color: #adc8b3;
padding: 50px 100px;
}
.sale img{
padding: 10px 100px 20px;
}
.sale #card{
background-color: #5cc277;
color:white;    
text-align: center;

}
.sale #card2{
text-align: center;
color:white;
background-color: #378b4d;
}
.sale #card3{
text-align: center;
color:white;
background-color: #125121;
}
.sale #card4{
text-align: center;
color:white;
background-color: #0b3917;
}
.bestsell .col-2 p{
font-size: 14px;
color:#46694f ;
text-align: center;
}
.bestsell .col-2 h4{
font-weight: 600;
text-align: center;
color: #46694f;
}
.bestsell .col-2 h6{
text-align: center;
font-weight:700;
}
.KH h1{
padding: 0 50px 0px ; 
color: white;
font-style:oblique;
}
.KH .ni{
padding: 0 50px 0 50px;
margin-right: 180px;
color: white;
}
a {
text-decoration: none;
color:black;

}
a:hover{
color:#5cc277;
}
.number-input {
display: flex;
align-items: center;
}

.number-input button {
outline: none;
cursor: pointer;
padding: 5px 10px;
border: none;
background: #f1f1f1;
border-radius: 10px;
width: 50px;

}

.number-input button:hover {
background: #ddd;
}

.number-input input[type="number"] {
width: 100px;
text-align: center;
border: 1px solid #ccc;
border-radius: 5px;
margin: 0 10px;
}
.KH .col-7{
color: white;
}
footer{
background-color: rgb(35, 32, 32);
color: white;
}
footer a{
text-decoration: none;
color: white;
}
.spp #bt{
width: 130px;
}
.col-5 .spp p{
font-size: 14px;
color:#46694f ;
}
#wrapper {
min-height: 52.5vh;
display: flex;
justify-content: center;
align-items: center;
}

#form-login {
max-width: 400px;
background: rgba(0, 0, 0, 0.8);
flex-grow: 1;
padding: 30px 30px 40px;
box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
}

.form-heading {
font-size: 25px;
color: #f5f5f5;
text-align: center;
margin-bottom: 30px;
}

.form-group {
border-bottom: 1px solid #fff;
margin-top: 15px;
margin-bottom: 20px;
display: flex;
}

.form-group i {
color: #fff;
font-size: 14px;
padding-top: 5px;
padding-right: 10px;
}

.form-input {
background: transparent;
border: 0;
outline: 0;
color: #f5f5f5;
flex-grow: 1;
}

.form-input::placeholder {
color: #f5f5f5;
}

#eye i {
padding-right: 0;
cursor: pointer;
}

.form-submit {
background: transparent;
border: 1px solid #f5f5f5;
color: #fff;
width: 100%;
text-transform: uppercase;
padding: 6px 10px;
transition: 0.25s ease-in-out;
margin-top: 30px;
}

.form-submit:hover {
border: 1px solid #54a0ff;
}
body {
font-size: 16px;
width: 100%;
height: 100%;
background-repeat: no-repeat;
opacity: 95%;
background-size: 100%;
}

</style>
</head>

    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <title>Restoran - Bootstrap Restaurant Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    
    <body>
                <!-- Navbar & Hero Start -->
                <div class="container-xxl position-relative p-0">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                        <a href="" class="navbar-brand p-0">
                            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                            <!-- <img src="img/logo.png" alt="Logo"> -->
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto py-0 pe-4">
                                <a href="/" class="nav-item nav-link">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Service</a>
                                <a href="menu.html" class="nav-item nav-link active">Menu</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="booking.html" class="dropdown-item">Booking</a>
                                        <a href="team.html" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <a href="login.html" class="btn btn-primary py-2 px-4">Login</a>
                        </div>
                    </nav>
<br><br><br><br><br><br>
                </div>
                <!-- Navbar & Hero End -->
        

                <br>
                <div id="wrapper">
                    <form action="" ng-submit="submitForm()" method="POST" id="form-login">
                        @csrf
                        <h1 class="form-heading">Đăng Ký</h1>
                        <div class="form-group">
                            <i class="far fa-user"></i>
                            <input type="text" id="username" name="name" ng-model="user.username" required class="form-input" placeholder="Tên đăng nhập">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <input type="password" class="form-input" name="password" placeholder="Mật khẩu" id="password" ng-model="user.password" required>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <input type="password" class="form-input" name="repassword" placeholder="Nhập lại mật khẩu" id="password" ng-model="user.password" required>
                        </div>
             
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <input type="email" class="form-input" name="email" placeholder="Nhập Email (Example@gmail.com)" id="email" ng-model="user.email" required>
                            <div id="eye">
                                <i class="far fa-eye"></i>
                            </div>
                        </div>
                        <input type="submit" value="Đăng ký" class="form-submit">
                        @if (Session::has('message'))
                        <div class="alert alert-danger">{{Session::get('message')}}
                        </div>
                        @php
                            Session::forget('message')
                        @endphp
                        @endif
                    </form>
                    
                </div>  
                <br><br><br>
            
        
    </body>

    </html>
@endsection