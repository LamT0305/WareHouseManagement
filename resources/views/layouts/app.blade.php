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

    <link rel="stylesheet" href="css/app.css">
</head>

<body>
  <header>
    <nav>
      <div>
          <ul class="navbar-nav">
              <div class="container-fluid" style="padding:0">
                  <a class="navbar-brand" href="#">
                    <img src="{{asset('Image/logo.jpg')}}" alt="WareHouse" style="width:60px;" class="logo">
                    <p style="margin:0; font-size:20px; font-weight:600; color:white">MR Warehouse</p>
                  </a>
              </div>
              
              <form class="d-flex search-form">
                  <input class="form-control me-2" type="text" placeholder="Search">
                  <button class="btn btn-primary" type="button">Search</button>
              </form>
              <div style="display:flex; flex-direction:column; justify-content: space-between; height:80%">
                <div>
                  <li class="nav-item"><a href="">Home</a></li>
                  <li class="nav-item"><a href="">Category</a></li>  
                  <li class="nav-item"><a href="">About Us</a></li> 
                </div>
                  <li class="nav-item"><a href="">Hotline: 19001111</a></li>
              </div>
              
          </ul>
      </div>
  </nav>
  </header>


  <main>
    @yield('content')
  </main>


  <footer>

  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>