<template lang="">
    <div class="flex flex-col pt-12 items-center">
        <div class="md:w-1/2 w-full mb-9 mt-16 text-center flex flex-col items-center justify-center">
            <h1 class="font-bold text-5xl p-2">We are the <span class="half-bg">AWS Club of</span>
                the University of Bamenda
            </h1>
            <p class="mt-5 mb-9 font-semibold w-2/3 text-center">
                This website is your one-stop shop for everything
                related to our exciting club. Whether you're a curious newcomer
                or a seasoned member, we invite you to explore what we have to offer.
            </p>

            <a href="" class="bg-faintblue rounded-full p-2 text-white text-center flex md:w-1/5 items-center justify-center">Our Events <span class="text-xl ml-2"> &#8594;</span></a>

        </div>
        <div class="flex flex-col md:flex-row w-full md:p-0 p-4 md:w-2/3 mx-60">
            <div class="w-full md:w-1/2 flex flex-col items-center">
                <img src="assets/img/events/event1.png" alt="" class="" />
            </div>
            <div class="bg-[#D9D9D9] w-full md:w-1/2 flex flex-col mt-4 md:mt-0 p-4 md:p-16 rounded-r-lg">
                <h3 class="text-4xl font-bold mb-9">
                    Current Event Theme
                    2nd Line(Optional)
                </h3>
                <p class="font-semibold">
                    Right here, in this hallowed space, your
                    brilliant words shall dance across the
                    page, painting a vivid tapestry of your
                    expertise and passion. So grab your
                    metaphorical paintbrush and let your
                    imagination run wild!
                </p>


                <RoundedButton class="mt-9 md:w-1/3" background="orange" text="RSVP Now" textColor="faintblue" w="1/4" to="/"/>
            </div>
        </div>
        <CountDown/>
        <RoundedButton class="my-auto text-white w-1/3 mb-3 block mx-auto" background="faintblue" text="RSVP Now" to="/" />
        <PastEvents/>

    </div>
</template>
<script>
import RoundedButton from '@/Components/General/RoundedButton.vue';
import PastEvents from '@/Components/PastEvents.vue'
import CountDown from '@/Components/CountDown.vue'
export default {
    components: {
        RoundedButton,
        PastEvents,
        CountDown
    }
}
</script>
<style scoped>
.half-bg {
    background: linear-gradient(to top, #FF9900 50%, transparent 50%);
    padding: 0 1.5rem 0 0.25rem;
}
</style>
