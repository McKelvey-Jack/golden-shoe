<template>
    <div class="home_container">
        <div class="sale_banner_container">
           <img class="sale_image" src="/assets/sale-image.jpeg" alt="">
        </div>
        <div class="sale_links">
            <div class="sale_section_container">
                <h2>Shop Mens</h2>
                <div>
                    <img src="/assets/black-2.jpeg" alt="">
                </div>
            </div>
            <div class="sale_section_container">
                <h2>Shop Womens</h2>
                <div>
                    <img src="/assets/black-2.jpeg" alt="">
                </div>
            </div>
            <div class="sale_section_container">
                <h2>Shop Kids</h2>
                <div>
                    <img src="/assets/black-2.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    }
</script>

<style lang="scss" scoped>

.home_container {
    max-width: 800px;
    margin: 0 auto;
}

.sale_banner_container {
    img {
        height: auto;
        width: 100%;
    }
}

.sale_links {

}

.sale_image {
    width: 100%;
    height: auto;
}

.sale_section_container {
    img {
        height: auto;
        width: 100%;
    }
}


</style>