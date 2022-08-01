<template>
<div class="page_container" v-if="!loading">
    <images-carousel :images="productData.images"></images-carousel>
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
    <div class="details_and_rating">
        <div class="product_details">
            <h3 class="header">Product Details</h3>
            <ol class="product_details_list">
                <li v-for="(value, key) in productData.info.details" :key="key">{{value}}</li>
            </ol>
        </div>
        <div class="customer_rating">
            <h3 class="header">Customer Rating</h3>
            <div class="size_slider">
                <slider
                    :header="'Size'"
                    :leftLabel="'Runs Small'"
                    :rightLabel="'Runs Large'"
                    :value="reviewData.true_to_size_slider_value"
                    :floatingBar="true">
                </slider>
            </div>
        </div>
    </div>
    <div class="reviews">
            <h3 class="header">Reviews</h3>
            <slider v-for="(item) in sortedStarsCount"
                :key="item[0]"
                :leftLabel="getStarsLeftLabel(item[0])"
                :rightLabel="`(${item[1]})`"
                :value="item[1] / reviewData.total_reviews * 100"
                :floatingBar="false">
            </slider>
    </div>
</div>
</template>

<script>
import Slider from '../Slider.vue'
import ImagesCarousel from '../ImagesCarousel.vue'

    export default {
        components: {Slider, ImagesCarousel},
        props: ['id'],
        data() {
            return {
                productData: null,
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
                Vue.axios.get(route('get_reviews', {id: this.id}))
                .then(({data})=>{
                    this.reviewData = data
                }).catch((err)=>{
                    console.log(err)
                })
            },
            getStarsLeftLabel(key) {
                let label = `${key} Star`
                if (key != 1) label += 's'
                return label
            }
        },
        computed: {
            sortedStarsCount(){
               return Object.entries(this.reviewData.stars_count).sort((a,b) => b[0]-a[0])
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
    margin: 1rem;
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
.details_and_rating {
    margin: 1rem;
}

.product_details {
    margin: 1rem 0rem;
    .product_details_list {
        width: 100%;
        li {
            list-style: disc;
            margin-left: 2rem;
        }
    }
}

.reviews{
    margin: 1rem;
    padding-top: 6px;
    border-top: 1px solid #bdbdbdb3
}

.header {
    margin: .5rem 0rem 1rem
}

.customer_rating {
    margin: 1rem 0rem;
}

@media screen and (min-width: 768px) {
   .page_container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        max-width: 1000px;
        margin: 0 auto;
        row-gap: 1rem;
        padding: 1rem;
   }
   .reviews {
        padding-top: 0px;
        border: none;
   }
   .product_details {
        margin: 0rem;
   }
}

</style>