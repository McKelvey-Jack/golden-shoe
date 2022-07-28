<template>
    <div class="slider">
        <h4 v-if="header" class="header">{{header}}:</h4>
        <div class="slider_box_container">
            <div class="slider_box" :style="`left:${value}%;`"></div>
        </div>
        <div class="labels">
            <p>{{leftLabel}}</p>
            <p>{{rightLabel}}</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['header','leftLabel', 'rightLabel', 'value']
    }
</script>

<style lang="scss" scoped>

.slider {
    margin: 1rem 0rem;
}

.slider_box_container {
    height: 16px;
    background: #e4e4e4;
    position: relative;
    width: 100%;
}

.slider_box {
    position: absolute;
    background-color: black;
    height: 100%;
    width: 10%;
}

.header {
    text-transform: capitalize;
    font-size: 1rem;
}

.labels {
    display: flex;
    justify-content: space-between;
}

</style>