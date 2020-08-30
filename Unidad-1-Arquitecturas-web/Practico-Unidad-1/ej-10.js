document.addEventListener("DOMContentLoaded", () => {
  "use strict";

  const ENDPOINT = "ej-10.php";
  let printInHTML = document.querySelector("#printInHTML");
  let form = document.querySelector("#form");

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const data = new URLSearchParams(new FormData(form));

    printInHTML.innerHTML = "<h1>Sending to server...</h1>";

    fetch(ENDPOINT, {
      method: "POST",
      body: data,
    })
      .then((Response) => Response.text())
      .then((html) => {
        printInHTML.innerHTML = "<h1>Server response</h1>" + html;
      })
      .catch((err) => console.log(err));
  });
});
