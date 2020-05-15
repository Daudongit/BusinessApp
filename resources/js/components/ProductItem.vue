<template>
    <div class="w-100">
        <div class="img-wrap product-image" :style="`background-image: url('assets/img/${product.imgUrl}');`">
            <span class="float-left  left-stat">
                <img src="assets/img/heart-outline.png" alt="">
            </span>
            <span class="float-right right-stat">
                <small>{{product.percent}}</small>
            </span>
        </div>
        <small class="text-black stores">{{product.title}}</small>
        <div class="divider-product mx-auto"></div>
        <div class="info-wrap  pl-2 pr-2">
            <div class="product-title text-truncate ">
                <a href="#">{{product.sub_title}}</a>
            </div>
            <small class="des-sm text-black">{{product.des}}</small>
            <div class="small-footer mt-1 mb-2">
                <span class="float-left product-price">
                    <small>{{product.price}}</small>  <small class="ml-1 text-muted discounted">{{product.discounted}}</small>
                </span>
            </div>
            <!-- price-wrap.// -->
        </div>
    </div>
</template>

<script>
export default {
    name: 'ProductItem',
    props: {
        product: {
            type: Object
        }
    }
}
</script>
