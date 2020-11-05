@extends('layout.app')
@section('content')

<div class="container-fluid">
	<section id="header" class="cartdesktopview">
		<div class="row">
			<div class="col-md-12">
				<h3>My Shopping Cart<i class="fa fa-cart-plus"></i></h3>
			</div>
			
		</div>
    </section>
	<table class="table table-bordered table-stripped cartdesktopview">
	<thead>
		<th>#</th>
	    <th>Products Image</th>
		<th>Products Name</th>
		<th>Products Description</th>
		<th>Products Price</th>
		<th>Remove</th>
		</thead>
	</thead>
	<tbody>
	 @if(count($cart))
	 <?php $a = 0; ?>
    @foreach($cart as $product)
    <?php $a += 1; ?>
    <tr>
    	<td><?php echo $a; ?></td>
		<td><img class="img" src="/storage/product_images/{{$product->productsimage}}"></td>
		<td>{{$product->productsname}}</td>
		<td>{{$product->productsdescription}}</td>
		<td>{{$product->productsleastprice}}</td>
		<td><button style="margin: 1px;"><i class="fa fa-trash-o" style="color:red;margin: 1px;padding:1px "></i></button></td>
		</tr>
    @endforeach
    @endif
    </tbody>
</table>
<section class="cartmobileview">
         <h5>My Shopping Cart<i class="fa fa-cart-plus"></i></h5>
    </section>
<section id="mainproducts" class="cartmobileview">
<div class="row">
	@php
	if(count($cart)){
	 $a = 0;
    foreach($cart as $product){
    if($product->productsuser_id) == Auth::user()->id)
     $a += 1;
	<div class="col-md-2 col-xs-6 productdiv" >
    <div class="div">
        <div class="divimg">
            <div class="row">
            <div><i class="fa fa-heart">0</i></div>
            <div class="col">3% OFF</div>
            </div>
<img class="center" src="/storage/product_images/{{$product->productsimage}}">
    </div>
  
<div class="divfooter">
<p class="p"><b>{{$product->productsname}}
</b></p>
<p class="p"><b>{{$product->productsdescription}}
</b></p>
<p class="p"><b>{{$product->productsleastprice}}</b></p>
<div class="row">
</div>
</div>
</a>
</div>
</div>
   }
   }
}
    @php
</div>
</section>
 <div class="row">
 	{!! Form::open(['method'=>'Post', 'action'=>'CartsController@checkout']) !!}
 	<input type="hidden" name="productsname" value="{{$product->productsname}}">
<input type="hidden" name="productsdescription" value="{{$product->productsdescription}}">
<input type="hidden" name="productsleastprice" value="{{$product->productsleastprice}}">
<input type="hidden" name="productsvendor" value="{{$product->productsvendor}}">
<input type="hidden" name="productsimage" value="{{$product->productsimage}}">
<input type="hidden" name="productsuser_id" value="{{$product->productsuser_id}}">
<input type="hidden" name="productsvendor" value="{{$product->productsvendor}}">

				<a href="checkout"><button class="btn btn-success">Proceed To Checkout</button></a>
				{!! Form::close() !!}
				<a href="/" ><button class="btn btn-primary">Continue Shopping</button></a>
			</div>
</div>

@endsection('content')