<template>
    <a class="col-md-3  col-sm-4 col-6 mb-3" href="#">
        <div class="card bg-dark text-center align-items-center shadow">
            <div class="inner">
                <img :src="`/assets/img/cities/${city.imgUrl}`" class="card-img opacity">
                <div class="card-img-overlay text-white  row justify-content-center ">
                    <div class=" align-self-center">
                        <div class="">{{city.name}}</div>
                        <small class="align-middle"><img src="/assets/img/users-white.png" alt=""> 166.5K</small>
                    </div>
                </div>
            </div>
        </div>
    </a>
</template>

<script>
export default {
    name: 'TrendingCityItem',
    props: {
        city: {
            type: Object
        }
    }
}
</script>
