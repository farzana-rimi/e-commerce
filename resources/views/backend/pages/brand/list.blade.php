@extends('backend.pages.master')
@section('content')

<a href="{{route('brand.form')}}" class="btn btn-primary my-3">Add Brand</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($brands as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>

      <td>
        <img src="{{url('/uploads/'.$data->image)}}" width=80 alt="image">

      </td>

      <td>{{$data->status}}</td>
     <td>{{$data->description}}</td>
      <td>{{$data->category->name}}</td>
      <td>
        <a href="{{route('brand.view',$data->id)}}" class="btn btn-info">View</a>
        <a href="{{route('brand.delete',$data->id)}}" class="btn btn-danger">Delete</a>
      </td>
      
    </tr>
    @endforeach
  
  </tbody>
</table>

{{$brands->links()}}
@endsection