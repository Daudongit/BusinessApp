<template>
  <!-- <div class="main-layout">
    <navbar />

    <div class="container mt-4">
      <child />
    </div>
  </div> -->
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
  name: 'MainLayout',

  components: {
    VHeader,VFooter
  }
}
</script>
