<template lang="">
    <div class="flex flex-col p-2 md:p-9">
        <div class="flex justify-center items-center text-center mt-24">
            <h1 class="text-5xl font-bold w-full md:w-1/2 p-2">About the AWS Club of
                the University of Bamenda
            </h1>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center p-4">
            <img src="assets/img/about/about.png" alt="About Hero" class="w-full md:w-1/3"/>
            <p class="w-full md:w-1/3 mt-4 md:mt-0 md:text-start text-center p-2 md:p-9 font-semibold">
                Our club is dedicated to helping the Bamenda community and beyond with basic knowledge
                on cloud though regularly hoisted free workshops. We foster a community of passionate
                individuals who share a love for Cloud. Through engaging activities, workshops, and events,
                we provide a platform for members to connect, learn, and grow.
            </p>
        </div>

    </div>
    <OurTeamComponent/>
    <OurActivities/>
    <CountDown/>
    <RoundedButton class="my-auto text-white w-1/3 mb-3 block mx-auto" background="faintblue" text="RSVP Now" to="/" />
    <SponsorUs/>
</template>
<script>
import OurTeamComponent from '@/Components/OurTeamComponent.vue'
import CountDown from '@/Components/CountDown.vue'
import RoundedButton from '@/Components/General/RoundedButton.vue'
import OurActivities from '@/Components/OurActivities.vue'
import SponsorUs from './SponsorUs.vue'
export default {
    components: {
        OurTeamComponent,
        CountDown,
        RoundedButton,
        OurActivities,
        SponsorUs
    }
}
</script>
<style>

</style>
