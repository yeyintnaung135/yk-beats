<template>
<div>
      <vue-plyr ref="plyr">
        <video
            controls
            crossorigin
            autoplay="true"
            playsinline
            v-bind:data-poster="image"
        >
            <source
                size="720"
                v-bind:src="data"
                type="video/mp4"
            />
        </video>
    </vue-plyr>
</div>
</template>

<script>

export default {
    props: ['data', 'image'],
    name: "video2",
    mounted:function(){
        this.$refs.plyr.player.play();
    },

}


</script>

<style scoped>

</style>
