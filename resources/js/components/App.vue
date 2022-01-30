<template>
    <div>
        <Navbar></Navbar>
        <transition name="slide" mode="out-in">
             <router-view></router-view>
        </transition>

    </div>
</template>

<script>
import Navbar from "./partials/Navbar";
    export default {
        name:"App",
        components:{ Navbar},

        mounted(){
          
        }

    }
</script>

<style scoped>



.slide-enter-active,
.slide-leave-active{
    transition: opacity 1s, transform 1s;
}
.slide-enter,
.slider-leave-to{
    opacity: 0;
    transform: translateX(-30%);
}

</style>





