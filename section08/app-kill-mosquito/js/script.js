var field_width = 0
var field_heigth = 0
var lives = 1
var time = 30
var createMosquitoTime = 1500

var level = window.location.search
level = level.replace('?', '')

if (level === 'normal') {
    createMosquitoTime = 1500
} else if (level === 'hard') {
    createMosquitoTime = 1000
} else if (level === 'star') {
    createMosquitoTime = 750
} else {

}

function adjustSizeGameField() {
    field_width = window.innerWidth
    field_heigth = window.innerHeight
}

adjustSizeGameField()

var chronometer = setInterval(function () {

    time -= 1

    if (time < 0) {
        clearInterval(chronometer)
        clearInterval(createMosquito)
        window.location.href = 'victory.html'
    } else {
        document.getElementById('chronometer').innerHTML = time
    }

}, 1000)

function randomPosition() {

    // element removal
    if (document.getElementById('mosquito')) {
        document.getElementById('mosquito').remove()

        if (lives > 3) {
            window.location.href = 'game-over.html'
        } else {
            document.getElementById('l' + lives).src = "../image/empty_heart.png"
            lives++
        }
    }

    // element position
    var positionX = Math.floor(Math.random() * field_width) - 90
    var positionY = Math.floor(Math.random() * field_heigth) - 90

    positionX = positionX < 0 ? 0 : positionX
    positionY = positionY < 0 ? 0 : positionY

    // element creation
    var mosquito = document.createElement('img')
    mosquito.src = '../image/mosquito.png'
    mosquito.className = randomSize() + ' ' + randomSide()
    mosquito.style.left = positionX + 'px'
    mosquito.style.top = positionY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.id = 'mosquito'
    mosquito.onclick = function () {
        this.remove()
    }

    document.body.appendChild(mosquito)
}

function randomSize() {
    var img_class = Math.floor(Math.random() * 3)

    switch (img_class) {
        case 0:
            return 'mosquito1'
        case 1:
            return 'mosquito2'
        case 2:
            return 'mosquito3'
    }
}

function randomSide() {
    var img_class = Math.floor(Math.random() * 2)

    switch (img_class) {
        case 0:
            return 'sideA'
        case 1:
            return 'sideB'
    }
}