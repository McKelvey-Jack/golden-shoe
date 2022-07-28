<template>
  <div id="carousel" class="carousel slide" data-interval="false" >
    <div class="carousel-inner" data-interval="false" >
        <div :class="{active : index === 0}" class="carousel-item" v-for="(image, index) in images" :key="image">
                <img :src="`/assets/${image}.jpeg`" class="d-block w-100 img-responsive" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</template>

<script>
    export default {
        props: ['images']
    }
</script>

<style lang="scss" scoped>

</style>