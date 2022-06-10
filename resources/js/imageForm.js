const { default: axios } = require("axios");

const handleImageForm = function(event){
    event.preventDefault();
    const data = new FormData(this);

    axios.post(this.action, data)
        .then(
                (res) => window.location.reload()
            )
    // Affichage des erreurs
        .catch((err) => console.log(err));
}

document.querySelector('#user-form-elt').addEventListener("submit", handleImageForm);
