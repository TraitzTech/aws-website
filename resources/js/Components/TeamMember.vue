<template>
    <div class="w-1/2 md:w-1/4 md:h-[447px] rounded-lg relative"
      :style="{ backgroundImage: `url(${imageUrl})` }"
    >
        <div id="details" class="hidden absolute md:flex flex-col bottom-3 mx-3 bg-[#7C5AED] p-3 md:w-[292px] rounded-lg">
            <h3 class="text-white text-lg font-bold">{{ name }}</h3>
            <p class="text-white text-sm">{{ position }}</p>
        </div>
    </div>
</template>

<script>
  export default {
    props: {
      imageUrl: String,
      name: String,
      position: String,
    },
  };
</script>

<style scoped>
</style>
