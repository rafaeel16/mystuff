import Vue from 'vue'

import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    Expenses: {
      list: []
    }
  },
  mutations: {
    ADD_EXPENSE (state, obj) {
      state.Expenses.list.unshift(obj)
    }
  }
})
