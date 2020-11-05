@extends('layout.app')

@section('content')
{!! Form::open(['action' => 'PostsController@store','method' => 'POST','enctype'=>'multipart/form-data']) !!}
<br>
   <div class="form-group">
   	{{ Form::label('name','Name') }}
      {{ Form::text('name','',['class'=>'form-control','placeholder'=>'Name']) }}
   </div>
   <div class="form-group">
   	{{ Form::label('description','Description') }}
     {{ Form::textarea('description','',['class'=>'form-control','placeholder'=>'Description']) }}
   </div>
   
   <div class="form-group">
   	{{ Form::label('price','Price') }}
      {{ Form::text('price','',['class'=>'form-control','placeholder'=>'Price']) }}
   </div>
   <div class="form-group">
   	{{ Form::label('discount','Discount') }}
     {{ Form::text('discount','',['class'=>'form-control','placeholder'=>'Discount']) }}
   </div>
   <div class="form-group">
      {{ Form::file('product_image') }}
   </div>
   <div class="form-group">
     {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
   </div>
{!! Form::close() !!}
</div>
@endsection