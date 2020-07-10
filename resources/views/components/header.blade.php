<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/coffee.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/menu.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700|Pattaya&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Sofia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Short+Stack&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/animate.css') }}">
    <link rel="stylesheet" href="https://github.com/graingert/WOW.git">

    <script src="https://kit.fontawesome.com/19bbb30846.js" crossorigin="anonymous"></script>



    <title>Header</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="photo/aroma_logo1.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/menu">Menu</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/delivery">Delivery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/join">Join Aroma</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/us">About us</a>

                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </nav>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{ url('js/wow.min.js') }}"></script>
<script>
    new WOW().init();
</script>

</html>