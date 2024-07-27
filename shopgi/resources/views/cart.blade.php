@extends('layout')
@section('tile', 'welcome to NTShop')
@section('title2', 'Welcome to NTTNShop')
@section('content')


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
                <h1 class="display-3 text-white mb-3 animated slideInDown">Cart</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Shopping Cart -->
    <div class="shopping-cart section">
        <div class="container">
            <div class="cart-list-head">
                <!-- Cart List Title -->
                <div class="cart-list-title">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-12">

                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <p>Product Name</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Quantity</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Subtotal</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Discount</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <p>Remove</p>
                        </div>
                    </div>
                </div>
                <!-- End Cart List Title -->
                <!-- Cart Single List list -->
                <div class="cart-single-list">
                    @foreach($cart as $id => $details)
                    <div class="row align-items-center cart-item" data-id="{{ $id }}" data-price="{{ $details['price'] }}">
                        <div class="col-lg-1 col-md-1 col-12">
                            @if(!empty($details['img']))
                                <img src="{{ asset('img/' . $details['img']) }}" alt="">
                            @else
                                <img src="{{ asset('img/about-1.jpg') }}" alt="Default Image">
                            @endif
                        </div>
                        <br>
                        <div class="col-lg-4 col-md-3 col-12">
                            <h5 class="product-name"><a href="product-details.html">{{ $details['name'] }}</a></h5>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="count-input">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity-input" min="1">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p class="price">{{ number_format($details['price'], 0, ',', '.') }} $</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p class="total-price">{{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }} $</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <a class="btn btn-danger" href="{{ route('remove.from.cart', $id) }}"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <input name="Coupon" placeholder="Enter Your Coupon">
                                            <div class="button">
                                                <button class="btn">Apply Coupon</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Cart Subtotal<span>{{$total}}</span></li>
                                        <li>Shipping<span>Free</span></li>
                                        
                                    </ul>
                                    <div class="button">
                                        <a href="/checkout" class="btn">Checkout</a>
                                        <a href="/menu" class="btn btn-alt">Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // CSRF token setup for AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
            function calculateTotal() {
                let total = 0;
                let discount = 0;
                $('.cart-item').each(function() {
                    const price = parseFloat($(this).data('price'));
                    const quantity = parseInt($(this).find('.quantity-input').val());
                    const totalPrice = price * quantity;
                    total += totalPrice;
                    discount += totalPrice * 0.1; // Assuming 10% discount for simplicity
                    $(this).find('.total-price').text(totalPrice.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + ' $');
                });
                $('#total').text(total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + ' $');
                $('#discount').text(discount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + ' $');
            }
    
            $('.quantity-input').on('input', function() {
                const cartItem = $(this).closest('.cart-item');
                const id = cartItem.data('id');
                const quantity = $(this).val();
    
                $.ajax({
                    url: '/update-cart',
                    method: 'POST',
                    data: {
                        id: id,
                        quantity: quantity
                    },
                    success: function(response) {
                        // Update the cart totals after a successful AJAX request
                        calculateTotal();
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error:', error);
                    }
                });
            });
    
            // Initial calculation
            calculateTotal();
        });
    </script>
    

@endsection
