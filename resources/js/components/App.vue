<template>
    <main>
        <div class="box-img">
            
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <Card v-for="el in posts" :key="el.id" :dati="el"></Card>
                
           </div>
           <div class="d-flex justify-content-center">
                  <nav>
                     <ul class="pagination">
                         <li v-for="page of lastPage" :key="page">
                             <button class="page-link" @click="getPage(page)">{{page}}</button>
                         </li>
                     </ul>
                 </nav>
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
                posts: [],
          
                lastPage:null,
            }
        },

        methods: {

            getPage(pagina = 1){
               window.axios.get("/api/posts?page=" + pagina).then((resp) =>{
               this.posts = resp.data.data;
            
               this.lastPage = resp.data.last_page;
               
        });
     }

        },

        mounted(){

            this.getPage();
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





