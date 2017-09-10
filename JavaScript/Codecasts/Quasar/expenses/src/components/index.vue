<script>
import CcForm from './expenses/form.vue'
import CcList from './expenses/list.vue'

import {
  QLayout,
  QToolbar,
  QToolbarTitle,
  QBtn,
  QIcon,
  QList,
  QListHeader,
  QItem,
  QItemSide,
  QItemMain
} from 'quasar'

export default {
  name: 'index',
  components: {
    QLayout,
    QToolbar,
    QToolbarTitle,
    QBtn,
    QIcon,
    QList,
    QListHeader,
    QItem,
    QItemSide,
    QItemMain,

    CcForm,
    CcList
  },
  computed: {
    list () {
      return this.$store.state.Expenses.list
    }
  }
}
</script>

<template>
  <q-layout ref="layout" view="lHh Lpr fff" :left-class="{'bg-grey-2': true}">
    <q-toolbar slot="header" class="glossy">

      <q-toolbar-title>
        Despesas em dinheiro vivo
      </q-toolbar-title>
    </q-toolbar>
    <div class="container">
      <cc-form class="primary"></cc-form>
      <hr v-show="list.length > 0">
      <cc-list></cc-list>
    </div>
  </q-layout>
</template>

<style scoped>
.container {
  padding: 20px;
}
</style>
