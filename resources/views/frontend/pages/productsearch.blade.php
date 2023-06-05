@extends('frontend.pages.webmaster')
@section('content')

<p>sgtrshytrjh</p>
@foreach($products as $data)
            <div class="product-content">
                <img src="{{url('/uploads/'.$data->image)}}" width=100 alt="image">
            <h3><a href="product-details.html">{{$data->name}}</a></h3>
        <div class="product-price">
            <span class="old"></span>
            <span>{{$data->price}} BDT</span>

        </div>

    </div>
    @endforeach

@endsection