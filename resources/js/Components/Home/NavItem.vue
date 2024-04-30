<template>
    <li>
      <inertia-link :href="url" :class="{ 'active-link': isActive }">
        {{ text }}
      </inertia-link>
    </li>
  </template>

  <script>
  import { Link as InertiaLink } from '@inertiajs/vue3';
  export default {
    components: {
      InertiaLink
    },
    props: {
      text: {
        type: String,
        required: true
      },
      url: {
        type: String,
        required: true
      }
    },
    computed: {
        isActive() {
        return this.$inertia.page.url === this.url;
        }
    }
  };
  </script>

  <style scoped>
  .active-link {
    border-bottom: 2px solid #FF9900;
    color: orange;
  }
  </style>
