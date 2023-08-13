@extends('backend.pages.master')
@section('content')

<h3>Order list</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
     <th scope="col">Name</th>
      <th scope="col">Order date</th>
      <th scope="col">Total amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

  @foreach($order as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->user->name}}</td>
      <td>{{$data->created_at}}</td>
      <td>{{$data->total}}</td>
      <td>{{$data->payment_method}}</td>
      <td>
        <a href="{{route('order.view',$data->id)}}" class="btn btn-success">Viewuguyf</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection