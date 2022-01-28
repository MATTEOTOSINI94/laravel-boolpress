<template>
  <div class="">
       <Boxmain
            :title="post.title"
            
            :img="post.coverImg"
            ></Boxmain>
  </div>


</template>

<script>
import Boxmain from "../components/partials/Boxmain.vue";
export default {
    components:{
        Boxmain
    },

    data(){
      return{
        post: Object
      }
    },

    methods:{
      fetchPost(){
        window.axios.get("/api/posts/" + this.$route.params.id).then((resp)=>{
          this.post  = resp.data
        })
      }

    },

    mounted(){
      this.fetchPost();
    }

}
</script>

<style>

</style>