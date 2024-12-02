function horarios(e) {
    let idPro = e.target.selectedOptions[0].value;
    fetch("server/peticiones/user.php", {
        method: "POST",
        body: JSON.stringify({
          solicitud: idPro,
        }),
        headers: {
          "Content-Type": "application/json",
        },
      })
        .then((res) => res.json())
        .then(function (json) {
          console.dir(json);
          var elements = document.getElementsByClassName("horarios");
          for (var i = 0; i < elements.length; i++) {
              if(idPro == elements[i].id)
                elements[i].style.display = "inline";
              else
                elements[i].style.display = "none";
            }  
        });
}