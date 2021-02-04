function calculate(type, value) {
    if (type === 'action') {

        if (value === 'c') {
            document.getElementById('result').value = ''
        }

        if (value === '/' || value === '*' || value === '-' || value === '+') {
            document.getElementById('result').value += value
        }

        if (value === '=') {
            var field_value = eval(document.getElementById('result').value)
            document.getElementById('result').value = field_value
        }

    } else if (type === 'value') {
        document.getElementById('result').value += value
    }
}