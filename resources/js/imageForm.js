const { default: axios } = require("axios");

const handleImageForm = function(event){
    event.preventDefault();
    const data = new FormData(this);
    for (let pair of data.entries()) {
        console.log(pair[0]+ ', ' + pair[1]);
    }
    axios.post(this.action, data)
        .then((res) => console.log(res))
        .catch((err) => console.log(err));
}

document.querySelector('#user-form-elt').addEventListener("submit", handleImageForm);
