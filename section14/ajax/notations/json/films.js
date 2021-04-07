function getFilms() {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open('GET', 'http://localhost:5500/section14/ajax/notations/json/films.json')

    xmlHttp.onreadystatechange = () => {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            let JSONFilms = xmlHttp.responseText

            let objJSONFilms = JSON.parse(JSONFilms);

            for (let i in objJSONFilms.films) {
                let item = objJSONFilms.films[i];

                let divRow = document.createElement('div');
                divRow.classeName = 'row';

                let divCol = document.createElement('div');
                divCol.className = 'col';

                let p1 = document.createElement('p')
                p1.innerHTML = '<strong>Title:</strong> ' + item.title;
                let p2 = document.createElement('p')
                p2.innerHTML = '<strong>Synopsis:</strong> ' + item.synopsis;
                let p3 = document.createElement('p')

                let genre = ''
                for (let g in item.genres) {
                    if (genre) genre += ', ';
                    genre += item.genres[g].genre;
                }

                p3.innerHTML = '<strong>Genre:</strong> ' + genre;
                let p4 = document.createElement('p')

                let cast = ''
                for (let c in item.cast) {
                    if (cast) cast += ', ';
                    cast += item.cast[c].actor;
                }

                p4.innerHTML = '<strong>Cast:</strong> ' + cast;
                let p5 = document.createElement('p')
                p5.innerHTML = '<strong>Release Date:</strong> ' + item.releaseDate.date + ' (' + item.releaseDate.country + ')';

                let hr = document.createElement('hr');

                divRow.appendChild(divCol);
                divCol.appendChild(p1);
                divCol.appendChild(p2);
                divCol.appendChild(p3);
                divCol.appendChild(p4);
                divCol.appendChild(p5);
                divCol.appendChild(hr);

                document.getElementById('list_films').appendChild(divRow);

            }

        }

        if (xmlHttp.readyState == 4 && xmlHttp.status == 404) {
            //...
        }

    }

    xmlHttp.send();
}