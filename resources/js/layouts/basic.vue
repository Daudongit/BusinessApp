<template>
  <div>
    <v-header />
      <main class="container">
        <child />
      </main>
    <v-footer />
  </div>
</template>

<script>
// import Navbar from '~/components/Navbar'
import VHeader from '~/components/VHeader'
import VFooter from '~/components/VFooter'

export default {
  name: 'BasicLayout',

  components: {
    VHeader,VFooter
  }
}
</script>
