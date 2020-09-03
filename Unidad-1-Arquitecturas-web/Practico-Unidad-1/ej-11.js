document.addEventListener("DOMContentLoaded", () => {
  "use strict";

  const URL = "ej-11.php";
  let print = document.querySelector("#print");

  document.querySelector("#ver5").addEventListener("click", (e) => {
    e.preventDefault();
    traerLista(5);
  });
  document.querySelector("#ver20").addEventListener("click", (e) => {
    e.preventDefault();
    traerLista(20);
  });
  document.querySelector("#ver100").addEventListener("click", (e) => {
    e.preventDefault();
    traerLista(100);
  });
  document.querySelector("#verTodos").addEventListener("click", (e) => {
    e.preventDefault();
    traerLista("all");
  });

  function traerLista(cant) {
    const data = new FormData();
    data.append("cantidad", cant);

    fetch(URL, {
      method: "POST",
      body: data,
    })
      .then((Response) => Response.text())
      .then((html) => {
        print.innerHTML = "<h1>Response: </h1>" + html;
      })
      .catch((err) => console.log(err));
  }
});
