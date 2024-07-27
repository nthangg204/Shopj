@extends('layoutadmin')

@section('content')
<link rel="stylesheet" href="{{asset('/')}}css/styleadmin.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    {{-- admin --}}
    <link rel="stylesheet" href="styleadmmin.css">
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
<nav>
    <ul>
        <li><a href="/admin">Trang Chủ</a></li>
        <li><a href="/productadmin">Sản phẩm</a></li>
        <li><a href="/users">Người dùng</a></li>
        <li><a href="/updateProduct">Form Cập nhật</a></li>
    </ul>
</nav>

<div class="container">
    <div class="grid" >
        <div class="card">
            <h2>Doanh số bán hàng</h2>
            <canvas id="salesChart" width="400" height="200"></canvas>
        </div>
        <div class="card">
            <h2>Đơn hàng mới</h2>
            <p>100</p>
        </div>
        <div class="card">
            <h2>Sản phẩm bán chạy</h2>
            <p>50</p>
        </div>
    </div>
    <div class="grid" >
        <div class="card">
            <h2>Danh sách sản phẩm</h2>
            
        </div>
        <div class="card">
            <h2>Bình luận</h2>
            <p>100</p>
        </div>
        <div class="card">
            <h2>Khách hàng mới</h2>
            <p>50</p>
        </div>
    </div>
</div>

<script>
    // Dữ liệu mẫu cho biểu đồ
    const salesData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Sales',
            data: [1000, 1500, 1200, 1800, 2000, 1700],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Lấy thẻ canvas và vẽ biểu đồ doanh số
    const salesChartCanvas = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(salesChartCanvas, {
        type: 'line',
        data: salesData,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

@endsection