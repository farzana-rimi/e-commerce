@extends('backend.pages.master')
@section('content')

<label for="">Category Name</label>
    <input type="text" value="{{$data->name}}" readonly class="form-control">
<label for="">Status</label>
    <input type="text" value="{{$data->status}}" readonly class="form-control">
<label for="">Description</label>
    <input type="text" value="{{$data->description}}" readonly class="form-control">
<label for="">Image</label>
    <input type="text" value="{{$data->image}}" readonly class="form-control">

    <a href="{{route('category.list')}}" class="btn btn-success my-2">Back</a>

@endsection