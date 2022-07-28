<template>
  <nav class="nav_bar">
    <div class="logo_container" :style="!mobileView ? 'margin-left: 8px' : ''">
        <button v-if="mobileView" class="burger">
            <i v-if="navOpen" @click="navOpen = false" class="fas fa-times"></i>
            <i v-else @click="navOpen = true" class="fas fa-bars "></i>
        </button>
        <a class="brand_name" href="/">Golden Shoe</a>
    </div>
        <ul v-if="!mobileView || mobileView && navOpen " :class="mobileView ? 'mobile_list' : 'nav_list'">
            <li v-for="type in shoeTypes" :key="type">
               <a class="list_item" v-bind:href="route('products.index')">{{type}} <span v-if="mobileView"> <i v-if="mobileView" class="fas fa-chevron-right arrow"></i></span></a>
            </li>
            <li class="list_item">
                <i class="fas fa-search"></i>
            </li>
        </ul>
  </nav>
</template>

<script>

    export default {
        data() {
            return {
                shoeTypes: ['Mens', 'Womens','kids', 'accessories', 'sale'],
                screenWidth: window.innerWidth,
                navOpen: false,
            }
        },
        created() {
            window.addEventListener("resize", this.onResize);
        },
        destroyed() {
            window.removeEventListener("resize", this.onResize);
        },
        methods: {
            onResize(e) {
                this.screenWidth = window.innerWidth
            }
        },
        computed: {
            mobileView() {
                return this.screenWidth < 576
            }
        },
        watch: {
            mobileView() {
                this.navOpen = false
            }
        }
    }
</script>

<style lang="scss" scoped>

.nav_bar {
    display: flex;
    align-items: baseline;
    border-bottom: 1px solid gray;
}

.brand_name {
    font-size: 1.2rem;
    color: maroon;
}

.logo_container {
    height: 4rem;
    display: flex;
    align-items: center;
    min-width: 120px;
}

.burger {
    background: none;
    outline: none;
    border: none;
    font-size: 2rem;
    min-width: 50px;
}

.mobile_list {
    display: flex;
    flex-direction: column;
    width: 75%;
    position: absolute;
    left: 0;
    top: 4.1rem;
    z-index: 1;
    .list_item{
        height: 64px;
        border-bottom: 1px solid #e7e7e7;
        background: #f7f7f7;
        padding: 22px 30px 0 30px;
        position: relative;
        display: block;
    }
    li:hover {
        cursor: pointer;
    }
    a:hover {
        color: black;
    }
    .arrow {
        position: absolute;
        right: 10px;
    }
}

.nav_list {
    display: flex;
    justify-content: space-around;
    height: 100%;
    width: 100%;
    align-items: center;
    a:hover {
        color: maroon;
    }
}

 li:hover {
    cursor: pointer;
}
</style>