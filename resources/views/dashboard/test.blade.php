<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
            min-width: 400px;
        }

        input {
            width: 100%;
            padding-left: 10px;
            padding-right: 10px;
            /* After width and padding we have 100%+10px+10px */
            box-sizing: border-box;
            /* Will make it so the padding shows on the right, not after */
            padding-top: 10px;
            padding-bottom: 10px;
            border: 2px solid #5f9341;
        }

        button {
            background-color: #5f9341;
            color: #fff;
            border: none;
            margin-top: 4px;
            padding: 10px 20px;
            font-weight: bold;
            border: 1px solid #5f9341;
        }

        #delete-btn {
            color: #5f9341;
            background: #fff;
        }

        ul {
            margin-top: 20px;
            list-style: none;
            padding: 0;
        }

        li {
            margin-top: 5px;
        }

        a {
            color: #5f9341;
        }

    </style>
</head>

<body>
    <input type="text" id="input-el">
    <button id="input-btn">SAVE INPUT</button>
    <button id="tab-btn">SAVE TAB</button>
    <button id="delete-btn">DELETE ALL</button>
    <ul></ul>

    <script>
        const inputBtn = document.getElementById("input-btn")
        const inputEl = document.getElementById("input-el")
        const ulEl = document.querySelector("ul")
        const deleteBtn = document.querySelector("#delete-btn")
        const tabBtn = document.querySelector("#tab-btn")
        let myInputs = []

        // Affiche les pages a l'ouverture
        const inputsFromLocalStorage = JSON.parse(localStorage.getItem("myInputs"))
        if (inputsFromLocalStorage) {
            myInputs = inputsFromLocalStorage
            render(myInputs)
        }

        // Sauvegarde la page actuelle
        tabBtn.addEventListener("click", function() {
            browser.tabs.query({
                    active: true,
                    currentWindow: true
                })
                .then(tabs => {
                    console.log(tabs[0].url)
                    myInputs.push(tabs[0].url)
                    localStorage.setItem("myInputs", JSON.stringify(myInputs))
                    render(myInputs)
                });
        });

        // Supprime les pages sauvegardes
        deleteBtn.addEventListener("dblclick", function() {
            localStorage.clear()
            myInputs = []
            render(myInputs)
        });

        // Sauvegarde notre page avec le local storage
        inputBtn.addEventListener("click", function() {
            myInputs.push(inputEl.value)
            localStorage.setItem("myInputs", JSON.stringify(myInputs)) //Transformation de notre objet en string
            inputEl.value = "" // reinitialisation de notre input pour recevoir la valeur suivante
            render(myInputs)
        });

        // Affichage des pages sauvegardes
        function render(inputs) {
            let listItems = ""
            for (let i = 0; i < inputs.length; i++) {
                listItems += `
            <li>
                <a href='${inputs[i]}' target='_blank'>
                    ${inputs[i]}
                </a>
            </li>`
            }
            ulEl.innerHTML = listItems
        }
    </script>
</body>

</html>
