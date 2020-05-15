<template>
    <!-- Trending Cities -->
    <section class="product-widget  mt-5  mb-5">
        <div class="header-title pb-2 mb-3">
            <span class="intro-title">Trending Cities</span>
        </div>

        <div class="row">
            <trending-city-item v-for="(tcity, key) in trendingCities" 
                :key="key"
                :city="tcity" 
            />
        </div>
    </section>
</template>

<script>
import TrendingCityItem from '~/components/TrendingCityItem'

export default {
  name: 'TrendingCities',
  components:{TrendingCityItem},
  data: () => ({
    trendingCities: [
        {name:'Calabar',imgUrl:'calabar.png'},
        {name:'Port Harcourt',imgUrl:'Port Harcourt.png'},
        {name:'Lagos',imgUrl:'lagos.png'},
        {name:'Ibadan',imgUrl:'ibadan.png'},
        {name:'Abuja',imgUrl:'abuja.png'},
        {name:'Kaduna',imgUrl:'Kaduna.png'},
        {name:'Maidugri',imgUrl:'Maidugri.png'},
        {name:'Abeokuta',imgUrl:'Abeokuta.png'},
    ]
  }),
}
</script>
