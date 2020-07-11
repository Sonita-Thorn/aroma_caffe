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
                <!--end of title-->
                <div class="row">
                    <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab">Hot Beverage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab">Ice Beverage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="dinner-tab" data-toggle="tab" href="#dinner" role="tab">Fraped</a>
                        </li>
                    </ul>
                </div>
                <div class="row justify-content-around align-items-center">
                    <div class="tab-content col-lg-12" id="myTabContent">
                        <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Latte</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Latte</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Latte</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Latte</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Chocolate</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Latte</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Latte</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Latte</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Americano</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Latte</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Latte</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm rotate">
                                    <div class="card text-center mb-3 coffee-card">
                                        <div class="card-header">
                                            <h4 class="font-weight-light title-text">Ice Latte</h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="uploads/products/1578924859.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="back">
                                            <div class="back-content">
                                                <h1 class="text-upercase font-weight-light">Only for</h1>
                                                <h3 class="mb-3">$2.95</h3>
                                                <a href="#" class="btn hvr-right my-4 text-capitilize">Add to cart</a>
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
    </section>

    @include('components/footer')

</body>

</html>