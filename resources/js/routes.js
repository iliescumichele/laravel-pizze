import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    linkExactActiveClass: 'active',
    routes:[
        {
            path:'/',
            name:'home',
            component :HomeComp
        },


    ]
});
export default router;
