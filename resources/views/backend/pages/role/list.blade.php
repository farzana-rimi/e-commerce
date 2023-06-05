@extends('backend.pages.master')
@section('content')

<a href="{{route('role.form')}}" class='btn btn-primary my-3'>Add Role</a>
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
@foreach($roles as $key=>$data )

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
    <td>
        <a href="{{route('role.view',$data->id)}}" class="btn btn-info">View</a>
        <a href="{{route('role.edit',$data->id)}}" class="btn btn-success">Edit</a>
        <a href="{{route('role.delete',$data->id)}}" class="btn btn-danger">Delete</a>
        <a href="" class="btn btn-info">Assign Permission</a>
      </td>
    </tr>
@endforeach
  
  </tbody>
</table>

@endsection