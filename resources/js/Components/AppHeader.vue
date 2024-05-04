<template>
    <div class="w-[400px] md:w-full bg-faintblue h-[92px] fixed top-0 z-50">
      <nav class="flex flex-row justify-between">
        <inertia-link href="/" class="logo-link">
          <img :src="logo" class="w-40 h-20 md:ml-32 py-auto" />
        </inertia-link>
        <div class="flex md:hidden flex-row items-center mr-8">
            <button @click="toggleMenu" class="text-orange focus:outline-none">
              <span class="text-3xl mr-3" v-if="!showMenu" >&#9776;</span>
              <span class="text-3xl mr-3" v-else>&#10006;</span>
            </button>
        </div>
        <div class="hidden sm:flex">
          <ul class="flex flex-row text-white my-auto mr-40 space-x-8 font-semibold">
            <NavItem text="Home" url="/" />
            <NavItem text="About Us" url="/about" />
            <NavItem text="Events" url="/events" />
            <NavItem text="Contact Us" url="/contact" />
            <li>
              <RoundedButton
                class="text-faintblue w-1/4"
                background="orange"
                text="RSVP Now"
                to="/"
              />
            </li>
          </ul>
        </div>
      </nav>
      <div v-if="showMenu" class="sm:hidden">
        <!-- Responsive menu -->
        <ul class="flex flex-col text-white bg-faintblue my-2 p-8 w-full space-y-4 font-semibold">
            <NavItem text="Home" url="/" />
            <NavItem text="About Us" url="/about" />
            <NavItem text="Events" url="/events" />
            <NavItem text="Contact Us" url="/contact" />
          <li>
            <RoundedButton
              class="text-faintblue w-1/4"
              background="orange"
              text="RSVP Now"
              to="/"
            />
          </li>
        </ul>
      </div>
    </div>
  </template>

  <script>
  import NavItem from '@/Components/Home/NavItem.vue';
  import RoundedButton from '@/Components/General/RoundedButton.vue';
  import { Link as InertiaLink } from '@inertiajs/vue3';

  export default {
    name: 'AppHeader',
    components: {
        InertiaLink,
        NavItem,
        RoundedButton
    },
    data() {
      return {
        logo: 'assets/img/logo.png',
        showMenu: false,
        currentRoute: ''
      };
    },
    created() {
        if (this.$route) {
            this.currentRoute = this.$route.path;
        }
    },
    methods: {
      toggleMenu() {
        this.showMenu = !this.showMenu; // Toggle menu state
      },
      isActive(route) {
        return this.currentRoute === route;
      }
    },
    watch: {
      $route(to) {
        this.currentRoute = to.path;
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
