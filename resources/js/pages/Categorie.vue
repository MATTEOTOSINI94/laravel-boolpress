<template>

        <div>
            <Boxmain
            title="Categoria"
            :subTitle="category.title"
            img="https://media.istockphoto.com/photos/home-office-desk-table-with-coffee-cup-bouquet-of-spring-flowers-lily-picture-id1310455436?b=1&k=20&m=1310455436&s=170667a&w=0&h=chdh2N8T_Gk7D2-dOcUTT_YjS4B4eKNl98cgSK6nuzg="
            >
            <slot>
                 <div class="text-center pb-4">
                     <h3 v-if="category.post.length === 0">Non ci sono Post per questa Categoria</h3>
                 </div>
            </slot>
            </Boxmain>
        <div class="container">
            <h1 class="text-center pt-3" v-if="category.post.length !== 0 ">Post </h1>
            <div class="row justify-content-center">
             <div v-for="cat in category.post" :key="cat.id" class="card" style="width: 18rem;">
                <img style="height:200px" class="card-img-top" :src="cat.coverImg" alt="Card image cap">
                <div class="card-body">
                    <h1 class="">{{cat.title}}</h1>
                    <p class="card-text">{{cat.content}}</p>
                </div>
                </div>
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
             
                category: {
                    type: Object,
                    default: () => ({}),
                },
          
                lastPage:null,
            }
        },

        methods: {


    

    getCategories(){
           
          
            window.axios.get("/api/categorie/" + this.$route.params.id).then((resp)=>{
                this.category = resp.data;
                console.log(this.category)
               
            })
        }
        },

        mounted(){          
             this.getCategories()
    }
    

}
</script>

<style>

</style>