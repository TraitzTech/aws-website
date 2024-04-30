<template lang="">
    <Head title="Contact Us" />
    <AppHeader/>
    <ContactHero/>
    <AppFooter/>
</template>
<script>
import AppHeader from '@/Components/AppHeader.vue'
import AppFooter from '@/Components/AppFooter.vue'
import ContactHero from '@/Components/ContactHero.vue'
import {Head as Head} from '@inertiajs/vue3'
export default {
    components: {
        Head,
        AppHeader,
        AppFooter,
        ContactHero
    }
}
</script>
<style>

</style>
