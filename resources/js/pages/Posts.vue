<template>

        <div>
            <Boxmain
            title="Post"
            subTitle="Post"
            img="https://images.unsplash.com/photo-1432821596592-e2c18b78144f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8YmxvZ3xlbnwwfHwwfHw%3D&w=1000&q=80"
            ></Boxmain>
            <div class="container">
                <h1 class="text-center pt-3">Post</h1>
                <div class="row justify-content-center">
                    <Card v-for="el in posts" :key="el.id" :dati="el"></Card>
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
                categories:[],
          
                lastPage:null,
            }
        },

        methods: {

            getPage(){
                const categorie = this.$route.query.categorie;
               

               window.axios.get("/api/posts/all", { params: {categorie} }
        ).then((resp) =>{
               this.posts = resp.data;
               console.log(this.posts)
             
               
        });

     },

  
        },

        mounted(){

            this.getPage();
           
    }
    

}
</script>

<style>

</style>