@extends('layout.app')
@section('content')
<section id="top" onload="slideA()">
    <div>
              <img id="image" src="/storage/Images/image1.png">  
            </div>
            <div class="">
                <div class="right1">
                    <i class="fa fa-caret-right" onclick="slide(1)" id="right1" style="background: #000;"></i>
             <!--  <img onclick="slide(1)" id="right1" src="/storage/product_images/download24.jpeg"> -->  
            </div>
            <div class="left1">
              <i class="fa fa-caret-left" onclick="slide(-1)" id="left1"></i>  
              <!-- <img  src="/storage/product_images/download23.png">  --> 
            </div>
            </div>
            </div>
</section>
    <br>
    <section id="header1">
         <h3>Whats in our Shopping Basket ?</h3>
    </section>
    <section id="mainproducts">
    <div class="row" style="position: relative;">        
    @if(count($posts))
    @foreach($posts as $post)
<div class="col-md-2 col-xs-6 productdiv" >
    <div class="div">
        <div class="divimg">
            <div class="row">
            <div><i class="fa fa-heart">0</i></div>
            <div class="col">3% OFF</div>
            </div>
<a href="individualmainproduct/{{$post->id}}"><img class="center" src="/storage/product_images/{{$post->productsimage}}">
    </div>
  
<div class="divfooter">
<p class="p"><b>{{$post->productsname}}
</b></p>
<p class="p"><b>{{$post->productsdescription}}
</b></p>
<p class="p"><b>{{$post->productsleastprice}}</b></p>
<div class="row">
<p class="p">
    <a href="#" title="Add to Cart"><i class="fa fa-cart-plus otherfa"></i></a>
    <a href="#" title="Like"><i class="fa fa-heart otherfa"></i></a>
    <a href="#" title="View"t><i class="fa fa-arrows otherfa" aria-hidden="true"></i></a>
    <a href="#" title="Compare"><i class="fa fa-circle-o-notch otherfa" aria-hidden="true"></i></a>
</p>
</div>
</div>
</a>
</div>
</div>
    @endforeach
    @endif
    <div class="leftarrow"><img class="left" src="/storage/product_images/download23.png"></div>
    <div class="rightarrow"><img class="right" src="/storage/product_images/download24.jpeg"></div>
    </div>
    <button class="btn  btn-success btn-block load">Load More For This Category</button>
    </section>
    <br  class="br">
    <section id="header">
         <h3>Our Agricultural Produce Basket</h3>
    </section>
    <section id="agriculturalproducts">
    <div class="row" style="position: relative;">
    @if(count($posts1))
    @foreach($posts1 as $post1)
<div class="col-md-2 col-xs-6 productdiv" >
    <div class="div">
        <div  class="divimg">
            <div class="row">
            <div><i class="fa fa-heart">0</i></div>
            <div class="col">3% OFF</div>
            </div>
<a href="individualagriculturalproduct/{{$post1->id}}"><img  class="center" src="/storage/product_images/{{$post1->productsimage}}">
    </div>
<div class="divfooter">
<p class="p"><b>{{$post1->productsname}}
</b></p>
<p class="p"><b>{{$post1->productsdescription}}
</b></p>
<p class="p"><b>{{$post1->productsleastprice}}</b></p>
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
<div class="leftarrow"><img class="left" src="/storage/product_images/download23.png"></div>
    <div class="rightarrow"><img class="right" src="/storage/product_images/download24.jpeg"></div>
    @endforeach
    @endif
    </div>
    <button class="btn  btn-success btn-block load">Load More For This Category</button>
    </section>
    <br class="br">
    <section id="header">
         <h3>Our Featured Products Basket</h3>
    </section>
    <section id="featuredproducts">
    <div class="row" style="position: relative;">
    @if(count($posts2))
    @foreach($posts2 as $post2)
<div class="col-md-2 col-xs-6 productdiv" >
    <div class="div">
        <div  class="divimg">
            <div class="row">
            <div><i class="fa fa-heart">0</i></div>
            <div class="col">3% OFF</div>
            </div>
<a href="individualfeaturedproduct/{{$post2->id}}"><img  class="center" src="/storage/product_images/{{$post2->productsimage}}">
    </div>
<div class="divfooter">
<p class="p"><b>{{$post2->productsname}}
</b></p>
<p class="p"><b>{{$post2->productsdescription}}
</b></p>
<p class="p"><b>{{$post2->productsleastprice}}</b></p>
<div class="row">
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
<div class="leftarrow"><img class="left" src="/storage/product_images/download23.png"></div>
    <div class="rightarrow"><img class="right" src="/storage/product_images/download24.jpeg"></div>
    @endforeach
    @endif
    </div>
    <button class="btn  btn-success btn-block load">Load More For This Category</button>
</div>
</section>
@endsection


 