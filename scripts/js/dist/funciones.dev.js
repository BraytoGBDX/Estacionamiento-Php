"use strict";

function cargarDiv(div, url) {
  $(div).load(url);
}

function salir() {
  alert("Salir del sistema");
  window.location = "logout.php";
}

;

function registrarCliente() {
  var nombre = $("#nombre").val();
  var direccion = $("#direccion").val();
  var correo = $("#correo").val();
  var telefono = $("#telefono").val();
  $.post("registrarCliente.php", {
    "nombre": nombre,
    "direccion": direccion,
    "correo": correo,
    "telefono": telefono
  }, function (result) {
    alert(result);
    $("#nombre").val("");
    $("#direccion").val("");
    $("#telefono").val("");
    $("#correo").val("");
  });
}

function registrarCajon() {
  var numeroCajon = $("#numeroCajon").val();
  var status = $("#status").val(); // Validar que los campos no estén vacíos

  if (numeroCajon === "" || status === "") {
    alert("Por favor, complete todos los campos");
    return;
  } // Realizar la solicitud AJAX para registrar el cajón


  $.post("registrarCajon.php", {
    "numeroCajon": numeroCajon,
    "status": status
  }, function (result) {
    alert(result); // Limpiar los campos después de registrar

    $("#numeroCajon").val("");
    $("#status").val("");
    cargarDiv($("#result"),"consultarcajon.php")

  });
}

function registrarTarifa() {
  var nombreTarifa = $("#tarifa").val();
  var monto = $("#monto").val(); // Validar que los campos no estén vacíos

  if (nombreTarifa === "" || monto === "") {
    alert("Por favor, complete todos los campos");
    return;
  } // Realizar la solicitud AJAX para registrar la tarifa


  $.post("registrarTarifa.php", {
    "tarifa": nombreTarifa,
    "monto": monto
  }, function (result) {
    alert(result); // Limpiar los campos después de registrar

    $("#tarifa").val("");
    $("#monto").val("");
  });
}

function registrarVehiculo() {
  var matricula = $("#matricula").val();
  var modelo = $("#modelo").val();
  var tipo = $("#tipo").val();
  var cliente = $("#cliente").val(); // Validar que los campos no estén vacíos

  if (matricula === "" || modelo === "" || tipo === "" || cliente === "") {
    alert("Por favor, complete todos los campos");
    return;
  } // Realizar la solicitud AJAX para registrar el vehículo


  $.post("registrarVehiculo.php", {
    "matricula": matricula,
    "modelo": modelo,
    "tipo": tipo,
    "cliente": cliente
  }, function (result) {
    alert(result); // Limpiar los campos después de registrar

    $("#matricula").val("");
    $("#modelo").val("");
    $("#tipo").val("");
  });
}

function registrarEncargado() {
  var nombre = $("#nombre").val();
  var direccion = $("#direccion").val();
  var telefono = $("#telefono").val();
  var correo = $("#correo").val();
  var usuario = $("#usuario").val();
  var contrasena = $("#contrasena").val(); // Validar que los campos no estén vacíos

  if (nombre === "" || direccion === "" || telefono === "" || correo === "" || usuario === "" || contrasena === "") {
    alert("Por favor, complete todos los campos");
    return;
  } // Realizar la solicitud AJAX para registrar el encargado


  $.post("registrarEncargado.php", {
    "nombre": nombre,
    "direccion": direccion,
    "telefono": telefono,
    "correo": correo,
    "usuario": usuario,
    "contrasena": contrasena
  }, function (result) {
    alert(result); // Limpiar los campos después de registrar

    $("#nombre").val("");
    $("#direccion").val("");
    $("#telefono").val("");
    $("#correo").val("");
    $("#usuario").val("");
    $("#contrasena").val("");
  });
}

function registrarRegistro() {
  var fechaIngreso = $("#fechaIngreso").val();
  var horaIngreso = $("#horaIngreso").val();
  var fechaSalida = $("#fechaSalida").val();
  var horaSalida = $("#horaSalida").val();
  var vehiculo = $("#vehiculo").val();
  var cajon = $("#cajon").val();
  var tarifa = $("#tarifa").val(); // Validar que los campos no estén vacíos

  if (fechaIngreso === "" || horaIngreso === "" || fechaSalida === "" || horaSalida === "" || vehiculo === "" || cajon === "" || tarifa === "") {
    alert("Por favor, complete todos los campos");
    return;
  } // Realizar la solicitud AJAX para registrar el registro de horas


  $.post("registrarRegistro.php", {
    "fechaIngreso": fechaIngreso,
    "horaIngreso": horaIngreso,
    "fechaSalida": fechaSalida,
    "horaSalida": horaSalida,
    "vehiculo": vehiculo,
    "cajon": cajon,
    "tarifa": tarifa
  }, function (result) {
    alert(result); // Limpiar los campos después de registrar

    $("#fechaIngreso").val("");
    $("#horaIngreso").val("");
    $("#fechaSalida").val("");
    $("#horaSalida").val("");
    $("#vehiculo").val("");
    $("#cajon").val("");
    $("#tarifa").val("");
  });
}

