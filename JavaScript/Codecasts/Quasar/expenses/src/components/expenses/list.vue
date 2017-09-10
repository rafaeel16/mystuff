<script>
export default {
  computed: {
    list () {
      return this.$store.state.Expenses.list
    }
  }
}
</script>

<template>
  <div>
    <div class="expense" v-for="expense in list">

      <p>{{ expense.date }} - R$ {{ expense.amount }}</p>

      <p>{{ expense.description }}</p>

    </div>
  </div>

</template>

<style>
.expense {
  border-bottom: #999 1px solid;
  padding: 10px;
}
</style>
