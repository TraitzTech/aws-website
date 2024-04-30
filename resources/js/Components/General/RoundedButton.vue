<template>
    <inertia-link :href="to" class="rounded-full p-3 font-semibold text-center cursor-pointer"
    :class="{
        ['bg-' + background]: background,
        ['text-' + textColor]: textColor,
        ['w-' + width]: width,
    }">{{text}}</inertia-link>
</template>

<script>
import { Link as InertiaLink} from '@inertiajs/vue3'
export default {
    components: {
        InertiaLink
    },
    props:{
        background: String,
        text: String,
        textColor: String,
        to: String,
        width: String,
    }
}
</script>

<style>

</style>
