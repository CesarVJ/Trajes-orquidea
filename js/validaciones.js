function correoIncorrecto() {
  let correo_error = document.querySelector("#error-correo");
  correo_error.style.display = "block";
}

function contraseñaIncorrecta() {
  let contraseña_error = document.querySelector("#error-contraseña");
  contraseña_error.style.display = "block";
}

function validarRegistro() {
  var nombre = document.forms["form-registro"]["nombre"].value;
  var fecha_nacimiento =
    document.forms["form-registro"]["fecha_nacimiento"].value;
  var correo = document.forms["form-registro"]["correo"].value;
  var telefono = document.forms["form-registro"]["telefono"].value;
  var contraseña = document.forms["form-registro"]["contraseña"].value;
  var confirmar_contraseña =
    document.forms["form-registro"]["confirmar_contraseña"].value;

  let registro_error = document.querySelector("#error-registro");
  let mensajeError = document.querySelector("#mensaje-error-registro");

  if (
    nombre == "" ||
    fecha_nacimiento == "" ||
    correo == "" ||
    contraseña == "" ||
    confirmar_contraseña == ""
  ) {
    mensajeError.innerHTML =
      "Ocurrió un error al registrarse, uno o más de sus datos no han sido proporcionados.";
    registro_error.style.display = "block";
    return false;
  }

  if (contraseña.length < 4) {
    mensajeError.innerHTML = "La contraseña debe ser de al menos 4 caracteres.";
    registro_error.style.display = "block";
    return false;
  }

  if (confirmar_contraseña != contraseña) {
    mensajeError.innerHTML = "Las contraseñas no coinciden.";
    registro_error.style.display = "block";
    return false;
  }
  return true;
}
function verificarCampos(tipo) {
  if (tipo == "agregar") {
    formulario = "form-agregarProducto";
    cajaError = "#error-agregar";
    parrafo = "#error-agregar-mensaje";
  } else if (tipo == "editar") {
    formulario = "form-modificarProducto";
    parrafo = "#error-editar-mensaje";
    cajaError = "#error-editar";
  }

  var titulo = document.forms[formulario]["nombre-producto"].value;
  var descripcion = document.forms[formulario]["descripcion"].value;
  var categoria = document.forms[formulario]["categoria"].value;
  var precio = document.forms[formulario]["precio"].value;

  if (titulo == "" || descripcion == "" || categoria == "" || precio == 0) {
    let error = document.querySelector(cajaError);
    error.style.display = "block";
    let mensaje = document.querySelector(parrafo);
    mensaje.innerHTML = "Por favor, rellene todos los campos";
    return false;
  }
  return true;
}

function verificarProducto(opcion) {
  if (opcion) {
    valor = "Complementos";
    if (valor == opcion.value) {
      document.getElementById("contenedor-talla").style.display = "none";
    } else {
      document.getElementById("contenedor-talla").style.display = "block";
    }
  } else {
    document.getElementById("contenedor-talla").style.display = "block";
  }
}

function verificarInicio() {
  var correo = document.forms["iniciar-sesion"]["correo"].value;
  var contraseña = document.forms["iniciar-sesion"]["contraseña"].value;

  if (correo == "" || contraseña == "") {
    let error = document.querySelector("#error-inicio");
    error.style.display = "block";
    let mensaje = document.querySelector("#mensaje-inicio");
    mensaje.innerHTML = "Por favor, rellene todos los campos";
    return false;
  }
  return true;
}

function mensajeError(texto) {
  let error = document.querySelector("#error-inicio");
  error.style.display = "block";
  let mensaje = document.querySelector("#mensaje-inicio");
  mensaje.innerHTML = texto;
}
/*
var precio = document.getElementById("precio-total");
var value = $(".cantidad").val();
$(".cantidad").on('keyup change click', function () {
  if (this.value !== value) {
    value = this.value;
    precio.innerHTML = cantidad;
    console.log(cantidad);
  }
});*/
