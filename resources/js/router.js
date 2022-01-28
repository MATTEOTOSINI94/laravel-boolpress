import Vue from "vue";
import VueRouter from "vue-router";


import Home from "./pages/Home.vue";
import About  from "./pages/About.vue";
import Contact from "./pages/Contact.vue";
import Post from "./pages/Post.vue";



Vue.use(VueRouter);

// Creazione singole rotte creando istanza del Vue router

const router =  new VueRouter({
    mode:"history",
    routes:[
        {
            path:"/",
            name:"home",
            component: Home,
        },
        {
            path:"/about",
            name:"about",
            component: About,
        },
        {
            path:"/contact",
            name:"contact",
            component: Contact,
        },
        {
            path:"/post/:id",
            name:"post.show",
            component: Post,
        },

    ]
});
export default router;