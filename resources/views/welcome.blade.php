@extends('layout.app')

@section('content')

<div class="container mt-3" style="background-color: rgb(236, 229, 229)">
    <div class="row p-2">
        <div class="col-md-2 bg-white rounded" style="height: 32rem;">
            <ul class="navbar-nav" style="font-size: 0.8rem">
                <li class="mb-5"><i class="fa fa-bar-chart mr-2" aria-hidden="true"></i>Supermarket</li>
                <li class="mb-5"><i class="fa fa-spinner mr-2" aria-hidden="true"></i>Health and Beauty </li>
                <li class="mb-5"><a href="{{ route('computing') }}"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>Computing </a></li>
                <li class="mb-5"><i class="fa fa-bolt mr-2" aria-hidden="true"></i>Household Appliances</li>
                <li class="mb-5"><a href="{{ route('phonesAndTablets') }}"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>Phones and Tablets </a></li>
                <li class="mb-5"><i class="fa fa-pie-chart mr-2" aria-hidden="true"></i>Electronics</li>
                <li class="mb-5"><i class="fa fa-pie-chart mr-2" aria-hidden="true"></i>Fashion</li>
                <li class="mb-5"><i class="fa fa-pie-chart mr-2" aria-hidden="true"></i>Baby Products</li>
            </ul>
        </div>
        <div class="col-md-8 rounded">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/phones.jpg" class="d-block w-100 rounded" style="height: 32rem;">
                    <div class="carousel-caption d-none d-md-block text-primary">
                      <h5>Gadgets</h5>
                      <p>Latest Mobile Phones</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/computers.jpg" class="d-block w-100 rounded" style="height: 32rem;">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Home Furnishings</h5>
                      <p>Latest Electronics</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/fridge.jpg" class="d-block w-100 rounded" style="height: 32rem;">
                    <div class="carousel-caption d-none d-md-block text-primary">
                      <h5>Comfort Appliances</h5>
                      <p>Subzero Refrigerators</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <div class="col-md-2 pr-1">
            <div class="py-2"  style="height: 32rem;">
                <div class="text-center text-white rounded py-4 mb-4" style="background-image:url(images/benzene.jpg)"><h3>Want Free <br> or Cheaper <br> Delivery? <br> Shop With Us</h3></div>
                <div class="text-center text-white rounded py-5" style="background-image: url(images/bg1.jpg)"><h3>PrimeTime Offer</h3><p>Buy Prime for a month <br> with 10% discount<br>on all products</p></div>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-md-3 p-1">
            <div class="rounded bg-white py-1"><h5><i class="fa fa-plane" aria-hidden="true"></i> Lead Global</h5></div>
        </div>
        <div class="col-md-3 p-1">
            <div class="rounded bg-white py-1"><h5><i class="fa fa-gift" aria-hidden="true"></i> Official Stores</h5></div>
        </div>
        <div class="col-md-3 p-1">
            <div class="rounded bg-white py-1"><h5><i class="fa fa-money" aria-hidden="true"></i> Borrow Money</h5></div>
        </div>
        <div class="col-md-3 p-1">
            <div class="rounded bg-white py-1"><h5><i class="fa fa-cutlery" aria-hidden="true"></i> Lead Food</h5></div>
        </div>
    </div>

   <div class="bg-white rounded p-2">

    <div class="p-2">
        <h5>Top Selling Items</h5>
    </div>
    <div class="row">

        <div class="col-md-4">
            <div class="card mb-2" style="height: 28rem;">
          <img src="images/phone3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="">
          <div class="card" style="height: 28rem;">
        <img src="images/watch.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
      </div>



        <div class="col-md-4">
            <div class="card mb-2" style="height: 28rem;">
          <img src="images/sneakers.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="">
            <div class="card" style="height: 28rem;">
          <img src="images/fridge1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      </div>



        <div class="col-md-4">
            <div class="card mb-2" style="height: 28rem;">
          <img src="images/shoes.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="">
            <div class="card" style="height: 28rem;">
          <img src="images/lotion.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      </div>



    </div>
   </div>
</div>
@endsection
