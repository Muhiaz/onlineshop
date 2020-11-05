@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div  class="row">
    <div class="col-md-12">
        {!! Form::open(['action'=>'PostsController@addfeaturedproducts','method'=>'Post','enctype'=>'multipart/form-data']) !!}
    <div class="add">
      <div class="form-group">
          <label>Products Name</label>
          <input type="" name="productsname" class="form-control">
      </div>
       <div class="form-group">
          <label>Products Description</label>
          <input type="" name="productsdescription" class="form-control">
      </div>
      <div class="form-group">
          <label>Products Vendor</label>
          <input type="" name="productsvendor" class="form-control">
      </div>
      <div class="form-group">
          <label>Products Image</label>
          <input type="file" name="productsimage" class="form-control">
      </div>
      <div class="form-group">
          <label>Products Least Price</label>
          <input type="" name="productsleastprice" class="form-control">
      </div>
      <div class="form-group">
          <label>Products Quantity</label>
          <input type="" name="rows[][productsquantity]" class="form-control">
      </div>
      <div class="form-group">
          <label>Products Price</label>
          <input type="" name="rows[][productsprice]" class="form-control">
      </div>
</div>
<button type="submit">submit</button>
  {!! Form::close() !!}
  <button id="add" class="btn  btn-primary">Add</button>
  </div>
  </div>
  </div>
@endsection


 