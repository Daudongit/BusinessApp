<template>
    <header class="section-header">
        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-3 col-2 ">
                        <a href="/" class="brand-wrap">
                            <img class="logo" src="assets/img/Vector (8).png" alt="logo" width="25" height="25">
                            <img class="xs-none" src="/assets/img/Rubican (1).png">
                        </a>
                        <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 col-sm-12 order-3 order-lg-2 p-2">
                        <form action="#" class="search-wrap">
                            <div class="input-group w-100">

                                <input type="text" class="form-control" style="width:60%;" placeholder="Search for products, services, store...">

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
                                        <span>Login  <i class="fa fa-caret-down"></i></span>

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
                            <a class="nav-link pl-0  pr-1" href="#"><i class="fa fa-bars"> </i> Home </a>
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
</template>

<script>
export default {
  name: 'VHeader'
}
</script>
