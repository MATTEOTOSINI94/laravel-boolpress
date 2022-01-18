<template>
    <main>
        <div class="box-img">
            
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <Card v-for="el in posts" :key="el.id" :dati="el"></Card>
           </div>
        </div>

    </main>
</template>

<script>
import Card from "./partials/Card.vue"
    export default {
        name:"App",

        components:{
            Card
        },

        data(){
            return{
                posts: []
            }
        },

        mounted(){
            window.axios.get("/api/posts").then((resp) =>{
               this.posts = resp.data
        })
    }
    
    }
</script>

<style scoped>
.box-img{
    background: url("https://c0.wallpaperflare.com/preview/402/118/398/laptop-wood-display-aerial.jpg");
    object-fit: cover;
    height: 500px;
}
</style>





