<template>
    <div class="home_container">
        <div class="sale_banner_container">
           <img class="sale_image" src="/assets/sale-image.jpeg" alt="">
        </div>
        <div class="sale_links">
            <div class="sale_section_container" v-for="item in saleLinks" :key="item.name">
                    <a :href="route('products.show', 1)">
                        <img class="sale_image" :src="`/assets/${item.image}.jpeg`" alt="product_image">
                    </a>
                <h2 class="sale_section_header">Shop {{item.name}}</h2>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                saleLinks: [
                    {name: 'mens', image: 'black-1'},
                    {name: 'womens', image: 'black-2'},
                    {name: 'kids', image: 'black-3'},
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>

.home_container {
    max-width: 800px;
    margin: 0 auto;
}

.sale_banner_container {
    margin-bottom: 1rem;
    img {
        height: auto;
        width: 100%;
    }
}

.sale_section_header {
    text-align: center;
}

.sale_section_header:hover {
    color: maroon;
    cursor: pointer;
    text-transform: capitalize;
}

.sale_image {
    width: 100%;
    height: auto;
}

@media screen and (min-width: 576px) {
    .sale_links {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin: 1rem;
    }
}


</style>