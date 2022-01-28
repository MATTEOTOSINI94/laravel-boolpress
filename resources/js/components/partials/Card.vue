<template>
    
      
                <div class="col-4 pt-3 pb-3 box-card" style="width: 38rem">
                    
                    <img class="card-img-top" :src="dati.coverImg" alt="Card image cap">

                    <div class="card-body">
                        <router-link style="color:black" :to="{name: 'post.show', params: {id: dati.id}}">
                            <h3>Titolo : <span style="color: gray">{{dati.title}}</span></h3>
                           <p style=" overflow-wrap: break-word" class="card-text crop">{{dati.content}}</p>
                           <p><strong>Categoria: </strong><small>{{dati.categorie.title}}</small></p>
                           <p><strong>Autore: </strong><small>{{dati.user.name}}</small></p>
                        </router-link>
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

<style lang="scss" scoped>
.box-card{
    
    img{
        height: 300px;
    }
}
</style>

