document.addEventListener("DOMContentLoaded", () => {
    "use strict";

    let div_server_response = document.querySelector("#server-response");

    document.querySelectorAll(".boton-link")
        .forEach((tag_a) => tag_a.addEventListener("click", function (e) {
            e.preventDefault();           
            
            let url = new URL(this.href); 
            let params = new URLSearchParams(url.search);            

            console.log("boton-link-click:", this.href,"\n","cantidad? ",params.toString());
 
            fetch("lista-backend.php", {
                method: 'post',
                body: params,
            })
                .then(response => response.text()) // el servidor nos devuelve HTML
                .then(html => {
                    div_server_response.innerHTML = "<h2>Respuesta del servidor</h2>" + html;
                })
                .catch(error => console.log(error));



        }))
}) 