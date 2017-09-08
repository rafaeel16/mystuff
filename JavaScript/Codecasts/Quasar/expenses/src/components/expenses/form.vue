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
      data () {
        return {
          expenses: {
            amount: '',
            description: '',
            date: ''
          }
        }
      },
      methods: {
        submit () {
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
    }
</style>
