<template>
    <div class="w-100">
        <div class="img-wrap product-image" :style="`background-image: url('/assets/img/${service.imgUrl}');`">
            <span class="float-left  left-stat">
                <img src="/assets/img/disc.svg" alt="">
            </span>
            <span class="float-right right-stat">
                <img src="/assets/img/users.png" alt="">
                <small>{{service.views}}</small>
            </span>
        </div>
        <div class="divider-product mx-auto"></div>
        <div class="info-wrap  pl-2 pr-2">
            <div class="product-title text-truncate ">
                <a href="#">{{service.title}}</a>
            </div>
            <small class="des-sm ">{{service.category}}</small>
            <div class="small-footer mt-1 mb-2">
                <span class="float-left">
                    <img src="/assets/img/home.png" alt=""> <small>{{service.location}}</small>
                </span>

                <span class="float-right">
                    <img src="/assets/img/truck.png" alt=""> <small>{{service.distance}}</small>
                </span>
            </div>
            <!-- price-wrap.// -->
        </div>
    </div>
</template>

<script>
export default {
    name: 'ServiceItem',
    props: {
        service: {
            type: Object
        }
    }
}
</script>
