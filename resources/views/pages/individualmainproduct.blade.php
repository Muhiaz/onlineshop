@extends('layout.app')
@section('content')
   <div class="container-fluid individualproduct">
    <section id="header1">
       <div class="row">
           <div class="col-md-4">
             <img class="individualimg" src="/storage/product_images/{{$posts->productsimage}}">  
           </div>
           <div class="col-md-4 individualdetails">
            <h3>Product Details</h3>
              <b><div class="row p">Product Name:<p class="p">{{$posts->productsname}}
</b></p></div>
<b><div class="row p">Product Description:<p class="p">{{$posts->productsdescription}}
</b></p></div>
<b><div class="row p">Product Price:<p class="p">{{$posts->productsleastprice}}</b></p></div>
<b><div class="row p">Products Vendor:<p>{{$posts->productsvendor}}</b></p></div>
<p class="p">
    <a href="#" title="Add to Cart"><i class="fa fa-cart-plus otherfa"></i></a>
    <a href="#" title="Like"><i class="fa fa-heart otherfa"></i></a>
    <a href="#" title="View"t><i class="fa fa-arrows otherfa" aria-hidden="true"></i></a>
    <a href="#" title="Compare"><i class="fa fa-circle-o-notch otherfa" aria-hidden="true"></i></a>
</p>
{!! Form::open(['action'=>'CartsController@store','method'=>'Post']) !!}
<input type="hidden" name="productsname" value="{{$posts->productsname}}">
<input type="hidden" name="productsdescription" value="{{$posts->productsdescription}}">
<input type="hidden" name="productsleastprice" value="{{$posts->productsleastprice}}">
<input type="hidden" name="productsvendor" value="{{$posts->productsvendor}}">
<input type="hidden" name="productsimage" value="{{$posts->productsimage}}">
<button class="btn btn-warning btn-block cart">Add To Cart <i class="fa fa-cart-plus otherfa"></i></button>
{!! Form::close() !!}
       </div>
   </div>
  </div>
</div>
       </section>
<br class="br">
<section id="header">
         <h3>Related Products</h3>
    </section>
    <section id="agriculturalproducts">
    <div class="row" style="position: relative;">
    @if(count($all))
    @foreach($all as $product)
<div class="col-md-2 col-xs-6 productdiv" >
    <div class="div">
        <div  class="divimg">
            <div class="row">
            <div><i class="fa fa-heart">0</i></div>
            <div class="col">3% OFF</div>
            </div>
<a href="individualagriculturalproduct/{{$product->id}}"><img  class="center" src="/storage/product_images/{{$product->productsimage}}">
    </div>
<div class="divfooter">
<p class="p"><b>{{$product->productsname}}
</b></p>
<p class="p"><b>{{$product->productsdescription}}
</b></p>
<p class="p"><b>{{$product->productsleastprice}}</b></p>
<div class="row" style="margin-left:0px;">
<p class="p">
    <a href="#" title="Add to Cart"><i class="fa fa-cart-plus otherfa"></i></a>
    <a href="#" title="Like"><i class="fa fa-heart otherfa"></i></a>
    <a href="#" title="View"><i class="fa fa-arrows otherfa" aria-hidden="true"></i></a>
    <a href="#" title="Compare"><i class="fa fa-circle-o-notch otherfa" aria-hidden="true"></i></a>
</p>
</div>
</div>
</a>
</div>
</div>
    @endforeach
    @endif
    </div>
    <button class="btn  btn-success btn-block load">Load More For This Category</button>
    </section>
   </div>
  

  
@endsection


 