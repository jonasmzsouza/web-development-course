$(document).ready(() => {
    $('button').on('click', (e) => {
        e.preventDefault()

        let data = $('form').serialize();

        //ajax
        $.ajax({
            type: 'GET',
            url: 'app.php',
            data: data,
            dataType: 'json',
            success: data => {
                console.log(data)
            },
            error: error => {
                console.log(error)
            }
        })
    })
})