document.addEventListener("DOMContentLoaded", function () {
  
  //Seleccionamos el formulario.php
  const form = document.querySelector("form");

  //Control del envío del formulario
  form.addEventListener("submit", function (event) {
    event.preventDefault();
    if (validateForm()) {
      form.submit();
    }
  });

  //Método para validar el formulario
  function validateForm() {

    //Obtenemos los campos del formulario
    const nombreInput = document.getElementById("nombre");
    const apellidoInput = document.getElementById("apellido");
    const emailInput = document.getElementById("email");

    //Hacemos una validación del nombre
    if (nombreInput.value.trim() === "") {
      alert("Escribe un nombre válido para el nuevo usuario");
      return false;
    }

    //Hacemos una validación del apellido
    if (apellidoInput.value.trim() === "") {
      alert("Escribe un primer apellido válido para el nuevo usuario");
      return false;
    }

    //Hacemos una validación del mail
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value)) {
      alert("Escribe un correo electrónico válido para el nuevo usuario");
      return false;
    }

    //Dejamos que se envíe el formulario una vez que todos los campos sean válidos
    return true;
  }
});
