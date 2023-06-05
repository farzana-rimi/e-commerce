@extends('backend.pages.master')
@section('content')


<label for="">Brand Name</label>
    <input type="text" value="{{$find->name}}" readonly class="form-control">
<label for="">Image</label>

<img src="{{url('/uploads/'.$find->image)}}" width=50 alt="image">
    <input type="image" value="" readonly class="form-control">
    
<label for="">Status</label>
    <input type="text" value="{{$find->status}}" readonly class="form-control">
<label for="">Description</label>
    <input type="text" value="{{$find->description}}" readonly class="form-control">
<label for="">Category</label>
    <input type="text" value="{{$find->category->name}}" readonly class="form-control">
@endsection