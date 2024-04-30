<template lang="">
    <section class="bg-[#F1F3F3] dark:bg-slate-800 mt-9" id="contact">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
            <div class="mb-4">
                <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                    <h2
                        class="font-heading font-bold tracking-tight text-faintblue dark:text-white text-3xl sm:text-5xl">
                        Get in Touch
                    </h2>
                    <p class="mx-auto mt-4 max-w-3xl text-xl text-faintblue dark:text-slate-400">We'd love to hear from you. Whether you have a question about AWS, our projects, events, or anything else, our team is ready to answer all your questions.
                    </p>
                </div>
            </div>
            <div class="flex items-stretch justify-center">
                <div class="grid md:grid-cols-2">
                    <div class="h-full pr-6">
                        <p class="mt-3 mb-12 text-lg text-faintblue dark:text-slate-400">
                            The AWS Student Club of The University of Bamenda is a community-driven group that is passionate about Amazon Web Services and cloud computing. We welcome students from all backgrounds and skill levels to join us in learning and growing together.
                        </p>
                        <ul class="mb-6 md:mb-0">
                            <li class="flex">
                                <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-6 w-6">
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path
                                            d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-4 mb-4">
                                    <h3 class="mb-2 text-lg font-medium leading-6 text-faintblue dark:text-white">Our Address
                                    </h3>
                                    <p class="text-faintblue dark:text-slate-400">University of Bamenda</p>
                                    <p class="text-faintblue dark:text-slate-400">Bamenda, Cameroon</p>
                                </div>
                            </li>
                            <li class="flex">
                                <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-6 w-6">
                                        <path
                                            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                        </path>
                                        <path d="M15 7a2 2 0 0 1 2 2"></path>
                                        <path d="M15 3a6 6 0 0 1 6 6"></path>
                                    </svg>
                                </div>
                                <div class="ml-4 mb-4">
                                    <h3 class="mb-2 text-lg font-medium leading-6 text-faintblue dark:text-white">Contact
                                    </h3>
                                    <p class="text-faintblue dark:text-slate-400">Mobile: +237 (123) 456-7890</p>
                                    <p class="text-faintblue dark:text-slate-400">Mail: awsclub@ubamenda.cm</p>
                                </div>
                            </li>
                            <li class="flex">
                                <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-6 w-6">
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                        <path d="M12 7v5l3 3"></path>
                                    </svg>
                                </div>
                                <div class="ml-4 mb-4">
                                    <h3 class="mb-2 text-lg font-medium leading-6 text-faintblue dark:text-white">Working
                                        hours</h3>
                                    <p class="text-faintblue dark:text-slate-400">Monday - Friday: 08:00 - 17:00</p>
                                    <p class="text-faintblue dark:text-slate-400">Saturday &amp; Sunday: Closed</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
                        <h2 class="mb-4 text-2xl font-bold dark:text-white">Ready to Get Started?</h2>
                        <form id="contactForm" @submit.prevent="submit">
                            <div class="mb-6">
                              <div class="mx-0 mb-1 sm:mb-4">
                                <label for="name" class="pb-1 text-xs uppercase tracking-wider">Your name</label>
                                <input type="text" id="name" autocomplete="given-name" placeholder="Your name" v-model="form.name" class="mb-2 w-full rounded-full border-2 border-faintblue py-2 pl-4 bg-[#D9D9D9] pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="name">
                                <p class="text-red-500" v-if="form.errors.name">{{ form.errors.name }}</p>
                              </div>
                              <div class="mx-0 mb-1 sm:mb-4">
                                <label for="email" class="pb-1 text-xs uppercase tracking-wider">Your email address</label>
                                <input type="email" id="email" autocomplete="email" placeholder="Your email address" v-model="form.email" class="mb-2 w-full rounded-full border-2 border-faintblue py-2 bg-[#D9D9D9] pl-4 pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="email">
                                <p class="text-red-500" v-if="form.errors.email">{{ form.errors.email }}</p>
                              </div>
                            </div>
                            <div class="mx-0 mb-1 sm:mb-3">
                              <label for="textarea" class="pb-1 text-xs uppercase tracking-wider">Write your message...</label>
                              <textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="Write your message..." v-model="form.message" class="mb-2 w-full rounded-md border-2 py-2 pl-2 pr-4 bg-[#D9D9D9] shadow-md dark:text-gray-300 sm:mb-0"></textarea>
                              <p class="text-red-500" v-if="form.errors.message">{{ form.errors.message }}</p>
                            </div>
                            <div class="text-center">
                              <button type="submit" class="w-full bg-faintblue text-white px-6 py-3 font-xl rounded-full sm:mb-0">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  name: '',
  email: '',
  message: '',
  errors: {},
});
const submit = () => {
  form.post(route('contact.submit'));
};
</script>
<style>

</style>
