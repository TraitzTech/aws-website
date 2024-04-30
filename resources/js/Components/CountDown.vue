<template lang="">
    <div class="mt-7 mb-3">
        <h3 class="text-center text-2xl font-semibold">Our next event Starts in</h3>
        <h1 class="md:text-[5rem] px-2 text-5xl text-center text-faintblue mt-4 mb-4 md:mb-7 font-semibold">
            {{ hours }}h {{ minutes }}m <span class="text-orange">{{ seconds }}s</span>
        </h1>
        <div class="flex flex-col md:flex-row w-full justify-center md:space-x-2 space-y-2 md:space-y-0 items-center">
            <div class="flex flex-col w-[328px] bg-[#D9D9D9] p-2 rounded-lg items-center text-center">
                <h3 class="text-lg text-faintblue font-semibold">Event Title</h3>
                <p>Give a brief description of the Event and usually make it short so it is not boring to the reader.</p>
            </div>
            <div class="flex flex-row w-[330px] md:w-[228px] bg-[#D9D9D9] py-5 space-x-5 pl-7 items-center text-center rounded-lg">
                <h3 class="text-6xl font-semibold text-orange">{{date}}</h3>
                <p class="w-1/3 text-4xl">
                    {{ month }}
                    {{ year }}
                </p>
            </div>

        </div>


    </div>

</template>
<script>
export default {
    components:{

    },
    data() {
        return {
            targetDate: new Date('2024-04-29T12:00:00'), // My target date
            hours: 0,
            minutes: 0,
            seconds: 0,
            date: 0,
            month: '',
            year: 0
        }
    },
    created() {
        this.updateCountdown();
        this.interval = setInterval(this.updateCountdown, 1000);
        this.date = this.targetDate.getDate();
        this.month = this.targetDate.toLocaleString('default', { month: 'long' });
        this.year = this.targetDate.getFullYear();
    },
    beforeUnmount() {
        clearInterval(this.interval);
    },
    methods: {
        updateCountdown() {
            const now = new Date();
            const diff = this.targetDate - now;

            this.hours = Math.floor(diff / (1000 * 60 * 60));
            this.minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            this.seconds = Math.floor((diff % (1000 * 60)) / 1000);
        }
    }
}
</script>
<style>

</style>
