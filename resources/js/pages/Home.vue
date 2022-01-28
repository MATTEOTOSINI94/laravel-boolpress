<template>

        <div>
            <Boxmain
            title="Home"
            subTitle="Home-Blog"
            img="https://media.istockphoto.com/photos/home-office-desk-table-with-coffee-cup-bouquet-of-spring-flowers-lily-picture-id1310455436?b=1&k=20&m=1310455436&s=170667a&w=0&h=chdh2N8T_Gk7D2-dOcUTT_YjS4B4eKNl98cgSK6nuzg="
            ></Boxmain>
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
        </div>
</template>

<script>
import Card from "../components/partials/Card.vue"
import Boxmain from "../components/partials/Boxmain.vue"
export default {

      components:{
            Card,
            Boxmain
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

<style>

</style>