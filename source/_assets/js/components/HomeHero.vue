

<template>
    <div class="hero-container pt-56 pb-32 flex md:flex-row flex-col items-center justify-between w-9/10 mx-auto">
        <div v-if="show" class="hero flex flex-col justify-center h-full">
            <div class="flex sm:items-center">
                <h3 data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000" class="text-mainPurple">Web Development</h3>

                <h3 data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000" class="text-mainPurple mx-3">|</h3>
                <h3 data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000" class="text-mainPurple">Client Assisting</h3>
            </div>
            <h1 class="text-mainPurple typing" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">Markable</h1>
            <p class="text-mainPurple" data-aos="fade-right" data-aos-delay="350" data-aos-duration="1000">Creating custom websites for anything your business does.</p>
        </div>
        <div class="w-1/2 relative mt-20 md:mt-0">
            <div class="w-64 h-64 mx-auto relative z-10 logo-right">
                <img src="/assets/img/markable-logo.svg" class="w-full h-full rounded-full">
            </div>
            <div class="w-24 h-24 bg-mainPurple rounded-full mx-auto circle-one md:block hidden"></div>
            <div class="w-40 h-40 bg-mainPurple rounded-full mx-auto absolute circle-two"></div>
            <div class="w-24 h-24 bg-mainPurple rounded-full mx-auto circle-three md:block hidden"></div>
            <div class="w-40 h-40 bg-mainPurple rounded-full mx-auto absolute circle-five md:block hidden"></div>


            <!-- <div class="w-20 absolute -left-1 top-0 rounded bg-treeGreen position-person">
                <img class="object-cover object-center w-full h-full" src="/assets/img/matthew-nobg.png" alt="">
                <p class="absolute rounded-full w-6/5 text-center text-white text-sm mt-4 mx-~10 bg-treeGreen">Founder</p>
            </div> -->
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
    h1 {
        font-size: 76px;
    }
    h3 {
        font-size: 18px;
    }
}

.logo-right {
    transform: rotate(0deg);
    transition: 10s ease;
    &:hover {
        transform: rotate(3600deg);
    }
}
.circle-one {
    transform: translate(450px, -150px);
    background-color: #4990c4;
    position: absolute;
    animation: MoveUpDown 5s linear infinite;
}
.circle-two {
    transform: translate(70px, -170px);
    animation: MoveUpDown 5s linear infinite;
}
.circle-three {
    transform: translate(150px, -220px);
    background-color: #4990c4;
    animation: MoveUpDownReverse 5s linear infinite;
    position: absolute;
}
.circle-five {
    transform: translate(540px, -340px);
    animation: MoveUpDown 5s linear infinite;
}


.object {
  animation: MoveUpDownReverse 5s linear infinite;
  position: absolute;
  left: 0;
  bottom: 0;
}

@keyframes MoveUpDown {
  0%, 100% {
    top: 100px;
    left: 0px;
  }
  50% {
    top: 180px;
    left: 30px;
  }
}
@keyframes MoveUpDownReverse {
  0%, 100% {
    top: 200px;
    right: 30px;
  }
  50% {
    top: 100px;
  }
}
</style>