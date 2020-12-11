<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiero ayudar</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
</head>

    <body>
      <!-- inicia el header -->
    <header>
                  <nav id="header" class="navbar navbar-expand-lg navbar-light" style="background-color:#33E2F9">
                      <div class="container-fluid">
                        <a class="navbar-brand" href="http://127.0.0.1:8000/">
                        <img src="https://image.freepik.com/vector-gratis/asociacion-o-amigos-apreton-manos-bienvenido-ilustracion-dibujos-animados-plano-vector-apreton-manos_101884-890.jpg" alt="apreton de manos" width="80px">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/">Principal</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">¿Que hacemos?</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">¿Como ayudar?</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Historias</a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                            </li>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <!-- Left Side Of Navbar -->
                          <ul class="navbar-nav mr-auto">
                          </ul>
                          <!-- Right Side Of Navbar -->
                          <ul class="navbar-nav ml-auto">
                              <!-- Authentication Links -->
                              @guest
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar') }}</a>
                                  </li>
                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                                      </li>
                                  @endif
                              @else
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->email }}
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                              {{ __('Salir') }}
                                          </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                              @endguest
                        </ul>
                  </div>
                </nav>
          </header>
          <div id="app">

              <main class="py-4">
                  @yield('content')
              </main>
          </div>
        <!-- inicio del footer -->
        <footer class="p-4" style="background-color: #33E2F9;">

          <div class="container">
            <div class="row justify-content-center align-items-center  text-center">

              <div class="col-12 col-lg-4 p-4" style="text-align: left;">
                <h3 style="color: #0e6ba8; font-family: 'Montserrat', sans-serif;font-size: 18px;">Sobre Quieroayudar.com</h3>
                <br><br>
                <p style="font-family: 'Montserrat', sans-serif;font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quae sint sed sapiente vero. Quod in corporis
                  eaque excepturi quo facere, consectetur maiores eum saepe ducimus, illum quam facilis magni reiciendis.</p>
              </div>

              <div class="col-12 col-lg-4 p-4">
                <a target="blank" href="" class="social-network p-2"><img src="img/sn-min/fc-min.png" alt=""></a>

                <a target="blank" href="https://www.instagram.com/bigs_it/" class="social-network p-2"><img
                    src="img/sn-min/ins-min.png" alt=""></a>

                <a target="blank" href="" class="social-network p-2"><img src="img/sn-min/tw-min.png" alt=""></a>
              </div>

              <div class="col-12 col-lg-4 p-4" style="text-align: left;" id="contactanos">
                <h3 style="color: #0e6ba8; font-family: 'Montserrat', sans-serif;font-size: 18px;">Contactanos</h3>
                <br><br>
                <p style="font-family: 'Montserrat', sans-serif;font-size: 14px;"><img src="img/sn-min/ubicacion.png"
                    style="height: 15px;" alt=""> Ubicación: Buenos Aires, Argentina.</p>
                <p style="font-family: 'Montserrat', sans-serif;font-size: 14px;"><img src="img/sn-min/reloj.png"
                    style="height: 15px; " alt=""> Lunes a Viernes: 9 a.m. a 5 p.m.</p>
                <p style="font-family: 'Montserrat', sans-serif;font-size: 14px;"><img src="img/sn-min/reloj.png"
                    style="height: 15px; " alt=""> Sabados: 9 a.m. a 1 p.m.</p>
        </div>
  </footer>
<!-- final del Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
