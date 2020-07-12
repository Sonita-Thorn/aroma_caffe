<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/menu.css') }}">
    <title>Menu</title>
</head>


<body>
    @include('components/header')

    <section id="home" style="background-image: url(' photo/men.jpeg')">
        <div class="landing-text">
            <h1>AROMA COFFEE</h1>
            <h3>Drinks Beverage</h3>
        </div>
    </section>

    <div class="row">
        <div class="col-xl-12 mb-60">
            <div class="section-title text-center">
                <p>Famous for good Drink</p>
                <h4>our menu</h4>
            </div>
        </div>
    </div>

    <section class="menu">
        <div class="mymenu p-5">
            <div class="video-container">
                <video class="bg-video"  autoplay muted loop>
                    <source src="photo/animation.mp4">
                </video>
            </div>
            <div class="container-fluid">
                <!---title-->
                <div class="row">
                    <div class="col text-center py-5">
                        <h1 class="text upercase text-color font-weight-bold">Aroma Menu</h1>
                    </div>
                </div>
                <div class="products text-center">
               
                    <div class="row justify-content-around align-items-center">
                        <div class="tab-content col-lg-12" id="myTabContent">
                            <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                                    <div class="row">
                                        @foreach ($product as $products)
                                        <div class="product">
                                        <div class="col-xl-3 col-lg-4 col-sm rotate">
                                            <div class="card text-center mb-3 coffee-card">
                                                 <div class="card-header">
                                                    <h4 class="font-weight-light title-text">{{$products->title}}</h4>
                                                </div>
                                                <div class="card-body">
                                                     <img src=" {{ asset('public/image/'. $products->image) }} " alt="file" width="200px" height="200px">
                                                </div>
                                                <div class="back">
                                                    <div class="back-content">
                                                        <h3 class="mb-3">{{$products->price}}$.</h3>
                                                            <h5 class="text-upercase font-weight-light">{{$products->description}}</h5>
                                               
                                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
               </div>
        </div>

</div>
                
                 
    </section>

    @include('components/footer')

</body>

</html>