@extends('backend.pages.master')
@section('content')


<label for="">Role Name</label>
    <input type="text" value="{{$role->name}}" readonly class="form-control">

    
<label for="">Status</label>
    <input type="text" value="{{$role->status}}" readonly class="form-control">

@endsection