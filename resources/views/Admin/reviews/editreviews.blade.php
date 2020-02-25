
@extends('Admin.layouts.app1')
@section('content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    /*    --------------------------------------------------
	:: Login Section
	-------------------------------------------------- */
#login {
    padding-top: 50px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login h1 {
    /* color: #1fa67b; */
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 25px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\e013';
    /* color: #1fa67b; */
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ccc;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #6d6d6d;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
	margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
	text-align: center;
	display: block;
}

/*    --------------------------------------------------
	:: Inputs & Buttons
	-------------------------------------------------- */
.form-control {
    color: #212121;
}
.btn-custom {
    /* color: #fff; */
	background-color: #1fa67b;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #fff;
}

/*    --------------------------------------------------
    :: Footer
	-------------------------------------------------- */
#footer {
    color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
#footer p {
    margin-bottom: 0;
}
#footer a {
    color: inherit;
}
.main{
    background-color: white;
}
</style>
<!------ Include the above in your HEAD tag ---------->

<section id="login"   class="main">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Edit Comments</h1>
                    <form role="form" action="{{url('admin/reviews/'.$comment->id)}}" method="post" id="login-form" autocomplete="off" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="email" class="sr-only">Id</label>
                            <p>Id</p><input type="text" name="id"  class="form-control" placeholder="{{$comment->id}}" value="{{$comment->id}}">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <p>comment</p><input type="text" name="description"  class="form-control" placeholder="{{$comment->description}}" value="{{$comment->description}}">
                        </div>
                        {{-- <div class="form-group"> --}}
                                {{-- <label for="key" class="sr-only">Password</label> --}}
                                {{-- <p>Price</p><input type="text"  name="price"  class="form-control" placeholder="{{$product->price}}" value="{{$product->price}}"> --}}
                        {{-- </div> --}}
                        {{-- <div class="form-group"> --}}
                                    {{-- <label for="key" class="sr-only">Password</label> --}}
                                    {{-- <p>Number</p><input type="text"  name="num"  class="form-control" placeholder="{{$product->num}}" value="{{$product->num}}"> --}}
                                {{-- </div> --}}
                        {{-- <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <p>Image</p><input type="file" name="imagefile"  class="form-control" >
                        </div> --}}
                        <div class="form-group">
                                <label for="key" class="sr-only">Password</label>
                            <p>product name</p><select name="kala" id="" class="form-control">
                                @foreach($products as $product)
                                <option value="{{$product->id}}"
                                    @if($product->name==$comment->kala->name)selected="selected"@endif>{{$product->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                                <label for="key" class="sr-only">Password</label>
                            <p>User name</p><select name="user" id="" class="form-control">
                                @foreach($users as $user)
                                <option value="{{$user->id}}"
                                    @if($user->name==$comment->users->name)selected="selected"@endif>{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="submit" id="btn-login" class="btn btn-primary btn-lg btn-block" value="Edit">
                    </form>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p>Type your email account</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-custom">Recovery</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

@endsection


