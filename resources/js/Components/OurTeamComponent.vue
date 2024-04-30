<template lang="">
    <h3 class="font-semibold text-4xl text-center">Meet Our Team</h3>
    <p class="mb-3 text-center font-semibold">Our dedicated team of cloud innovators</p>
    <div id="team" class="flex flex-col md:w-[1329px] h-[1492px] space-y-3 mb-12 mx-auto">

        <div class="flex flex-row px-5 md:px-0 rounded-lg md:h-full h-[231px] space-x-3">
            <TeamMember class="hidden md:block" imageUrl="assets/img/team/delia.png" name="Delia Ayoko" position="Cloud Captain" />
            <TeamMember class="md:hidden" imageUrl="assets/img/team/mobile/Delia@Mobile.png" name="Delia Ayoko" position="Cloud Captain" />
            <TeamMember class="md:hidden" imageUrl="assets/img/team/mobile/Fien@Mobile.png" name="Ngumih Fien" position="Co-Captain" />
            <TeamMember class="hidden md:block" imageUrl="" name="Ngumih Fien" position="Co-Captain" />
            <TeamMember class="hidden md:block" imageUrl="assets/img/team/jemuel.png" name="Rinuel Jemuel" position="Content Creator" />
            <TeamMember class="hidden md:block" imageUrl="assets/img/team/desmond.png" name="Neba Desmond" position="Project Manager" />
        </div>

        <div class="flex flex-row px-5 md:px-0 rounded-lg md:h-full h-[231px] space-x-3">
            <TeamMember class="hidden md:block" imageUrl="" name="Nani Stephanie" position="Content Creator" />
            <TeamMember class="md:hidden" imageUrl="assets/img/team/mobile/Jemual@Mobile.png" name="Rinuel Jemuel" position="Content Creator" />
            <TeamMember class="md:hidden" imageUrl="assets/img/team/mobile/Desomond@Mobile.png" name="Neba Desmond" position="Project Manager" />
            <TeamMember class="hidden md:block" imageUrl="assets/img/team/Denzel.png" name="Nchang Denzel" position="Workshop Facilitator" />
            <TeamMember class="hidden md:block" imageUrl="assets/img/team/Alvin.png" name="Wunjah Alvine" position="Event Planner" />
            <TeamMember class="hidden md:block" imageUrl="assets/img/team/Edrick.png" name="Fonguong Edrick" position="Technical Support" />
        </div>
        <div class="flex flex-row px-5 md:px-0 rounded-lg md:h-full h-[231px] space-x-3">
            <TeamMember class="hidden md:block" imageUrl="assets/img/team/Kelly.png" name="Kinyuy Kelly" position="Graphic Desiger" />
            <TeamMember class="md:hidden" imageUrl="" name="Nani Stephanie" position="Content Creator" />
            <TeamMember class="md:hidden" imageUrl="assets/img/team/mobile/Denzel@Mobile.png" name="Nchang Denzel" position="Worlkshop Facilitator" />
            <TeamMember class="hidden md:block" imageUrl="assets/img/team/Butlar.png" name="Ngum Butlar" position="Graphic Designer" />
            <TeamMember class="hidden md:block" imageUrl="assets/img/team/jean.png" name="Jean Mofiro" position="Operations Manger" />
            <TeamMember class="hidden md:block" imageUrl="assets/img/team/wesley.png" name="Akumbom Wesley" position="Peer Manager" />
        </div>

        <div class="md:hidden flex flex-row px-5 md:px-0 rounded-lg md:h-full h-[231px] space-x-3">
            <TeamMember imageUrl="assets/img/team/mobile/Alvin@Mobile.png"/>
            <TeamMember imageUrl="assets/img/team/mobile/Edrick@Mobile.png"/>
        </div>
        <div class="md:hidden flex flex-row px-5 md:px-0 rounded-lg md:h-full h-[231px] space-x-3">
            <TeamMember imageUrl="assets/img/team/mobile/Kelly@Mobile.png"/>
            <TeamMember imageUrl="assets/img/team/mobile/Butlar@Mobile.png"/>
        </div>
        <div class="md:hidden flex flex-row px-5 md:px-0 rounded-lg md:h-full h-[231px] space-x-3">
            <TeamMember imageUrl="assets/img/team/mobile/Jean@Mobile.png"/>
            <TeamMember imageUrl="assets/img/team/mobile/Wesley@Mobile.png"/>
        </div>

    </div>
</template>
<script>
import TeamMember from '@/Components/TeamMember.vue'
export default {
    components: {
        TeamMember
    }
}
</script>
<style>

</style>
