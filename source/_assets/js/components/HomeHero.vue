

<template>
    <div class="hero-container pt-56 pb-32 flex flex-col justify-center items-center w-full h-screen" style="background-image: url(/assets/img/rural-landscape.jpg)">
        <div v-if="show" class="hero w-4/5 mx-auto flex flex-col justify-center h-full">
            <h1 class="text-white typing" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">Markable</h1>
            <transition name="view">
                <div class="pb-4 flex sm:items-center flex-col sm:flex-row">
                    <h3 data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000" class="text-white typing">Web Development</h3>

                    <h3 data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000" class="text-white mx-3 sm:block hidden">|</h3>
                    <h3 data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000" class="text-white">Client Assisting</h3>
                </div>
            </transition>
        </div>

    </div>
</template>

<script>
import Vue from 'vue'
import VueTypedJs from 'vue-typed-js'
Vue.use(VueTypedJs)

export default {
    data() {
        return {
            show: false,
            showBorder: false,
            showTreeOne: false,
            showTreeTwo: false,
        }
    },
    mounted() {
        this.show = true; // might need this.$nextTick
        setTimeout(()=>{this.showBorder = true;}, 1000);
        setTimeout(()=>{this.showTreeOne = true;}, 2000);
        setTimeout(()=>{this.showTreeTwo = true;}, 2500);
    },
    methods: {
        
    }
}
</script>

<style lang="scss" scoped>
.hero-container {
    position: relative;
}

.tree-one, .tree-two {
    position: absolute;
    width: 150px;
    left: 5px;
    bottom: 0;
    & svg {
        transform-origin: bottom;
        & .tree-branch {
            fill: #aa8976;
        }
        & .tree-leaves {
            fill: #58b368;
        }
    }
}

.tree-two {
    right: 0px;
}
.border-grow {
    height: 5px;
    width: 100%;
    background-color: #58b368;
    position: absolute;
    display: flex;
    justify-content: center;
    bottom: 0;
}

.view-leave-active {
    transition: opacity 0.5s ease-in-out, transform 1.2s ease;
}

.view-enter-active {
    transition: opacity 0.5s ease-in-out, transform 1.2s ease;
    transition-delay: 0.5s;
}

.view-enter, .view-leave-to {
    opacity: 0;
    transform: translate(0px, -40px);
}

.view-enter-to, .view-leave {
    opacity: 1;
    transform: translate(0px, 0px);
}

// grow
.grow-leave-active {
    transition: 2s ease;
}

.grow-enter-active {
    transition: 2s ease;
    transition-delay: 0.5s;
}

.grow-enter, .grow-leave-to {
    width: 0%;
}

.grow-enter-to, .grow-leave {
    width: 100%;
}

// tree-grow
.tree-grow-leave-active {
    transition: 2s ease;
}

.tree-grow-enter-active {
    transition: 2s ease;
    transition-delay: 0.5s;
}

.tree-grow-enter, .tree-grow-leave-to {
    transform: scale(0);
    transform-origin: bottom;
}

.tree-grow-enter-to, .tree-grow-leave {
    transform: scale(1);
    transform-origin: bottom;
}

</style>