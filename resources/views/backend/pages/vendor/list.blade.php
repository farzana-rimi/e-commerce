@extends('backend.pages.master')
@section('content')

<a href="{{route('vendor.form')}}" class='btn btn-primary my-3'>Add vendor</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
        <th scope="col">Email</th>
      <th scope="col">Bank info</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($vendors as $key=>$data)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->contact}}</td>
      <td>{{$data->address}}</td>
      
      <td>
          <img src="{{url('/uploads/'.$data->image)}}" width=80 alt="image">
      </td>
      <td>{{$data->status}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->bank_info}}</td>
      
      <td>{{$data->city}}</td>
     
      <td>
        <a href="" class="btn btn-info">View</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
 @endforeach
  
  </tbody>
</table>
@endsection