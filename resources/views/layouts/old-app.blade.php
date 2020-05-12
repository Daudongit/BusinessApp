<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/custom-bs4-3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
  <link rel="stylesheet" href="/ui.css">
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/responsive.css">

  <title>Login</title>
</head>

<body>
  <header class="section-header">

    <section class="header-main border-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 col-sm-3 col-2 ">
            <a href="/" class="brand-wrap">
              <img class="logo" src="img/Vector (8).png" alt="logo" width="25" height="25">
              <img class="xs-none" src="/img/Rubican (1).png">
            </a>
            <!-- brand-wrap.// -->
          </div>
          <div class="col-lg-6 col-sm-12 order-3 order-lg-2 p-2">
            <form action="#" class="search-wrap">
              <div class="input-group w-100">

                <input type="text" class="form-control" style="width:60%;"
                  placeholder="Search for products, services, store...">

                <select class="custom-select" placeholder="select location">
                  <option>Ikeja</option>
                  <option>Ikoyi</option>
                  <option>Surulere</option>
                  <option>Festac</option>
                </select>
              </div>
            </form>
            <!-- search-wrap .end// -->
          </div>
          <!-- col.// -->
          <div class="col-lg-3 col-sm-9 col-10 order-2 order-lg-3">
            <div class="widgets-wrap d-flex justify-content-end">
              <!-- widget .// -->
              <div class="widget-header dropdown">
                <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
                  <div class="icon"><i class="fa fa-lg fa-user-circle"></i></div>
                  <div class="text">
                    <span>Login <i class="fa fa-caret-down"></i></span>

                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <form class="px-4 py-3">
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" class="form-control" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </form>
                  <hr class="dropdown-divider">
                  <a class="dropdown-item" href="#">Have account? Sign up</a>
                  <a class="dropdown-item" href="#">Forgot password?</a>
                </div>
                <!--  dropdown-menu .// -->
              </div>
              <!-- widget  dropdown.// -->
              <div class="widget-header ml-3">
                <a href="#" class="icontext">
                  <div class="icon"><i class="fa fa-lg fa-shopping-cart"></i></div>
                  <div class="text">

                    <span>My Cart</span>
                  </div>
                </a>
              </div>
            </div>
            <!-- widgets-wrap.// -->
          </div>
          <!-- col.// -->
        </div>
        <!-- row.// -->
      </div>
      <!-- container.// -->
    </section>
    <!-- header-main .// -->
    <section class="navbar-light border-bottom bg-primary rubic-sub-nav p-1">
      <div class="container">
        <nav class="d-flex align-items-center flex-column flex-md-row">
          <ul class="nav mr-md-auto">
            <li class="nav-item">
              <a class="nav-link pl-0  pr-1" href="#"><i class="fa fa-bars"> </i> Home > </a>
            </li>

            <li class="nav-item">
              <a href="/login.html" class="nav-link pl-0">Login</a>
            </li>




          </ul>
          <ul class="nav xs-none">
            <a href="#" class="nav-link ">Start Selling</a>
            <a href="# " class="nav-link  pl-1">About Us</a>
            <a href="# " class="nav-link pl-1">Contact Us</a>
            <a class="p-2 ">| Follow us on</a>
            <a href="# " class="nav-link pl-1"><i class="fab fa-facebook-f "></i></a>
            <a href="# " class="nav-link pl-1"><i class="fab fa-twitter "></i></a>
            <a href="# " class="nav-link pl-1"><i class="fab fa-instagram "></i></a>
            <a href="# " class="nav-link pl-1"><i class="fab fa-youtube "></i></a>
          </ul>
        </nav>
        <!-- nav .// -->
      </div>
      <!-- container //  -->
    </section>
    <!-- navbar main end.// -->
  </header>


  <main>@yield('content')</main>

  <footer class="section-footer border-top bg-primary rubic-footer">
    <div class="container">
      <section class="footer-top  padding-y">
        <div class="row justify-content-center">
          <aside class="col-md-3 col-12 mb-3">
            <article class="mr-md-4">
              <a href="/" class="brand-wrap">
                <img class="logo" src="/img/chrome-footer.png" alt="logo" width="25" height="25">
                <img src="/img/Rabicon-footer.png">
              </a>
            </article>
          </aside>
          <aside class="col-md-2 col-6  mb-3">
            <ul class="list-unstyled">
              <li> <a href="#">About us</a></li>
              <li> <a href="#">Career</a></li>
              <li> <a href="#">Find a store</a></li>
              <li> <a href="#">Rules and terms</a></li>
              <li> <a href="#">Sitemap</a></li>
            </ul>
          </aside>
          <aside class="col-md-2 col-6  mb-3">
            <ul class="list-unstyled">
              <li> <a href="#">Contact us</a></li>
              <li> <a href="#">Money refund</a></li>
              <li> <a href="#">Order status</a></li>
              <li> <a href="#"><i class="fa fa-envelope"></i> help@rubican.com</a></li>
              <li>
                <a href="#"> <i class="fa fa-phone"></i> +234 81094567890</a>
              </li>
            </ul>
          </aside>
          <aside class="col-md-5 col-12 mb-3">
            <p>Subscribe to our Newsletter</p>

            <form class="form-inline mb-3">
              <input type="text" placeholder="Email" class="form-control mb-3" name="">
              <button class="btn ml-2 btn-info mb-3"> Subscribe</button>
            </form>

            <p class="text-white-50 mb-2">Follow us on
              <a href="#" class="pl-2"><img src="img/instagram.png"></a>
              <a href="#" class="pl-1"><img title="Follow on Facebook!" src="img/twitter.png"></a>
              <a href="#" class="pl-1"><img title="Follow on Dribble!" src="img/facebook.png"></a>
              <a href="#" class="pl-1"><img title="Follow on Dribble!" src="img/youtube.png"></a>
            </p>
            <!-- <div>

                        </div> -->

          </aside>
        </div>
        <!-- row.// -->
      </section>
      <!-- footer-top.// -->

      <section class="footer-bottom border-top text-center">
        <p>&copy; Copyright Rabicon In'l 2019.</p>
      </section>
    </div>
    <!-- //container -->
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js "></script>
</body>

</html>
