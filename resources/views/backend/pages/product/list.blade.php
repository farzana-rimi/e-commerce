@extends('backend.pages.master')
@section('content')


<a href="{{route('product.form')}}" class='btn btn-primary my-3'>Add product</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Brand</th>
      <th scope="col">Category</th>
      <th scope="col">Vendor</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($products as $key=>$data)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>
          <img src="{{url('/uploads/'.$data->image)}}" width=80 alt="image">
      </td>
      <td>{{$data->status}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->brand?->name}}</td>
      <td>{{$data->category?->name}}</td>
      <td>{{$data->vendor?->name}}</td>
      <td>
        <a href="{{route('product.view',$data->id)}}" class="btn btn-info">View</a>
        <a href="{{route('product.delete',$data->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
 @endforeach
  
  </tbody>
</table>
    
    
{{$products->links()}}

@endsection