

<template>
    <div class="hero-container flex md:flex-row flex-col items-center justify-between w-9/10 mx-auto">
        <div class="hero flex flex-col justify-center h-full pt-56 md:pb-32 pb-20 relative z-10">
            <div class="flex sm:items-center">
                <h3 data-aos="fade-right" data-aos-delay="0" data-aos-duration="1000" class="text-mainPurple">Web Development</h3>

                <h3 data-aos="fade-down" data-aos-delay="0" data-aos-duration="1000" class="text-mainPurple mx-3">|</h3>
                <h3 data-aos="fade-left" data-aos-delay="0" data-aos-duration="1000" class="text-mainPurple">Client Assisting</h3>
            </div>
            <h1 class="text-mainPurple typing" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">Markable</h1>
            <p class="text-mainPurple" data-aos="fade-right" data-aos-delay="350" data-aos-duration="1000">Creating custom websites for anything your business does.</p>
        </div>
        <div data-aos="zoom-in-up" data-aos-delay="0" data-aos-duration="1000" class="w-1/2 absolute md:relative mt-20 md:mt-0 md:pt-56 pt-0 pb-32">
            <div class="md:w-64 w-48 h-48 md:h-64 mx-auto relative z-10 logo-right sm:block hidden">
                <img src="/assets/img/markable-logo.svg" class="w-full h-full rounded-full">
            </div>
            <div class="md:w-24 w-16 md:h-24 h-16 absolute bg-mainBlue rounded-full mx-auto circle-one"></div>
            <div class="md:w-40 w-24 h-24 md:h-40 md:bg-mainPurple bg-mainBlue rounded-full mx-auto absolute circle-two"></div>
            <div class="md:w-24 w-16 md:h-24 h-16 bg-mainBlue absolute rounded-full mx-auto circle-three"></div>
            <div class="md:w-40 w-24 h-24 md:h-40 md:bg-mainPurple bg-mainBlue rounded-full mx-auto absolute circle-five"></div>

        </div>

    </div>
</template>

<script>

export default {
    data() {
        return {
        }
    },
    mounted() {
    },
    methods: {
        
    }
}
</script>

<style lang="scss" scoped>

.hero-container {
    position: relative;
        h1 {
            font-size: 64px;
        }
        h3 {
            font-size: 14px;
        }
    @media(min-width: 768px) {
        h1 {
            font-size: 76px;
        }
        h3 {
            font-size: 18px;
        }
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
    right: -32%;
    top: 0%;
    position: absolute;
    animation: MoveUpDown 6s linear infinite;
}
.circle-two {
    top: 0%;
    animation: MoveUpDown 7s linear infinite;
}
.circle-three {
    animation: MoveUpDownReverse 5s linear infinite;
    position: absolute;
    top: -20%;
    left: -129%;
}
.circle-five {
    top: -60%;
    animation: MoveUpDown 6.5s linear infinite;
    right: -10%;
}

@media(min-width: 768px) {
    .circle-one {
        right: 30%;
        top: 0;
        position: absolute;
        animation: MoveUpDown 6s linear infinite;
    }
    .circle-two {
        top: 20%;
        animation: MoveUpDown 7s linear infinite;
    }
    .circle-three {
        animation: MoveUpDownReverse 5s linear infinite;
        position: absolute;
        top: 0;
        left: -89%;
    }
    .circle-five {
        right: 10%;
        animation: MoveUpDown 6.5s linear infinite;
        top: 30%;
    }
}


@keyframes MoveUpDown {
  0%, 100% {
    transform: translate(0, 100px);
  }
  50% {
    transform: translate(30px, 180px);
  }
}
@keyframes MoveUpDownReverse {
  0%, 100% {
    transform: translate(200px, 30px);
  }
  50% {
    transform: translate(200px, 100px);
  }
}
</style>