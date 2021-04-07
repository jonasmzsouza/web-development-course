function requestPage(url) {


    document.getElementById('content').innerHTML = '';

    // include the loading gif on the Page
    if (!document.getElementById('loading')) {

        let imgLoading = document.createElement('img');
        imgLoading.id = 'loading'
        imgLoading.src = 'loading.gif';
        imgLoading.className = 'rounded mx-auto d-block'

        document.getElementById('content').appendChild(imgLoading);
    }

    let ajax = new XMLHttpRequest();

    // uninitiated request, state = 0
    console.log(ajax.readyState);

    ajax.open('GET', url);

    // connection established with the server, state = 1
    console.log(ajax.readyState);

    ajax.onreadystatechange = () => {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('content').innerHTML = ajax.responseText;
        }

        if (ajax.readyState == 4 && ajax.status == 404) {
            document.getElementById('content').innerHTML = '...Error 404. Page not found.';
        }
    }

    ajax.send();

}