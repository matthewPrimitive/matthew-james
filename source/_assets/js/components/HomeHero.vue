

<template>
    <div class="hero-container pt-56 pb-32" style="background-image: url('/assets/img/rural-landscape.jpg')">
        <transition name="view">
        <div v-if="show" class="hero w-4/5 mx-auto flex flex-col justify-center h-full">
            <h1 class="text-darkBlueGrey">Matthew James</h1>
            <transition name="view">
                <div class="pb-4 flex sm:items-center flex-col sm:flex-row">
                    <h3 class="text-darkBlueGrey">Web Development </h3>
                    <h3 class="text-darkBlueGrey mx-3 sm:block hidden">|</h3>
                    <h3 class="text-darkBlueGrey">Client Assisting</h3>
                </div>
            </transition>
        </div>
        </transition>
    </div>
</template>

<script>

const ENDPOINT = `https://myprimitive.cloud/api/forms/store`
//const ENDPOINT = `http://cms-api.test/api/forms/store`

export default {
    data() {
        return {
            show: false
        }
    },
    mounted() {
        this.show = true; // might need this.$nextTick
    },
    methods: {
        
    }
}
</script>

<style lang="scss" scoped>
.view-leave-active {
    transition: opacity 0.5s ease-in-out, transform 1.2s ease;
}

.view-enter-active {
    transition: opacity 0.5s ease-in-out, transform 1.2s ease;
    transition-delay: 0.5s;
}

.view-enter, .view-leave-to {
    opacity: 0;
    transform: translate(-40px, -40px);
}

.view-enter-to, .view-leave {
    opacity: 1;
    transform: translate(0px, 0px);
}
</style>