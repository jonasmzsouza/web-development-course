function getAddressDataZipCode(zipCode) {


    let url = 'https://viacep.com.br/ws/' + zipCode + '/json/';

    let xmlHttp = new XMLHttpRequest()
    xmlHttp.open('GET', url)

    xmlHttp.onreadystatechange = () => {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            let dataJSONText = xmlHttp.responseText
            let dataJSONObj = JSON.parse(dataJSONText)

            console.log(dataJSONObj)
            console.log(dataJSONObj)

            document.getElementById('address').value = dataJSONObj.logradouro
            document.getElementById('district').value = dataJSONObj.bairro
            document.getElementById('city').value = dataJSONObj.localidade
            document.getElementById('state').value = dataJSONObj.uf

        }
    }

    xmlHttp.send()
}