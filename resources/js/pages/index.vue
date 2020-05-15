<template>
  <div>
    <slider/>
    <items-widget title="Services near you" type="services" selector="nearbyservice"/>
    <items-widget title="Trending Services" type="services" selector="trendingservice"/>
    <items-widget title="Top Deals" type="products" selector="topdeal"/>
    <items-widget title="Top Products" type="products" selector="topproduct"/>
    <trending-cities />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Slider from '~/components/Slider'
import ItemsWidget from '~/components/ItemsWidget'
import TrendingCities from '~/components/TrendingCities'

export default {
  layout: 'basic',

  components: {
    Slider,ItemsWidget,TrendingCities
  },

  metaInfo () {
    return { title: 'Landing' }
  },

  data: () => ({
    title: window.config.appName
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  })
}
</script>

<style scoped>

</style>
