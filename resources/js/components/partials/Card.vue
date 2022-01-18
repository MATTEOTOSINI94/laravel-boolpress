<template>
    
      
                <div class="col-8 pt-3 pb-3" style="width: 38rem">
                    <h1>{{dati.title}}</h1>
                    <img class="card-img-top" :src="dati.coverImg" alt="Card image cap">
                    <div class="card-body">
                        
                        <p class="card-text">{{dati.content}}</p>
                    </div>
                </div>

        
   
</template>

<script>
      export default {
        name:"Card",

        props:{
            dati:Array
        }
        
        }
</script>

<style scoped>

</style>