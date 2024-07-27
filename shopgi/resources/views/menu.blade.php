@extends('layout')
@section('tile', 'welcome to NTShop')
@section('title2', 'Welcome to NTTNShop')
@section('content')
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

    <br>
    <!-- Menu Start -->
    <div class="position-absolute top-10 start-50 translate-middle">
    <h2>Tìm Kiếm Sản Phẩm</h2>
            <form action="{{ route('search') }}" method="GET">
                <input class="btn btn-outline-dark"  type="text" name="query" placeholder="Tìm kiếm sản phẩm">
                <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
            </form>
    </div>
    <br>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu Thức Ăn</h5>
                <h1 class="mb-5">Most Popular Items</h1>
                <h2 class="text-warning">Danh mục</h2>

            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-bar d-inline-flex mb-5">
                    @foreach ($categories as $item)
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <div class="ps-3">
                                <a href="{{ route('categories',$item->id)}}"><h6  class="text-danger" class="mt-n1 mb-0">{{$item->name}}</h6></a>
                                
                            </div>
                        </a>
                    </li>
                    @endforeach
                   
                </ul>
                <div>
                    <div  class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($products as $sp)
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <div class="position-relative image-container">
                                        <!-- Container for the image and the icon -->
                                        <a href="{{route('add.to.cart', $sp->id)}}">
                                        <img class="flex-shrink-0 img-fluid rounded product-image" src="{{asset('/')}}img/{{$sp -> img}}" alt="" style="width: 80px;">
                                        <!-- Shopping cart icon as a button -->
                                        <button type="button" class="cart-icon"class="product_id">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </a>
                                    </div>
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <a class="product_name" href="{{route('detail', $sp->id)}}">{{$sp -> name}}</a>
                                            <span class="product_price" class="text-primary">{{ number_format($sp->price, 0, ',', '.') }} VNĐ</span>
                                        </h5>
                                        <small class="fst-italic">{{$sp -> description}}</small>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <nav class="mt-4">
        <ul class="pagination justify-content-center">
            {{$products->links('')}}
        </ul>
    </nav>
@endsection
