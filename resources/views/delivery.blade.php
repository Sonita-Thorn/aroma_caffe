<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/delivery.css') }}">
    <title>Delivery</title>
  
  <style>
    #home{
      background-image: url("photo/Delivery.jpg");
    }
  </style>
  </head>
  <body> 
    @include('components/header')

        <section id="home">
          <div class="container-fluid">
            <div class="row">
              
                <div class="ml-auto">
                    <h1 class="wow zoomIn" data-wow-delay="0.5s">Aroma Delivery</h1>
                    
                    <h5 class="wow bounceInUp" data-wow-delay="0.7s">
                        Introducing new Aroma Delivery Service terms & conditions<br>
                        Free Delivery for order from $8 or 50 cents fee will be charged for order<br>
                        below $8(minimum order starts at $5).Aroma Deliveryman will deliver your<br>
                        favorite drinks, food or pastries right to your front door.
                    </h5>
                    <button type="button" class="btn btn-default wow fadeInRight" data-wow-delay="0.9s">
                      <h4><i class="fas fa-phone-square-alt"></i>CAll NOW : 096 285 0059</button></h4>
                  </div>
                </div>
               
                
            </div>
        
         </section>

         <!--footer-->
@include('components/footer')



  </body>
  </html>