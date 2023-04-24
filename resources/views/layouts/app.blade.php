<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css/style.css">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> --}}
    @yield('head')
</head>

<body>
  <header>
  <div class="l-navbar" id="navbar">
        <div class="nav">
            <div>
                <a href="{{url('/')}}" class="nav__logo">
                    <img src="{{asset('image/logo.png')}}" alt="" class="nav__logo-icon">
                    <span class="nav__logo-text">WareHouse</span>
                </a>
                <div>
                    <ul class="nav__list">
                        <form action="#" method="get" class="search-form">
                          <input type="text" id="search-input" name="search-input" placeholder="Search....." class="search-input">
                          <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                        </form>
                        <a href="{{url('/')}}" class="nav__link active">
                            <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__text">Home</span>
                        </a>
                        <a href="{{url('/category')}}" class="nav__link active">
                            <i class='bx bx-category nav__icon' ></i>
                            <span class="nav__text">Category</span>
                        </a>
                        <a href="#" class="nav__link active">
                            <i class='bx bx-book-content nav__icon'></i>
                            <span class="nav__text">Aubout Us</span>
                        </a>
                    </ul>
                </div>
                    <a href="#" class="nav__link active">
                        <i class='bx bxs-phone nav__icon'></i>
                        <span class="nav__text">Hotline: 19001111</span>
                    </a>
            </div>
        </div>
    </div>
  </header>


  <main>
    @yield('content')
  </main>



  <footer>

  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="{{asset('js/product.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>