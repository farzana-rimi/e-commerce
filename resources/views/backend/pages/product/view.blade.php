@extends ('backend.pages.master')
@section('content')


<label for="">Product</label>
    <input type="text" value="{{$find->name}}" readonly class="form-control">
<label for="">Image</label>
    <input type="image" value="" readonly class="form-control" >
    <img src="{{url('/uploads/'.$find->image)}}" width=50 alt="image">
   
<label for="">Status</label>
    <input type="text" value="{{$find->status}}" readonly class="form-control">
<label for="">Price</label>
    <input type="text" value="{{$find->price}}" readonly class="form-control">
 <label for="">Description</label>
    <input type="text" value="{{$find->description}}" readonly class="form-control">
<label for="">Brand</label>
    <input type="text" value="{{$find->brand->name}}" readonly class="form-control">
<label for="">Category </label>
    <input type="text" value="{{$find->category->name}}" readonly class="form-control">




    
    
    
    


@endsection