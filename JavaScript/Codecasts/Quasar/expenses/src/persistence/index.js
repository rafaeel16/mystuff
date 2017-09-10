import storage from 'localforage'

export function addExpense (expense) {
  storage.setItem(expense.id, expense)
}
