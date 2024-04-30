<template lang="">
    <div class="mt-7 mb-12 md:mb-4">
        <h3 class="font-semibold text-4xl text-center">Sponsor Our Club</h3>
        <p class="mb-3 text-center font-semibold text-faintblue">Have a peek of all activities we carry out on Campus</p>
        <div class="flex flex-col w-full md:h-[443px] justify-center items-center md:flex-row md:space-x-6 mt-9">
            <img src="/assets/img/sponsor.png" class="w-full md:w-1/3" />
            <div class="flex flex-col w-[330px] md:w-1/3 bg-[#D9D9D9] rounded-lg">
                <p class="p-9 text-faintblue">
                    Your contributions are invaluable! We rely on the generosity of
                    volunteers and sponsors to continue providing enriching experiences for our members.
                    To make a donation or explore sponsorship, Enter your name and email here.
                </p>
                <form>
                    <div class="flex flex-col px-9 pb-5 space-y-4">
                        <input
                            v-model="email"
                            placeholder="Enter Your Name"
                            type="text"
                            class="py-2 px-4 w-full rounded-full border-2 border-faintblue bg-[#D9D9D9]"
                        />
                        <input
                            v-model="email"
                            placeholder="Enter Your Phone"
                            type="number"
                            class="py-2 px-4 w-full rounded-full border-2 border-faintblue bg-[#D9D9D9]"
                        />
                        <input
                            v-model="email"
                            placeholder="Enter Your Email"
                            type="email"
                            class="py-2 px-4 w-full rounded-full border-2 border-faintblue bg-[#D9D9D9]"
                        />

                        <button type="submit" class="text-white bg-faintblue mt-2 w-full rounded-full p-3 font-semibold" >Subscribe</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</template>
<script>
export default {

}
</script>
<style>

</style>
