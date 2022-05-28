<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: green;
            text-align: center;
            color: #fff;
            font-weight: bold;
        }

        h1 {
            color: goldenrod
        }

        #message-el {
            font-style: italic;
        }

        button {
            width: 150px;
            padding: 5px 0;
            background: goldenrod;
            border: none;
            border-radius: 2px;
            color: #016f32;
            font-weight: bold;
            margin-bottom: 2px;
            margin-top: 2px;
        }

    </style>
</head>

<body>
    <h1>Blackjack</h1>
    <p id="message-el">Want to play a round?</p>
    <p id="card-el">Cards :</p>
    <p id="sum-el">Sum :</p>
    <button id="startBtn" onclick="startGame()">START GAME</button><br>
    <button id="drawBtn" onclick="addCard()">NEW CARD</button>
    <p id="player-el"></p>


    <script>
        let cards = []
        let newCard = 0;
        let sum = 0;
        let hasBlackJack = false;
        let isAlive = false;
        let message = "";
        let messageEl = document.getElementById('message-el');
        let cardEl = document.getElementById('card-el');
        let sumEl = document.getElementById('sum-el');
        let player = {
            name: 'Guillaume',
            chips: 200
        }
        let playerEl = document.querySelector('#player-el');


        function getRandomCard() {
            let randomNumber = Math.floor(Math.random() * 13) + 1;
            if (randomNumber === 1) {
                return 11
            } else if (randomNumber > 10) {
                return 10
            } else {
                return randomNumber;
            }
        }

        /*
         * As = 11 ou 1 (a mettre en place plus tard)
         * J, Q et K vallent 10
         * les chiffres vallent leur chiffre
         */
        function renderGame() {
            playerEl.textContent = player.name + ': $' + player.chips;
            cardEl.textContent = 'Cards : '
            for (let count = 0; count < cards.length; count++) {
                cardEl.textContent += cards[count] + ' ';
            }
            sumEl.textContent = 'Sum : ' + sum;
            if (sum < 21) {
                message = 'Do you want to draw a new card?';
            } else if (sum > 21) {
                message = 'You lost, try again!';
                isAlive = false;
            } else {
                message = 'You win! congratulations';
                hasBlackJack = true;
                player.chips += 20;
            }
            messageEl.textContent = message;
        }

        function addCard() {
            if (isAlive && !(hasBlackJack)) {
                newCard = getRandomCard();
                cards.push(newCard);
                sum += newCard;
                renderGame();
            }
        }

        function startGame() {
            isAlive = true;
            hasBlackJack = false;
            player.chips -= 10;
            let cardOne = getRandomCard();
            let cardTwo = getRandomCard();
            cards = [cardOne, cardTwo];
            sum = cardOne + cardTwo;
            renderGame();
        }
    </script>
</body>

</html>
