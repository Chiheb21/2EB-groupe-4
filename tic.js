const gameBoard = document.getElementById('game');
const message = document.getElementById('message');
let size = 4;
let gameArray = [];

const startGame = () => {
    size = parseInt(document.getElementById('size').value);
    gameArray = new Array(size*size).fill('');
    renderGameBoard();
}

const renderGameBoard = () => {
    let gameBoardHTML = '';
    for (let i = 0; i < size*size; i++) {
        gameBoardHTML += `<div onclick="placeMarker(${i})">${gameArray[i]}</div>`;
    }
    gameBoard.innerHTML = gameBoardHTML;
}

const placeMarker = (index) => {
    if (gameArray[index] !== '') {
        return;
    }
    gameArray[index] = 'X';
    renderGameBoard();
    if (checkWin('X')) {
        message.innerHTML = 'You win!';
        return;
    }
    let randomIndex = Math.floor(Math.random() * gameArray.length);
    while (gameArray[randomIndex] !== '') {
        randomIndex = Math.floor(Math.random() * gameArray.length);
    }
    gameArray[randomIndex] = 'O';
    renderGameBoard();
    if (checkWin('O')) {
        message.innerHTML = 'Computer wins!';
        return;
    }
    if (gameArray.filter(marker => marker === '').length === 0) {
        message.innerHTML = 'It\'s a tie!';
        return;
    }
}

const checkWin = (marker) => {
    for (let i = 0; i < size; i++) {
        let row = true;
        for (let j = 0; j < size; j++) {
            if (gameArray[i*size+j] !== marker) {
                row = false;
                break;
            }
        }
        if (row) {
            return true;
        }
    }
    
    for (let i = 0; i < size; i++) {
        let column = true;
        for (let j = 0; j < size; j++) {
            if (gameArray[i+j*size] !== marker) {
                column = false;
                break;
            }
        }
        if (column) {
            return true;
        }
    }
    
    let diagonal1 = true;
    for (let i = 0; i < size; i++) {
        if (gameArray[i*size+i] !== marker) {
            diagonal1 = false;
            break;
        }
    }
    if (diagonal1) {
        return true;
    }

    let diagonal2 = true;
    for (let i = 0; i < size; i++) {
        if (gameArray[(i+1)*size-i-1] !== marker) {
            diagonal2 = false;
            break;
        }
    }
    if (diagonal2) {
        return true;
    }
    return false;
}
