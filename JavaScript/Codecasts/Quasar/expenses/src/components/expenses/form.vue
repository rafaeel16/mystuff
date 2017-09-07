<template>
    <form @submit.prevent="submit">
        <input class="my-input" type="number" v-model="expenses.amount" placeholder="R$">
        <input class="my-input" type="text" v-model="expenses.description" placeholder="Descrição">
        <input class="my-input" type="text" v-model="expenses.date" placeholder="Data">
        <button class="my-button">Salvar</button>
    </form>
</template>

<script>
export default {
    data() {

        return {

            expenses: {
                amount: '',

                description: '',

                date: ''
            }
        }
    },
    methods: {
        
        submit(){

        }
    }
}
</script>

<style scoped>
.my-input {
    width: 100%;
    margin-bottom: 20px;
}

.my-button {
    width: 100%;
    margin: .2em .1em;
    font-family: "Open Sans", sans-serif;
    font-weight: 700;
    font-size: 1em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    border: none;
    border-bottom: .15em solid black;
    border-radius: 3px;
    padding: 1em 2em;
    color: #fff;
    border-color: #2a6496;
    background-image: linear-gradient(#428bca, #357ebd);
}

.my-button:hover {
    background: linear-gradient(#357ebd, #3071a9);
}
</style>
