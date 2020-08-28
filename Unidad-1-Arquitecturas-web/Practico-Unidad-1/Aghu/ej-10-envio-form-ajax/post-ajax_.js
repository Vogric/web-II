document.addEventListener("DOMContentLoaded", function () {
    "use strict";

    const SERVER_URL = "validar.php";

    // Precargo elementos del DOM
    let div_server_response = document.querySelector("#server-response");

    document.querySelector("#datos").addEventListener("submit", function (e) {
        e.preventDefault();

        const data = new URLSearchParams(new FormData(this));

        div_server_response.innerHTML="<h2>Enviando al servidor</h2>";

        fetch(SERVER_URL, {
            method: 'post',
            body: data,
        })
            .then(response => response.text()) // el servidor nos devuelve HTML
            .then(html => {
                div_server_response.innerHTML = "<h2>Respuesta del servidor</h2>" + html;
            })
            .catch(error => console.log(error));
    });


})