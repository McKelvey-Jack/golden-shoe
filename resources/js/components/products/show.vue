<template>
<div v-if="!loading">
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
    <div class="aside_content">
        <h1>{{productData.info.name}}</h1>
        <p class="price">£{{productData.info.price}}</p>
        <div class="size_section">
            <label class="size_label" for="">size:</label>
            <select class="size_select" name="" id="">
                <option value="">Please Select</option>
                <option :disabled="item.quantity === 0" v-for="item in productData.stock" 
                    :key="item.size" 
                    value="">{{item.size}} 
                    <span v-if="item.quantity === 0">Out Of Stock</span> 
                </option>
            </select>
        </div>
        <button type="button" class="btn btn-success add_to_basket_button">Add to Basket</button>
        <div class="size_guide">
            <p>Size Help:</p>
            <p>Unsure on size? <span class="size_guide_link"> find your recommended size</span></p>
        </div>
    </div>
    <div class="product_details">
        <h2>Product Details</h2>
        <ol class="product_details_list">
            <li v-for="(value, key) in productData.info.details" :key="key">{{value}}</li>
        </ol>
    </div>
</div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                productData: null,
                images: ['black-1', 'black-2', 'black-3', 'black-4'],
                loading: true,
                reviewData: null
            }
        },
        methods: {
            getProduct() {
                Vue.axios.get(route('get_product', {id: this.id}))
                .then(({data})=>{
                    this.productData = data
                }).catch((err)=>{
                    console.log(err)
                }).finally(()=>{
                    this.loading = false
                })
            },
            getReviews() {
                Vue.axios.get(route('get_reviews'), {id: this.id})
                .then(({data})=>{
                    this.reviewData = data
                }).catch((err)=>{
                    console.log(err)
                })
            }
        },
        mounted() {
            this.getProduct()
            this.getReviews()
        }
        
    }
</script>

<style lang="scss" scoped>

.aside_content {
    margin: 4px 8px;
    h1 {
        margin-top: 1rem;
    }
}
.size_section {
    margin: 1rem 0rem;
    .size_label {
        text-transform: uppercase;
        font-weight: 900;
    }
    .size_select {
        padding: 2px 6px;
        border-color: #bdbdbdb3;
        width: 100%;
        margin-top: 4px;
    }
    .size_select:focus-visible {
        outline: none;
    } 
}

.add_to_basket_button {
    width: 100%;
    margin-top: 1rem;
}

.price {
    font-size: 1.2rem;
}

.size_guide {
    width: 100%;
    margin: 1rem 0rem;
    .size_guide_link {
        text-decoration: underline;
    }
    .size_guide_link:hover {
        cursor: pointer;
    }
    p {
        margin-bottom: 4px
    }
}

.product_details {
    margin: 4px 8px;
    .product_details_list {
        width: 100%;
        li {
            list-style: disc;
            margin-left: 2rem;
        }
    }
}



</style>