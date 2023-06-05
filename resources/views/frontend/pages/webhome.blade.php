
@extends('frontend.pages.webmaster')
@section('content')



<section class="small-banner section">
<div class="container-fluid">
<div class="row">









</div>
</div>
</section>


<div class="product-area section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h2>TRENDY PRODUCTS</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="product-info">
<div class="nav-main">

<ul class="nav nav-tabs" id="myTab" role="tablist">
    @foreach($categories as $data)
<li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="" role="tab"  >
        {{$data->name}}
    </a>
</li>
    @endforeach
</ul>

</div>
<div class="tab-content" id="myTabContent">

@foreach($products as $data)

<div class="tab-pane fade show active" id="man" role="tabpanel">
    <div class="tab-single">

        <div class="row">


            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
    
                <div class="single-product">
                    <div class="product-img">
                                <a href="product-details.html">

                                </a>
                        <div class="button-head">

                            <div class="product-action-2">
                                <a title="Add to cart" href="#">Add to cart</a>
                            </div>
                        </div> 
                    </div>
                             <div class="product-content">
                                     <img src="{{url('/uploads/'.$data->image)}}" width=100 alt="image">
                                    <h3><a href="product-details.html">{{$data->name}}</a></h3>
                                <div class="product-price">
                                    <span class="old"></span>
                                    <span>{{$data->price}} BDT</span>
            
                                </div>

                            </div>
  
                </div>

            </div>

        </div>
    </div>
</div>
@endforeach



<div class="tab-pane fade" id="women" role="tabpanel">
<div class="tab-single">
<div class="row">




<div class="col-xl-3 col-lg-4 col-md-4 col-12">
<div class="single-product">
<div class="product-img">
<a href="product-details.html">
<img class="default-img" src="images/products/p7.jpg" alt="#">
<img class="hover-img" src="images/products/p8.jpg" alt="#">
<span class="new">New</span>
</a>
<div class="button-head">
<div class="product-action">
<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
</div>
<div class="product-action-2">
<a title="Add to cart" href="#">Add to cart</a>
</div>
</div>
</div>
<div class="product-content">
<h3><a href="product-details.html">Women Pant Collectons</a></h3>
<div class="product-price">
<span>$29.00</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="tab-pane fade" id="kids" role="tabpanel">
<div class="tab-single">
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-4 col-12">
<div class="single-product">
<div class="product-img">
<a href="product-details.html">
<img class="default-img" src="images/products/p5.jpg" alt="#">
<img class="hover-img" src="images/products/p6.jpg" alt="#">
</a>
<div class="button-head">
<div class="product-action">
<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
</div>
<div class="product-action-2">
<a title="Add to cart" href="#">Add to cart</a>
</div>
</div>
</div>
<div class="product-content">
<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
<div class="product-price">
<span>$29.00</span>
</div>
</div>
</div>
</div>




<div class="col-xl-3 col-lg-4 col-md-4 col-12">
<div class="single-product">
<div class="product-img">
<a href="product-details.html">
<img class="default-img" src="images/products/p11.jpg" alt="#">
<img class="hover-img" src="images/products/p12.jpg" alt="#">
<span class="price-dec">30% Off</span>
</a>
<div class="button-head">
<div class="product-action">
<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
</div>
<div class="product-action-2">
<a title="Add to cart" href="#">Add to cart</a>
</div>
</div>
</div>
<div class="product-content">
<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
<div class="product-price">
<span>$29.00</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-4 col-12">
<div class="single-product">
<div class="product-img">
<a href="product-details.html">
<img class="default-img" src="images/products/p13.jpg" alt="#">
<img class="hover-img" src="images/products/p14.jpg" alt="#">
</a>
<div class="button-head">
<div class="product-action">
<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
</div>
<div class="product-action-2">
 <a title="Add to cart" href="#">Add to cart</a>
</div>
</div>
</div>
<div class="product-content">
<h3><a href="product-details.html">Polo Dress For Women</a></h3>
<div class="product-price">
<span>$29.00</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-4 col-12">
<div class="single-product">
<div class="product-img">
<a href="product-details.html">
<img class="default-img" src="images/products/p15.jpg" alt="#">
<img class="hover-img" src="images/products/p16.jpg" alt="#">
<span class="out-of-stock">Hot</span>
</a>
<div class="button-head">
<div class="product-action">
<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
</div>
<div class="product-action-2">
<a title="Add to cart" href="#">Add to cart</a>
</div>
</div>
</div>
<div class="product-content">
<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
<div class="product-price">
<span class="old">$60.00</span>
<span>$50.00</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="tab-pane fade" id="accessories" role="tabpanel">
<div class="tab-single">
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-4 col-12">
<div class="single-product">
<div class="product-img">
<a href="product-details.html">
<img class="default-img" src="images/products/p5.jpg" alt="#">
<img class="hover-img" src="images/products/p6.jpg" alt="#">
</a>
<div class="button-head">
<div class="product-action">
<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
</div>
<div class="product-action-2">
<a title="Add to cart" href="#">Add to cart</a>
</div>
</div>
</div>
<div class="product-content">
<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
<div class="product-price">
<span>$29.00</span>
</div>
</div>
</div>
</div>






<div class="col-xl-3 col-lg-4 col-md-4 col-12">
<div class="single-product">
<div class="product-img">
<a href="product-details.html">
<img class="default-img" src="images/products/p15.jpg" alt="#">
<img class="hover-img" src="images/products/p16.jpg" alt="#">
<span class="out-of-stock">Hot</span>
</a>
<div class="button-head">
<div class="product-action">
<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
</div>
<div class="product-action-2">
<a title="Add to cart" href="#">Add to cart</a>
</div>
</div>
</div>
<div class="product-content">
<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
<div class="product-price">
<span class="old">$60.00</span>
<span>$50.00</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="tab-pane fade" id="essential" role="tabpanel">
<div class="tab-single">
<div class="row">







<div class="col-xl-3 col-lg-4 col-md-4 col-12">
<div class="single-product">
<div class="product-img">
<a href="product-details.html">
<img class="default-img" src="images/products/p11.jpg" alt="#">
<img class="hover-img" src="images/products/p12.jpg" alt="#">
<span class="price-dec">30% Off</span>
</a>
<div class="button-head">
<div class="product-action">
<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
</div>
<div class="product-action-2">
<a title="Add to cart" href="#">Add to cart</a>
</div>
</div>
</div>
<div class="product-content">
<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
<div class="product-price">
<span>$29.00</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="tab-pane fade" id="prices" role="tabpanel">
<div class="tab-single">
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-4 col-12">
<div class="single-product">
<div class="product-img">
<a href="product-details.html">
<img class="default-img" src="images/products/p1.jpg" alt="#">
<img class="hover-img" src="images/products/p2.jpg" alt="#">
</a>
<div class="button-head">
<div class="product-action">
<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
</div>
<div class="product-action-2">
<a title="Add to cart" href="#">Add to cart</a>
</div>
</div>
</div>
<div class="product-content">
<h3><a href="product-details.html">Women Hot Collection</a></h3>
<div class="product-price">
<span>$29.00</span>
</div>
</div>
</div>
</div>





<div class="col-xl-3 col-lg-4 col-md-4 col-12">
<div class="single-product">
<div class="product-img">
<a href="product-details.html">
<img class="default-img" src="images/products/p15.jpg" alt="#">
<img class="hover-img" src="images/products/p16.jpg" alt="#">
<span class="out-of-stock">Hot</span>
</a>
<div class="button-head">
<div class="product-action">
<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
</div>
<div class="product-action-2">
<a title="Add to cart" href="#">Add to cart</a>
</div>
</div>
</div>
<div class="product-content">
<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
<div class="product-price">
<span class="old">$60.00</span>
<span>$50.00</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

<section class="section free-version-banner">

<div class="container">
<img src="https://gcp-img.slatic.net/lazada/bc9f6bc7-6fe9-4774-ad5b-4c302ca5f126_BD-1920-320.png" alt="img">
</div>



</section>
<div class="section-title">
<h2>CATEGORIES</h2>
</div>

<section class="shop-home-list section">
<div class="container">
<div class="row">
    @foreach($categories as $data)
    <div class="col-lg-3 col-md-6 col-12">
            <div class="row">
                
                <div class="col-12">

                </div>
            </div>

   
        <div class="single-list">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-2">

                    <div class="list-image overlay">
                        <img src="{{url('/uploads/'.$data->image)}}" width=50 alt="#">
                        <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                        <h4 class="title"><a href="#">{{$data->name}}</a></h4>
                        <p class="price with-discount"></p>
                    </div>
                </div>
               

            </div>
        </div>
            





    </div>
    @endforeach
</div>
</div>
</section>









<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">

</div>
</div>
</div>
</div>
</div>
</div>
@endsection