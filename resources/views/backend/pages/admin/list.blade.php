@extends('backend.pages.master')
@section('content')


<a href="{{route('admin.form')}}" class='btn btn-primary my-3'>Add admin</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
      
      <th scope="col">Address</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($admins as $key=>$data)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      
      <td>{{$data->status}}</td>
      
      <td>{{$data->email}}</td>
      
      <td>{{$data->contact}}</td>
      <td>{{$data->address}}</td>
      <td>
        <a href="" class="btn btn-info">View</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
 @endforeach
  
  </tbody>
</table>
    
    


@endsection