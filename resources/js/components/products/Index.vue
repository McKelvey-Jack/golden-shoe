<template>
    <div v-if="!loading">
        <h1 class="header"> Mens Shoes</h1>
        <div class="filters_container">
            <button class="filter_button">Sort <span><i class="fas fa-chevron-down icon"></i></span></button>
            <button class="filter_button">Filter<span><i class="fas fa-chevron-down icon"></i></span></button>
        </div>
        <section class="products_list_container">
            <div class="product_list_outer">
                <ul class="product_list">
                    <li class="product_list_item" v-for="product in products" :key="product.id">
                        <div class="image_container">
                            <a :href="route('products.show', 1)">
                                <img :src="`/assets/${product.list_image_path}.jpeg`" alt="product_image">
                            </a>
                        </div>
                        <div>
                            <p class="product_name">
                                {{product.name}}
                            </p>
                        </div>
                        <div>
                            <p class="price">£{{product.price}}</p>
                        </div>
                    </li>
                </ul>

            </div>
        </section>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                products: null,
                loading: true,                
            }
        },
        methods: {
            getProducts() {
                Vue.axios.get(route('get_products'),{
                    params: {
                        type: 'men'
                    }
                }).then(({data})=>{
                    this.products = data
                }).catch((err)=>{
                    console.log(err)
                }).finally(()=>{
                    this.loading = false
                })
            }
        },
        mounted() {
            this.getProducts()
        }
        
    }
</script>

<style lang="scss" scoped>

.header {
    width: 100%;
    text-align: center;
    font-size: 2rem;
    margin-top: 1rem;
}

.filters_container {
    background-color:#e4e4e4;
    padding: 4px 16px;
    .filter_button {
        padding: 4px 8px;
        margin: 6px 0px;
        border-top: 1px solid #bdbdbdb3;
        border-bottom: 1px solid #bdbdbdb3;
        border-left: none;
        border-right: none;
        background: none;
        color: gray;
        .icon {
            margin-left: 6px;
        }
    }
}

.products_list_container {
    width: 100%;
    padding: 0 1rem 3rem;
    margin-top: 1rem;
}
.product_list_outer {
    height: 100%;
    margin: 0 auto;
    max-width: 576px;
    width: 100%;
}

.product_list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    li {
        width: 100%;
    }
    img {
        max-width: 100%;
        width: 100%;
        height: auto;
    }
    .product_name {
        font-size: .9rem;
    }
}

@media screen and (min-width: 768px) and (max-width:1203px) {
        .product_list {
        grid-template-columns: repeat(3,1fr);
    }
    .product_list_outer {
        max-width: 1366px;
    }
}

@media screen and (min-width: 1204px) {
    .product_list {
        grid-template-columns: repeat(4,1fr);
    }
    .product_list_outer {
        max-width: 1366px;
    }
}


</style>