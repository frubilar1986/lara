<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Iconos fontawesome (CDN)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>@yield('title')</title>
</head>

<body style="background-color: antiquewhite;">
    <div class="container shadow-lg min-vh-100">
        <h1 class="text-center text-black-50 bg-info text-secondary"><i class="fa-brands fa-laravel"></i> Laravel 8</h1>
        <!-- <header> -->
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  sticky-top ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><i class="fa fa-home" aria-hidden="true"></i><i
                        class="bi bi-house-door-fill"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- enlaces menú -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beneficios inmediatos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Maneja tu peso</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white-50" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    TP-Bootstrap
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/alumnos">tuto_alumnos</a></li>
                                    <li><a class="dropdown-item" href="ej02.html">Ejercicio 02</a></li>
                                    <li><a class="dropdown-item" href="ej03.html">Ejercicio 03</a></li>
                                    <li><a class="dropdown-item" href="ej04.html">Ejercicio 04</a></li>
                                    <li><a class="dropdown-item" href="ej05.html">Ejercicio 05</a></li>
                                    <li><a class="dropdown-item" href="ej06.html">Ejercicio 06</a></li>
                                    <li><a class="dropdown-item" href="ej07.html">Ejercicio 07</a></li>
                                    <li><a class="dropdown-item" href="eje8.html">Ejercicio 08</a></li>
                                    <li><a class="dropdown-item" href="eje9.html">Ejercicio 09</a></li>
                                    <li><a class="dropdown-item" href="eje10.html">Ejercicio 10</a></li>
                                    <li><a class="dropdown-item" href="ej11.html">Ejercicio 11</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Palabra clave" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container shadow-lg bg-light-50">
            <h1 class="text-center">Un gran sabio dijo....</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam dicta excepturi dolore eum. Saepe atque
                voluptates sequi nesciunt odio quos quis et corrupti, dignissimos est! Asperiores omnis quidem suscipit
                modi hic accusamus, aliquam, non doloremque consectetur quas beatae, pariatur dignissimos dolores sint
                laudantium? Voluptates hic nam quos provident nemo quidem qui consequatur nostrum nisi non incidunt sunt
                eum velit voluptatibus, nulla voluptatem rem, asperiores in eius illum impedit officia. Nam dignissimos
                consectetur itaque, voluptate maxime voluptatem maiores incidunt similique nesciunt voluptates ab atque
                ducimus. Voluptate eius magnam eveniet dicta aspernatur, neque nulla minus unde esse libero doloremque
                sequi, necessitatibus minima?</p>
            <h4>
                Bienvenido {{-- {{$nombre}} --}}
            </h4>

            @yield('contenido')
            <footer class="container mt-auto text-white-50 bg-black text-center " style="height: 100px;">
                <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a
                        href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </footer>
        </div>

        <!-- script -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        {{-- script --}}
</body>

</html>
