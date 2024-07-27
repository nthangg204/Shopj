@extends('layoutadmin')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <h3>Cập Nhật Sản Phẩm</h3>
        <form action="{{route('productupdate')}}" method="post" enctype="multipart/form-data">
            @csrf
            <select name="category_id" id="">
                <option value="0" selected>Chọn danh mục</option>
                @foreach ($categories as $item)
                    @if ($item->id==$product->category_id)
                        <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                @endforeach
            </select>
            <br><br>
            <div class="form-group">
                <input class="form-control" type="text" value="{{$product->name}}" placeholder="Tên Sản Phẩm" name="name" id="name" >
                <input  type="text" class="form-control" value="{{$product->price}}" name="price" id="price"  placeholder="Giá">
                <input class="form-control" type="file" name="img" id="img" > 
                <img src="{{asset('/')}}img/{{$product->img}}" alt="">
                <input class="form-control" type="text" name="quantity" placeholder="Số Lượng" value="{{$product->quantity}}">
                <textarea name="description" style="width: 100%" rows="5">{{$product->description}}</textarea>
                <input type="hidden" name="id" value="{{$product->id}}">
                <input class="form-control bg-dark"  type="submit" value="Cập nhật">
            </div>
        </form>
    </div>
    
    <div class="col9">
        <h2>Danh Sách Sản Phẩm</h2>
        <table class="table-border text-black">
            <thead>
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
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
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