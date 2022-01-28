<template>
  <div :style=" `background-image: url('${img}')`" class="box-img">
      <div class="box-content text-center">
          <h1>{{ title }}</h1>
          <h5>{{ subTitle }}</h5>
      </div>
      
  </div>
</template>

<script>
export default {
 name:"Boxmain",
   props:{
       title:String,
       subTitle:String,
       img:String
 }
}
</script>

<style lang="scss" scoped>
.box-img{
   background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 500px;
    position: relative;

    .box-content{
      position: absolute;
    top: 50%;
    right: 50%;
    color: white;
    transform: translate(50%, -50%);

    h1{
      font-size: 100px;
    }
      
    }
}
</style> 

