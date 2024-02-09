
var xhr = new XMLHttpRequest();

xhr.open("GET", "https://api.example.com/data", true);


xhr.onload = function () {
  if (xhr.status >= 200 && xhr.status < 300) {
    // La solicitud fue exitosa
    console.log("Respuesta del servidor:", xhr.responseText);
  } else {
    // La solicitud falló
    console.error("Error en la solicitud. Código de estado:", xhr.status);
  }
};

// Configurar la función que se ejecutará en caso de error
xhr.onerror = function () {
  console.error("Hubo un error de red.");
};


xhr.send();

// DESDE LA API DE FECHT
fetch("https://api.example.com/data")
  .then(response => {
    if (!response.ok) {
      throw new Error("Error en la solicitud. Código de estado: " + response.status);
    }
    return response.text();
  })
  .then(data => {
    console.log("Respuesta del servidor:", data);
  })
  .catch(error => {
    console.error("Hubo un error:", error.message);
  });

