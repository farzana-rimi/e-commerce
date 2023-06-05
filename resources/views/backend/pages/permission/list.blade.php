@extends('backend.pages.master')
@section('content')


<h2>Permissions</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
  
    </tr>
  </thead>
  <tbody>
@foreach($permissions as $key=>$data )

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
    <td>
        <a href="{{route('permission.view',$data->id)}}" class="btn btn-info">View</a>
        <a href="{{route('permission.edit',$data->id)}}" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
@endforeach
  
  </tbody>
</table>

@endsection