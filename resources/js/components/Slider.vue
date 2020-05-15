<template>
    <!-- Slider -->
    <section class="mt-5 home-slider mb-3">
        <div class="row justify-content-center">
            <div class="col-lg col-md-3 mb-3">
                <aside class="special-home-right">
                    <ul class="home-category list-unstyled mt-2 mb-2  card p-2">
                        <li>
                            <a href="#"> <img src="/assets/img/fash.png" alt=""> Fashion and Tailoring</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/assets/img/constr.png" alt=""> Construction and Repairs</a>
                        </li>

                        <li>
                            <a href="#"> <img src="/assets/img/laund.png" alt=""> Laundry and Dry Cleaning</a>
                        </li>

                        <li>
                            <a href="#"> <img src="/assets/img/utilities.png" alt=""> Ultilities</a>
                        </li>

                        <li>
                            <a href="#"> <img src="/assets/img/camera.png" alt=""> Events Management</a>
                        </li>

                        <li>
                            <a href="#"> <img src="/assets/img/live support agent headset.png" alt=""> Healthcare and Fitness</a>
                        </li>

                        <li>
                            <a href="#"> <img src="/assets/img/printer.png" alt=""> Furniture and Fittings</a>
                        </li>

                        <li>
                            <a href="#"> <img src="/assets/img/tv.png" alt=""> Electronics and gadgets</a>
                        </li>

                        <li>
                            <a href="#"> <img src="/assets/img/umbrella.png" alt=""> Kitchen and Cutleries</a>
                        </li>

                        <li>
                            <a href="#"> <img src="/assets/img/monitor.png" alt=""> Computers and Accesories</a>
                        </li>

                        <li>
                            <a href="#"> <img src="/assets/img/mic.png" alt=""> Pharmacies</a>
                        </li>

                    </ul>

                    <a href="#" class="sm-ads-widget">
                        <img src="/assets/img/adstoresm.png" alt="">
                    </a>

                </aside>
            </div>

            <div class="col-md-9 col-xl-7 col-lg-7 mb-3">

                <!-- ================== COMPONENT SLIDER  BOOTSTRAP  ==================  -->
                <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel1_indicator" data-slide-to="0" class=""></li>
                        <li data-target="#carousel1_indicator" data-slide-to="1" class=""></li>
                        <li data-target="#carousel1_indicator" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#"><img src="/assets/img/slide1.jpg" alt="First slide"></a>

                        </div>
                        <div class="carousel-item">
                            <a href="#"><img src="/assets/img/slide2.png" alt="Second slide"></a>

                        </div>
                        <div class="carousel-item">
                            <a href="#"><img src="/assets/img/slide3.jpg" alt="Third slide"></a>

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- ==================  COMPONENT SLIDER BOOTSTRAP end.// ==================  .// -->

            </div>

            <div class="col-md d-none d-lg-block col-lg mb-3">
                <aside class="special-home-right">
                    <a href="#" class="mt-2 mb-2 sm-ads-widget">
                        <img src="/assets/img/50offsm.png" alt="" class="pt-2 pb-2">
                    </a>

                    <a href="#" class="mt-2 mb-2 sm-ads-widget">
                        <img src="/assets/img/medium-fb-ad.png" alt="" class="pt-2 pb-2">
                    </a>

                    <a href="#" class="mt-2 mb-2 sm-ads-widget">
                        <img src="/assets/img/50offsmval.png" alt="" class="pt-2 pb-2">

                    </a>

                </aside>
            </div>
        </div>
    </section>
    <!-- End slider -->
</template>

<script>
    export default {
        name: 'Slider',
        data: () => ({
            sliders:[
                {desc:'Fashion and Tailoring',imgUrl:'fash.png'},
                {desc:'Construction and Repairs',imgUrl:'constr.png'},
                {desc:'Laundry and Dry Cleaning',imgUrl:'laund.png'},
                {desc:'Ultilities',imgUrl:'utilities.png'},
                {desc:'Events Management',imgUrl:'camera.png'},
                {desc:'Healthcare and Fitness',imgUrl:'live support agent headset.png'},
                {desc:'Furniture and Fittings',imgUrl:'printer.png'},
                {desc:'Electronics and gadgets',imgUrl:'tv.png'},
                {desc:'Kitchen and Cutleries',imgUrl:'umbrella.png'},
                {desc:'Computers and Accesories',imgUrl:'monitor.png'},
                {desc:'Pharmacies',imgUrl:'mic.png'}
            ]
        }),
    }
</script>