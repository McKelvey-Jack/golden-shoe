<template>
<div>
  <div id="carousel" class="carousel slide" data-interval="false" >
  <div class="carousel-inner" data-interval="false" >
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/random/100x80?sig=1" class="d-block w-100 img-responsive" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/random/100x80?sig=2" class="d-block w-100 img-responsive" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/random/100x80?sig=3" class="d-block w-100 img-responsive" alt="...">
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
    </div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                productData: null
            }
        },
        methods: {
            getProduct() {
                Vue.axios.get(route('get_product', {id: this.id}))
                .then(({data})=>{
                    this.productData = data
                })
            }
        },
        mounted() {
            this.getProduct()
        }
        
    }
</script>

<style lang="scss" scoped>

</style>