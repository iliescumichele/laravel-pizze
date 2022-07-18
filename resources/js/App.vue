<template>
    <div class="container">
        <h1>HOME VUE</h1>

        <ul>
            <li
                v-for="pizza in pizzas"
                :key="pizza.id"
              >

                <h3>{{ pizza.nome }}</h3>
                <p>{{ pizza.ingredienti }}</p>

            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'App',

    data() {
        return{
            apiUrl: '/api/pizzas',
            pizzas: null
        }  
    },

    methods: {
        getApi(){
            axios.get(this.apiUrl)
            .then(response => {

                this.pizzas = response.data;
                console.log(this.pizzas);
            })
        }
    },

    mounted() {
        this.getApi();
    }
}
</script>

<style>

</style>