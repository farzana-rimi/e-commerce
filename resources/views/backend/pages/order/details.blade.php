@extends('backend.pages.master')
@section('content')
<h1> Order List</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      

      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Sub Total</th>
    </tr>
  </thead>
  <tbody>

  @foreach($order_items as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->product->name}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->qty}}</td>
      <td>{{$item->subtotal}}</td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection