@extends('layout')
@section('tile', 'welcome to NTShop')
@section('title2', 'Welcome to NTTNShop')
@section('content')

<body>
    <style>
        .navbar-dark {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: transparent !important;
    }
    </style>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


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
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/menu" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="/booking" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Booking</a>
                            <div class="dropdown-menu m-0">
                                <a href="/team" class="dropdown-item">Our Team</a>
                                <a href="/testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                    <a href="/cart" class="nav-item nav-link text-white"><i class="fa-solid fa-cart-shopping"></i> CART</a>
    
                    </div>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0 pe-4">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/menu" class="nav-item nav-link">Menu</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0">
                                    <a href="/booking" class="dropdown-item">Booking</a>
                                    <a href="/team" class="dropdown-item">Our Team</a>
                                    <a href="/testimonial" class="dropdown-item">Testimonial</a>
                                </div>
                            </div>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        <a href="/cart" class="nav-item nav-link text-white">CART</a>
                        </div>
                        <div class="header__top__right__auth">
                            @if(!Auth::check())
                            <a href="/login"><i class="fa fa-user"></i> Đăng nhập</a>
                        </div>
                        @else 
                        <!-- User Profile and Logout -->
                        <div class="header__top__right__user">
                            <div class="user-name">{{Auth::user()->name}}</div>
                            <span class="arrow_carrot-down"></span>
                            <ul class="dropdown-menu">
                                <li><a href="/profile">Profile</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </div>
                        @endif
                        </div>
                    </div>
            </nav>
    
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
<!-- Start Item Details -->
<section class="item-details section">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-images">
                        <main id="gallery">
                            <div class="main-img">
                                <img src="{{asset('img/')}}/{{$sp->img}}" id="current" alt="#">
                            </div>

                        </main>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-info">
                        <h2 class="title">{{$sp->name}}</h2>
                        <p class="category"> Category:<a href="javascript:void(0)">{{$sp->categories->name}}</a></p>
                        <h3 class="price">{{$sp->price}}$
                        <p class="info-text">{{$sp->description}}</p>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group color-option">
                                    <label class="title-label" for="size">Choose color</label>
                                    <div class="single-checkbox checkbox-style-1">
                                        <input type="checkbox" id="checkbox-1" checked>
                                        <label for="checkbox-1"><span></span></label>
                                    </div>
                                    <div class="single-checkbox checkbox-style-2">
                                        <input type="checkbox" id="checkbox-2">
                                        <label for="checkbox-2"><span></span></label>
                                    </div>
                                    <div class="single-checkbox checkbox-style-3">
                                        <input type="checkbox" id="checkbox-3">
                                            <label for="checkbox-3"><span></span></label>
                                        </div>
                                        <div class="single-checkbox checkbox-style-4">
                                            <input type="checkbox" id="checkbox-4">
                                            <label for="checkbox-4"><span></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="color">Phần ăn</label>
                                        <select class="form-control" id="color">
                                            <option>Nhỏ</option>
                                            <option>Vừa</option>
                                            <option>Lớn</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group quantity">
                                        <label for="color">Số lượng</label>
                                        <input type="number" value="1" class="form-control" name="" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="row align-items-end">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="button cart-button">
                                            <a href="{{route('add.to.cart', $sp->id)}}" class="btn" style="width: 100%; padding-top:12px;">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="wish-button">
                                            <button class="btn"> Compare</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="wish-button">
                                            <button class="btn"> To Wishlist</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-info">
                <div class="single-block">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Chi tiết</h4>
                                <p>{{$sp->description}}</p>
                                <h4>Đặc trưng</h4>
                                <ul class="features">
                                    <li>Mang đậm nét sang trọng qua từng món ăn</li>
                                    <li>Đầy đủ chất dinh dưỡng</li>
                                    <li>Được chế biến từ những đầu bếp hàng đầu</li>
                                    <li>Chất lượng đồ ăn an toàn đã qua kiểm chứng</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="info-body">
                                <h4>Thông tin đầy đủ</h4>
                                <ul class="normal-list">
                                    <li><span>Calo:</span> 4000 calo</li>
                                    <li><span>Dành cho tối thiểu:</span> 2 người</li>
                                    <li><span>Dành cho tối đa:</span> 6 người</li>
                                    
                                </ul>
                                <h4>Lựa chọn hình thức giao hàng:</h4>
                                <ul class="normal-list">
                                    <li><span>Trong vòng 10km trở lại:</span> 30' -> 1g, 20,000₫</li>
                                    <li><span>10km trở đi:</span> 1h -> 2h tùy địa chỉ, 40,000₫ </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Item Details -->

    <!-- Review Modal -->
    <div class="modal fade review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-name">Your Name</label>
                                <input class="form-control" type="text" id="review-name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-email">Your Email</label>
                                <input class="form-control" type="email" id="review-email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-subject">Subject</label>
                                <input class="form-control" type="text" id="review-subject" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-rating">Rating</label>
                                <select class="form-control" id="review-rating">
                                    <option>5 Stars</option>
                                    <option>4 Stars</option>
                                    <option>3 Stars</option>
                                    <option>2 Stars</option>
                                    <option>1 Star</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="review-message">Review</label>
                        <textarea class="form-control" id="review-message" rows="8" required></textarea>
                    </div>
                </div>
                <div class="modal-footer button">
                    <button type="button" class="btn">Submit Review</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Review Modal -->

@endsection 