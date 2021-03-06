@extends('Admin.layouts.app1')
@section('content')
{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
<style>
    @font-face{
        font-family: "yekan";
        src: url(../../../../public/Admin/app-assets/fonts/Yekan.ttf);
    }
    .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    /* font-family: "yekan"; */
    /* font-size: 24px; */
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
.main{
    background-color: white;
}
</style>
<!------ Include the above in your HEAD tag ---------->
<br><br>
<div>

</div>
<div class="container main">
<h1 class="text-center ">جدول محصولات</h1>

    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
        <br>
        <br>
    <a href="{{route("admin.product.create")}}" class="btn btn-primary  pull-right py-3"><b>+</b> Add new product</a>
    <br>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Num</th>
            <th>Image</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

    @foreach($products as $product)


    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->num}}</td>
        {{-- <td>{{isset($product->Images[0]->imagename) ? $product->Images[0]->imagename : null }}</td> --}}

        <td>
    @foreach($product->Images as $image)
    {{-- {{isset($image->imagename) ? $image->imagename : 'Default' }} --}}
    <img src="{{isset($image->imagename) ? $image->imagename : null }}" alt="" style="width:70px;height:70px;">
    @endforeach
</td>


        {{-- <td>{{ $product->Images->imagename or 'Default' }}</td> --}}
        <td class="text-center"><a class='btn btn-info btn-xs' href="{{url('admin/product/'.$product->id.'/edit')}}"> Edit</a>
            {{-- <a href="{{ route('admin.product.destroy' , $product->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a> --}}
            {{-- <br> --}}
            {{-- {{ Form::open(array('route' => array('admin.product.destroy', $product->id), 'method' => 'delete')) }}
    <button type="submit" class="btn btn-xs btn-danger " >Delete</button>
{{ Form::close() }} --}}




            <form action="{{ route('admin.product.destroy', [$product->id]) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </span><input type="submit" class="btn btn-xs btn-danger " value="Delete">
                </form>
        </td>
    </tr>

    @endforeach
            {{-- <tr>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Products</td>
                <td>Main Products</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr> --}}
    </table>
    </div>
</div>

@endsection
