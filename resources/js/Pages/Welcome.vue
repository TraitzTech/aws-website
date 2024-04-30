<script>
  import AppHeader from '@/Components/AppHeader.vue'
  import AppFooter from '@/Components/AppFooter.vue'
  import HomeHero from '@/Components/HomeHero.vue'
  import { Head as Head} from '@inertiajs/vue3';

  export default {
    components: {
        Head,
        AppHeader,
        HomeHero,
        AppFooter
    }
  }
</script>

<template>
    <Head title="Home" />
    <div class="home overflow-x-hidden" >
      <AppHeader />
      <HomeHero />
      <AppFooter />
    </div>
</template>
<style>
</style>

