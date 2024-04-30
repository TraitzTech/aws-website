<template lang="">
    <div class="flex flex-col md:flex-row bg-[#D9D9D9] py-12 justify-between md:pl-24 items-center">
        <div class="md:hidden flex flex-col md:ml-32 p-auto md:p-0">
            <inertia-link href="">
                <h3 class="py-auto font-semibold w-[300px] md:w-1/2 text-lg">Subscribe to our newsletter and
                    receive more updates about our
                    upcoming events </h3>

            </inertia-link>
            <div class="mt-3">
                <form @submit.prevent="submitForm">
                    <div class="flex flex-col">
                        <input
                            v-model="email"
                            placeholder="Enter Your Email"
                            type="email"
                            class="py-2 px-4 w-full md:w-1/2 rounded-full border-2 border-faintblue bg-[#D9D9D9]"
                            @input="validateEmail"
                        />
                        <p v-if="emailError" class="text-red-500">{{ emailError }}</p>
                        <p v-else-if="email && !emailError" class="text-green-500">Email is valid</p>
                        <button type="submit" class="text-white bg-faintblue mt-2 w-full md:w-1/2 rounded-full p-3 font-semibold" >Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex flex-col">
            <inertia-link href="">
                <img src="assets/img/footer-logo.png" class="w-40 h-20 md:ml-32 py-auto" />
            </inertia-link>
            <div class="md:ml-32 font-semibold">
                <p>Bamenda, Cameroon</p>
                <p>677802114</p>
                <p>awsstudentclub@gmail.com</p>
            </div>
        </div>
        <div class="hidden md:flex flex-col">
            <inertia-link href="">
                <h3 class="md:ml-32 py-auto font-bold">Links</h3>

            </inertia-link>
            <div class="mt-3 leading-8">
                <inertia-link href="/">
                    <h3 class="md:ml-32 py-auto font-semibold underline">Home</h3>
                </inertia-link>
                <inertia-link href="/about">
                    <h3 class="md:ml-32 py-auto font-semibold underline">Activities</h3>
                </inertia-link>
                <inertia-link href="/about">
                    <h3 class="md:ml-32 py-auto font-semibold underline">Donations</h3>
                </inertia-link>
                <inertia-link href="/about">
                    <h3 class="md:ml-32 py-auto font-semibold underline">About Us</h3>
                </inertia-link>
            </div>
        </div>
        <div class="hidden md:flex flex-col">
            <inertia-link href="">
                <h3 class="md:ml-32 py-auto font-bold">Social Media</h3>

            </inertia-link>
            <div class="mt-3 leading-8">
                <a href="">
                    <h3 class="md:ml-32 py-auto font-semibold underline">WhatsApp</h3>
                </a>
                <a href="">
                    <h3 class="md:ml-32 py-auto font-semibold underline">LinkedIn</h3>
                </a>
                <a href="">
                    <h3 class="md:ml-32 py-auto font-semibold underline">X(Twitter)</h3>
                </a>
                <a href="">
                    <h3 class="md:ml-32 py-auto font-semibold underline">Instagram</h3>
                </a>
            </div>
        </div>
        <div class="md:hidden flex flex-row p-4 space-x-24">
            <div class="flex flex-col">
                <inertia-link href="/">
                    <h3 class="md:ml-32 py-auto font-bold">Links</h3>

                </inertia-link>
                <div class="mt-3 leading-8">
                    <inertia-link href="/">
                        <h3 class="md:ml-32 py-auto font-semibold underline">Home</h3>
                    </inertia-link>
                    <inertia-link href="/about">
                        <h3 class="md:ml-32 py-auto font-semibold underline">Activities</h3>
                    </inertia-link>
                    <inertia-link href="/about">
                        <h3 class="md:ml-32 py-auto font-semibold underline">Donations</h3>
                    </inertia-link>
                    <inertia-link href="/about">
                        <h3 class="md:ml-32 py-auto font-semibold underline">About Us</h3>
                    </inertia-link>
                </div>
            </div>
            <div class="flex flex-col">
                <inertia-link href="">
                    <h3 class="md:ml-32 py-auto font-bold">Social Media</h3>

                </inertia-link>
                <div class="mt-3 leading-8">
                    <a href="">
                        <h3 class="md:ml-32 py-auto font-semibold underline">WhatsApp</h3>
                    </a>
                    <a href="">
                        <h3 class="md:ml-32 py-auto font-semibold underline">LinkedIn</h3>
                    </a>
                    <a href="">
                        <h3 class="md:ml-32 py-auto font-semibold underline">X(Twitter)</h3>
                    </a>
                    <a href="">
                        <h3 class="md:ml-32 py-auto font-semibold underline">Instagram</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="hidden md:flex flex-col md:ml-32 p-auto md:p-0">
            <inertia-link href="">
                <h3 class="py-auto font-semibold w-[300px] md:w-1/2 text-lg">Subscribe to our newsletter and
                    receive more updates about our
                    upcoming events </h3>

            </inertia-link>
            <div class="mt-3">
                <form @submit.prevent="submitForm">
                    <div class="flex flex-col">
                        <input
                            v-model="email"
                            placeholder="Enter Your Email"
                            type="email"
                            class="py-2 px-4 w-full md:w-1/2 rounded-full border-2 border-faintblue bg-[#D9D9D9]"
                            @input="validateEmail"
                        />
                        <p v-if="emailError" class="text-red-500">{{ emailError }}</p>
                        <p v-else-if="email && !emailError" class="text-green-500">Email is valid</p>
                        <button type="submit" class="text-white bg-faintblue mt-2 w-full md:w-1/2 rounded-full p-3 font-semibold" >Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="flex bg-faintblue w-full h-[64px] justify-center items-center text-white text-center">
        <p class="py-auto">© {{ currentYear }} By <a href="https://traitz.tech" class="font-bold italic">Traitz Tech</a>. All Rights Reserved</p>
    </div>
</template>
<script>
import { Link as InertiaLink} from '@inertiajs/vue3'
export default {
    components: {
        InertiaLink
    },
    data() {
        return {
            email: '',
            emailError: '',
            currentYear: new Date().getFullYear()
        }
    },
    methods: {
        /* eslint-disable */
        validateEmail() {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            this.emailError = re.test(String(this.email).toLowerCase()) ? '' : 'Invalid email';
        },
        submitForm() {
            if (!this.email) {
                this.emailError = 'Please fill the email field';
            } else if (!this.emailError) {
                // Submit the form
            }
        }
    }
}
</script>
<style>

</style>
