


<header class="header shop">


<div class="middle-inner">
<div class="container">
<div class="row">
<div class="col-lg-2 col-md-2 col-12">

<div class="logo">
<h2>Ample</h2>
</div>


<div class="search-top">
<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>

<div class="search-top">
<form  >
<input type="text" placeholder="Search here..." name="search"  class="form-control">
<button  type="submit"><i class="ti-search"></i></button>
</form>
</div>

</div>

<div class="mobile-nav"></div>
</div>


    <div class="search-bar">

<form action="{{route('product.search')}}">
<input name="search_key" placeholder="Search Products Here....." type="text" class="form-control" value="{{request()->search_key}}">
<button class="btnn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>


<div class="col-lg-2 col-md-3 col-12">

@if(session()->has('userId'))
    <p class="badge badge-danger">
        <span>Please verify your email.</span>
        <br>
        <br>
        <a class="btn btn-info" href="{{route('email.verify',session()->get('userId'))}}">Verify now</a>
    </p>
@endif

<div class="right-bar">



<div class="sinlge-bar shopping">


<div class="shopping-item">

<ul class="shopping-list">
<li>
<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
<a class="cart-img" href="#"><img src="images/product-1.jpg" alt="#"></a>
<h4><a href="#">Woman Ring</a></h4>
<p class="quantity">1x - <span class="amount">$99.00</span></p>
</li>
<li>
<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
<a class="cart-img" href="#"><img src="images/product-2.jpg" alt="#"></a>
<h4><a href="#">Woman Necklace</a></h4>
<p class="quantity">1x - <span class="amount">$35.00</span></p>
</li>
</ul>
<div class="bottom">
<div class="total">
<span>Total</span>
<span class="total-amount">$134.00</span>
</div>
<a href="checkout.html" class="btn animate">Checkout</a>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

<div class="header-inner">
<div class="container">
<div class="cat-nav-head">
<div class="row">
<div class="col-lg-3">
<div class="all-category">
<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
<ul class="main-category">
@foreach($category as $data)
<li><a href="">{{$data->name}}</a></li>
@endforeach
</ul>
</div>
</div>
<div class="col-lg-9 col-12">
<div class="menu-area">

<nav class="navbar navbar-expand-lg">
<div class="navbar-collapse">
<div class="nav-inner">
<ul class="nav main-menu menu navbar-nav">
<li class="active"><a href="#">Home</a></li>



<li><a href="#">Pages</a></li>

<li><a href="contact.html">Contact Us</a></li>
  <!-- Button trigger modal -->
@guest
<li> <a href="#"  data-toggle="modal" data-target="#exampleModal">Register</a></li>

<li> <a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
@endguest

@auth
<li> <a href="{{route('weblogout')}}" >Logout</a></li>

@endauth
<li><a href="#">+8801620163363</a></li>
</ul>
</div>
</div>
</nav>

</div>
</div>
</div>
</div>
</div>
</div>

</header>

<section class="hero-slider">

<div class="single-slider">
<div class="container">
<div class="row no-gutters">
<div class="col-lg-9 offset-lg-3 col-12">
<div class="text-inner">
<div class="row">
<div class="col-lg-7 col-12">
<div class="hero-text">
<h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
<p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
<div class="button">
<a href="#" class="btn">Shop Now!</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</section>

<!--Registration Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
          <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Registration</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('regstore')}}" method="post">
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Enter first Name:</label>
                        <input required type="text" name="first_name" class="form-control" placeholder=" first_name">
                    </div>

                    <div class="form-group">
                        <label for="">Enter last Name:</label>
                        <input required type="text" name="last_name" class="form-control" placeholder=" last_name">
                    </div>
                        <div class="form-group">
                            <label for="">Enter Your email:</label>
                            <input required type="email" name="customer_email" class="form-control" placeholder=" email">
                        </div>
                        <div class="form-group">
                            <label for="">Enter Your password:</label>
                            <input required type="password" name="password" class="form-control" placeholder=" password">
                        </div>
                        <div class="form-group">
                            <label for="">Enter Your contact</label>
                            <input required type="integer" name="contact" class="form-control" placeholder=" contact">
                        </div>
                        <div class="form-group">
                            <label for="">Enter Your address</label>
                            <input required type="text" name="address" class="form-control" placeholder=" address">
                        </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                  </div>      
                    
                </form>
          </div>
        </div>
    </div>


  <!-- login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('weblogin')}}" method='post'>
                    
                    @csrf
                    <div class="modal-body mb-5">

                        <div class="form-group">
                            <label for="">Enter Your email:</label>
                            <input required type="email" name="email" class="form-control" placeholder="email">
                        </div>

                        <div class="form-group">
                            <label for="">Enter Your password:</label>
                            <input required type="password" name="password" class="form-control" placeholder="password">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


   
   

