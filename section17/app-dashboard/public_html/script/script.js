$(document).ready(() => {

    $('#dashboard').on('click', () => {
        location.reload()
    })

    $('#documentation').on('click', () => {
        //$('#page').load('html/documentation.html')

        /*
        $.get('html/documentation.html', data => {
            $('#page').html(data)
        })
        */
        $.post('html/documentation.html', data => {
            $('#page').html(data)
        })

    })


    $('#support').on('click', () => {

        $.post('html/support.html', data => {
            $('#page').html(data)
        })
    })

    //ajax
    $('#competence').on('change', e => {

        let competence = $(e.target).val()

        //method, url, data, success, error
        $.ajax({
            type: 'GET',
            url: 'script/app.php',
            data: `competence=${competence}`, //x-www-form-urlencoded
            dataType: 'json',
            success: data => {
                $('#numberSales').html(data.numberSales)
                $('#totalSales').html(data.totalSales)
                $('#activeCustomers').html(data.activeCustomers)
                $('#inactiveCustomers').html(data.inactiveCustomers)
                $('#totalComplaints').html(data.totalComplaints)
                $('#totalCompliments').html(data.totalCompliments)
                $('#totalSuggestions').html(data.totalSuggestions)
                $('#totalExpenses').html(data.totalExpenses)
            },
            error: error => {
                console.log(error)
            }
        })
    })
})