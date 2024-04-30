<template lang="">
    <Head title="About"/>
  <AppHeader/>
  <AboutHero/>
  <AppFooter/>
</template>
<script>
import { Head as Head} from '@inertiajs/vue3'
import AppHeader from '@/Components/AppHeader.vue'
import AppFooter from '@/Components/AppFooter.vue'
import AboutHero from '@/Components/AboutHero.vue'
export default {
  components: {
    Head,
    AppHeader,
    AppFooter,
    AboutHero
  }
}
</script>
<style>

</style>
