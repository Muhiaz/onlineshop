@extends('layout.app')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-4" style="background-color: #fff;">
	<img src="/storage/product_images/{{$posts->product_image}}" style="margin: auto;">
	<button  class="btn btn-block btn-warning"><i  class="fa fa-cart-plus"></i>Add to Cart</button>
</div>
<div class="col-md-4" style="padding: 20px;background-color: #fff;margin: 0px 5px 0px 10px;">
	<div style="float: left;">
		<span>Product Name: </span><h4>{{$posts->name}}</h4>
        <span>Product Description: </span><h4>{{$posts->description}}</h4>
        <span style="color:blue; ">Product Price: </span><h4 style="color:blue; ">{{$posts->price}}</h4>
        <span style="color:red; ">Product Discount: </span><h4 style="color:red; ">{{$posts->discount}}</h4>
	</div>	
</div>
<div class="col-md-3" style="padding: 20px;background-color: #fff;margin: 0px 0px 0px 5px;">
	<div style="float: left;">
		<span>Product Name: </span><h4>{{$posts->name}}</h4>
        <span>Product Description: </span><h4>{{$posts->description}}</h4>
        <span style="color:blue; ">Product Price: </span><h4 style="color:blue; ">{{$posts->price}}</h4>
        <span style="color:red; ">Product Discount: </span><h4 style="color:red; ">{{$posts->discount}}
	</div>	
</div>
</div>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12" style="background-color: #fff;padding: 20px;">
	<p></p>
	<img  style="width: 80px;height: 80px;margin: 5px;" src="/storage/product_images/download (2).png">
	<h5>To Pay via M-Pesa:</h5>
	<p>1). Go to the M-Pesa Menu on your phone</p>
	<p>2). Select Lipa na M-Pesa on the M-Pesa Menu</p>
	<p>3). Select Buy goods and service </p>
	<p>4). Enter the Till No 1000</p>
	<p>4). Enter the total Amount for the No 1000</p>
</div>
</div>
</div>
@endsection




