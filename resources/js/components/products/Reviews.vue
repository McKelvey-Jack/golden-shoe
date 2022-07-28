<template>
    <div class="reviews_container">
        <div class="customer_rating">
            <h3 class="header">Customer Rating</h3>
            <div class="size_slider">
                <slider
                    :header="'Size'"
                    :leftLabel="'Runs Small'"
                    :rightLabel="'Runs Large'"
                    :value="reviewData.true_to_size_slider_value">
                </slider>
            </div>
        </div>
        <div class="reviews">
            <h3 class="header">Reviews</h3>
            <slider v-for="(item) in sortedStarsCount"
                :key="item[0]"
                :leftLabel="getStarsLeftLabel(item[0])"
                :rightLabel="`(${item[1]})`"
                :value="item[1] / reviewData.total_reviews * 100">
            </slider>
        </div>
        </div>
</template>

<script>
import Slider from '../Slider.vue'
    export default {
        components: {Slider},
        props: ['reviewData'],
        methods: {
            getStarsLeftLabel(key) {
                let label = `${key} Star`
                if (key != 1) label += 's'
                console.log(label)
                return label
            }
        },
        computed: {
            sortedStarsCount(){
               return Object.entries(this.reviewData.stars_count).sort((a,b) => b[0]-a[0])
            }
        }
    }
</script>

<style lang="scss" scoped>

.reviews_container {
    margin: 1rem;
    padding-top: 6px;
    border-top: 1px solid #bdbdbdb3
}

.header {
    margin: .5rem 0rem 2rem
}

.customer_rating {
    margin-bottom: 1rem;
}

@media screen and (min-width: 768px) {
   .reviews_container {
        margin: 0rem;
        padding-top: 0px;
        border: none;
   }
}

</style>