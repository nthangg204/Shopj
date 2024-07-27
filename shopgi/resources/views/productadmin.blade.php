@extends('layoutadmin')

@section('content')
<link rel="stylesheet" href="css/styleadmin.css">
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
<br>
<br>
<br>
<div class="container">
    <div class="col3">
        <h3>Thêm Mới Sản Phẩm</h3>
        <form action="{{ route('productupdate') }}" method="post" enctype="multipart/form-data">
            @csrf
            <select name="category_id" id="">
                <option value="0" selected>Chọn danh mục</option>
                @foreach ($categories as $item)
                    @if ($item->id == $product->category_id)
                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endif
                @endforeach
            </select>
            <br><br>
            <div class="form-group">
                <input class="form-control" type="text" value="{{ $product->name }}" placeholder="Tên Sản Phẩm" name="name" id="name">
                <input type="text" class="form-control" value="{{ $product->price }}" name="price" id="price" placeholder="Giá">
                <input class="form-control" type="file" name="img" id="img"> 
                <img src="{{ asset('storage/img/' . $product->img) }}" alt="">
                <input class="form-control" type="text" name="quantity" placeholder="Số Lượng" value="{{ $product->quantity }}">
                <textarea name="description" style="width: 100%" rows="5">{{ $product->description }}</textarea>
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input class="form-control bg-dark" type="submit" value="Cập nhật">
            </div>
        </form>
        
    </div>
    
    <div class="col9">
        <h2>Danh Sách Sản Phẩm</h2>
        <table class="table-boder text-black text-center">
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Danh mục</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Lượt bán</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $sp)
                <tr>
                    <td>{{$sp->id}}</td>
                    <td><img src="{{asset('/')}}img/{{$sp->img}}" alt=""></td>
                    <td>{{$sp->name}}</td>
                    <td><option>{{$sp->categories->name}}</option></td>
                    <td><b>{{number_format($sp->price)}}₫</b></td>  
                    <td>{{$sp->quantity}}</td>
                    <td>10</td>
                    <td class="action-icons mt-4">
                        <a href="{{route('productupdateform',$sp->id)}}"><i class="fas fa-edit"></i></a>
                        <a href="{{route('productdelete',$sp->id)}}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach

                <!-- Các hàng khác -->
            </tbody>
        </table>

            <div class="pagination justify-content-center mt-4">
                {{$products->links('')}}
            </div>
    </div>
    
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection