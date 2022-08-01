<template>
  <div id="carousel" class="carousel slide" data-interval="false" >
    <div class="carousel-inner" data-interval="false" >
        <div :class="{active : index === 0}" class="carousel-item" v-for="(image, index) in images" :key="image">
                <img :src="`/assets/${image}.jpeg`" class="d-block w-100 img-responsive" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
         <i class="fas fa-arrow-left arrow" aria-hidden="true"></i>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <i class="fas fa-arrow-right arrow" aria-hidden="true"></i>
    </button>
    </div>
</template>

<script>
    export default {
        props: ['images']
    }
</script>

<style lang="scss" scoped>

.arrow {
    color: black;
    font-size: 1rem;
}

</style>