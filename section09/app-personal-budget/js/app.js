class Expense {
    constructor(year, month, day, type, description, amount) {
        this.year = year
        this.month = month
        this.day = day
        this.type = type
        this.description = description
        this.amount = amount
    }

    validateData() {
        for (let i in this) {
            if (this[i] == undefined || this[i] == '' || this[i] == null) {
                return false
            }
        }
        return true
    }
}

class Db {

    constructor() {
        let id = localStorage.getItem('id')

        if (id === null) {
            localStorage.setItem('id', 0)
        }
    }

    getNextId() {
        let nextId = localStorage.getItem('id')
        return parseInt(nextId) + 1
    }

    record(expense) {
        let id = this.getNextId()
        localStorage.setItem(id, JSON.stringify(expense))
        localStorage.setItem('id', id)
    }

    retrieveAllRecords() {
        let expenses = Array()

        let id = localStorage.getItem('id')
        for (let i = 1; i <= id; i++) {
            let expense = JSON.parse(localStorage.getItem(i))

            if (expense === null) {
                continue
            }
            expense.id = i
            expenses.push(expense)
        }
        return expenses
    }

    search(expense) {
        let filteredExpenses = Array()
        filteredExpenses = this.retrieveAllRecords()

        if (expense.year != '') {
            filteredExpenses = filteredExpenses.filter(e => e.year == expense.year)
        }
        if (expense.month != '') {
            filteredExpenses = filteredExpenses.filter(e => e.month == expense.month)
        }
        if (expense.day != '') {
            filteredExpenses = filteredExpenses.filter(e => e.day == expense.day)
        }
        if (expense.type != '') {
            filteredExpenses = filteredExpenses.filter(e => e.type == expense.type)
        }
        if (expense.description != '') {
            filteredExpenses = filteredExpenses.filter(e => e.description == expense.description)
        }
        if (expense.amount != '') {
            filteredExpenses = filteredExpenses.filter(e => e.amount == expense.amount)
        }
        return filteredExpenses
    }

    remove(id) {
        localStorage.removeItem(id)
    }
}

let db = new Db()

function registerExpense() {
    let year = document.getElementById('year')
    let month = document.getElementById('month')
    let day = document.getElementById('day')
    let type = document.getElementById('type')
    let description = document.getElementById('description')
    let amount = document.getElementById('amount')

    let expense = new Expense(
        year.value,
        month.value,
        day.value,
        type.value,
        description.value,
        amount.value
    )

    if (expense.validateData()) {
        db.record(expense)
        mountModalRegister('modal-header text-success', 'Recording Success', 'Expense registered successfully!', 'btn btn-success', 'Go back')
        $('#modalRegistrationExpense').modal('show')

        year.value = ''
        month.value = ''
        day.value = ''
        type.value = ''
        description.value = ''
        amount.value = ''
    } else {
        mountModalRegister('modal-header text-danger', 'Recording Error', 'There are mandatory fields that have not been filled', 'btn btn-danger', 'Go back and fix')
        $('#modalRegistrationExpense').modal('show')
    }
}

function mountModalRegister(classTitle, modalTitle, modalContent, btnClass, btnContent) {

    document.getElementById('modal_title_div').className = classTitle
    document.getElementById('modal_title').innerHTML = modalTitle
    document.getElementById('modal_content').innerHTML = modalContent
    document.getElementById('modal_btn').className = btnClass
    document.getElementById('modal_btn').innerHTML = btnContent

}

function loadExpenseList(expenses = Array(), filter = false) {

    if (expenses.length == 0 && filter == false) {
        expenses = db.retrieveAllRecords()
    }

    let expensesList = document.getElementById('expensesList')
    expensesList.innerHTML = ''
    expenses.forEach(function (e) {

        var line = expensesList.insertRow()
        line.insertCell(0).innerHTML = `${e.day}/${e.month}/${e.year}`

        switch (e.type) {
            case '1':
                e.type = 'Food'
                break
            case '2':
                e.type = 'Education'
                break
            case '3':
                e.type = 'Recreation'
                break
            case '4':
                e.type = 'Health'
                break
            case '5':
                e.type = 'Transport'
                break
        }

        line.insertCell(1).innerHTML = e.type
        line.insertCell(2).innerHTML = e.description
        line.insertCell(3).innerHTML = e.amount

        let btn = document.createElement("button")
        btn.className = 'btn btn-danger'
        btn.innerHTML = '<i class="fas fa-times"></i>'
        btn.id = `id_expense_${e.id}`
        btn.onclick = function () {
            let id = this.id.replace('id_expense_', '')
            db.remove(id)
            window.location.reload()
        }
        line.insertCell(4).append(btn)
    })
}

function searchExpense() {
    let year = document.getElementById('year').value
    let month = document.getElementById('month').value
    let day = document.getElementById('day').value
    let type = document.getElementById('type').value
    let description = document.getElementById('description').value
    let amount = document.getElementById('amount').value

    let expense = new Expense(year, month, day, type, description, amount)

    let expenses = db.search(expense)

    this.loadExpenseList(expenses, true)
}