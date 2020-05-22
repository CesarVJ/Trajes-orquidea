function correoIncorrecto() {
  let correo_error = document.querySelector("#error-correo");
  correo_error.style.display = "block";
}

function contraseñaIncorrecta() {
  let contraseña_error = document.querySelector("#error-contraseña");
  contraseña_error.style.display = "block";
}

function verificarDatosPerfil() {
  var nombre = document.forms["form-datos"]["nombre"].value;
  var fecha_nacimiento =
    document.forms["form-datos"]["fecha_nacimiento"].value;
  var correo = document.forms["form-datos"]["correo"].value;
  var telefono = document.forms["form-datos"]["telefono"].value;
  var contraseña = document.forms["form-datos"]["contraseña"].value;
  var confirmar_contraseña =
    document.forms["form-datos"]["confirmar_contraseña"].value;

  let registro_error = document.querySelector("#error-perfil");
  let mensajeError = document.querySelector("#mensaje-error-perfil");

  if (
    nombre == "" ||
    fecha_nacimiento == "" ||
    correo == "" ||
    contraseña == "" ||
    confirmar_contraseña == ""
  ) {
    mensajeError.innerHTML =
      "Ocurrió un error al actualizar sus datos, uno o más de sus datos no han sido proporcionados.";
    registro_error.style.display = "block";
    return false;
  }

  if (contraseña.length < 4) {
    mensajeError.innerHTML = "La contraseña debe ser de al menos 4 caracteres.";
    registro_error.style.display = "block";
    return false;
  }

  if (telefono != "") {
    if (telefono.length != 10 || !esNumero(telefono)) {
      mensajeError.innerHTML = "El telefono proporcionado no es valido";
      registro_error.style.display = "block";
      return false;
    }
  }

  if (confirmar_contraseña != contraseña) {
    mensajeError.innerHTML = "Las contraseñas no coinciden.";
    registro_error.style.display = "block";
    return false;
  }
  return true;
}

function esNumero(valor) {
  return /^-{0,1}\d+$/.test(valor);
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

  if (telefono != "") {
    if (telefono.length != 10 || !esNumero(telefono)) {
      mensajeError.innerHTML = "El telefono proporcionado no es valido";
      registro_error.style.display = "block";
      return false;
    }
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

function validarDatosPago() {
  var titular = document.forms["form-pago"]["nombre-titular"].value;
  var tarjeta = document.forms["form-pago"]["numero-tarjeta"].value;
  var expiracion = document.forms["form-pago"]["fecha-expiracion"].value;
  var codigo = document.forms["form-pago"]["codigo-seguridad"].value;

  if (titular == "" || tarjeta == "" || expiracion == "" || codigo == "") {
    let error = document.querySelector("#error-comprar");
    error.style.display = "block";
    let mensaje = document.querySelector("#error-comprar-mensaje");
    mensaje.innerHTML = "Por favor, rellene todos los campos";
    return false;
  }

  if (tarjeta.length != 16 || !esNumero(tarjeta)) {
    let error = document.querySelector("#error-comprar");
    error.style.display = "block";
    let mensaje = document.querySelector("#error-comprar-mensaje");
    mensaje.innerHTML = "Inserte un numero de tarjeta valido";
    return false;
  }

  if (codigo.length != 3 || !esNumero(codigo)) {
    let error = document.querySelector("#error-comprar");
    error.style.display = "block";
    let mensaje = document.querySelector("#error-comprar-mensaje");
    mensaje.innerHTML = "Su codigo de seguridad es incorrecto";
    return false;
  }
  return true;

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