<template>
    
      
                <div class="col-8 pt-3 pb-3" style="width: 38rem">
                    <h1>{{dati.title}}</h1>
                    <img class="card-img-top" :src="dati.coverImg" alt="Card image cap">
                    <div class="card-body">
                        <p style=" overflow-wrap: break-word" class="card-text">{{dati.content}}</p>
                       <p><strong>Categoria: </strong><small>{{dati.categorie.title}}</small></p>
                       <p><strong>Autore: </strong><small>{{dati.user.name}}</small></p>
                    </div>
                </div>

        
   
</template>

<script>
      export default {
        name:"Card",

        props:{
            dati:Object
        }
        
        }
</script>

<style scoped>

</style>