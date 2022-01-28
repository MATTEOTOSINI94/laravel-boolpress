<template>
   
            <nav>
               <div class="menu">
                  <ul>
                     <li><router-link :to="{name: 'home'}">Home</router-link></li>
                     <li><router-link :to="{name: 'about'}">About</router-link></li>
                     <li><router-link :to="{name:'contact'}">Contact</router-link></li>
                  </ul>
            
               </div>
            </nav>
            
       
</template>

<script>
export default {
    name: "Navbar"

}
</script>

<style lang="scss" scoped>

nav{
   position: absolute;
   top: 25px;
.menu{
   text-align: center;

   ul{
      display: inline-block;
      color: black;

      li{
         display: inline-block;
         padding: 0 10px;
         
         a{
            color: black;
         }
      }
   }
}
}

.router-link-exact-active{
   color: blue !important;
}
</style>

