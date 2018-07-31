var datosEntidad = [
  "Secretaria de finanzas y administración",
  "SAT",
  "IMSS",
  "HSBC",
  "INFONAVIT"
];
var datosSol = [
  "Aclaración de situcación fiscal",
  "Acta de notificación",
  "Adeudos de carácter fiscal",
  "Bloqueo de sello",
  "Captura de pantalla",
  "Carta Invitación",
  "Cédula de liquidación",
  "Cédula de liquidación en edad avanzada",
  "Comprobante fiscal",
  "Correspondiente a edad avanzada y vejez",
  "cumplimiento de declaraciones",
  "Cumplimiento de obligaciones",
  "Cumplimiento de obligaciones Fiscales",
  "Inclumplimiento al requerimiento",
  "Infracción",
  "Integración de creditos",
  "Pago IVA",
  "ISR",
  "Mecanismos de Comunicación",
  "Motivo de cobro cuotas IMSS",
  "multa",
  "N/A",
  "Opinión",
  "Pago",
  "Presentación de declaraciones",
  "Presentación de declaraciones anexo",
  "Presentación de declaraciones omitidas",
  "Regularización de adeudos",
  "sello digital",
  "Sobre el funcionamiento de la empresa",
  "Solucitud para regularizar adeudos",
  "Verificar las medidas de seguridad"
];
$( function() {
var datostipodoc = [
  "Acta de embargo",
  "Acta de notificación ",
  "Acta de notificación federal",
  "Acta de requerimiento de pago",
  "Acta de visita de inspección",
  "Acuse de recepción",
  "Acuse de recibo",
  "Acuse de registro",
  "Aviso",
  "Aviso de actualización",
  "Carta",
  "Carta Invitación",
  "Cédula de liquidación",
  "Certificado",
  "Citatorio",
  "Citatorio Federal",
  "Citatorio para aplicación de procedimientos",
  "Citatorio previo",
  "Comprobante",
  "Comprobante de pago del IMSS",
  "Consulta de adeudos",
  "Consulta de referencia",
  "Cumplimiento de obligaciones",
  "Declaraciones",
  "Determinación de omisiones de pago",
  "Diligencia",
  "Estado de cuenta",
  "Ficha de deposito",
  "Ficha de pago",
  "Formato pago de cuotas obrero patronales",
  "Gastos de ejecución",
  "Mandamiento de ejecución",
  "Motivo de cobro cuotas IMSS",
  "Multa",
  "Notificación",
  "Opinión de cumplimiento de obligaciones",
  "Pago",
  "Pago provicional",
  "Requerimiento",
  "Servicio de aclaración"
];

$( "#inputentidad" ).autocomplete({
  source: datosEntidad
});
$( "#inputtipodoc" ).autocomplete({
  source: datostipodoc
});
$( "#inputtiposol" ).autocomplete({
  source: datosSol
});

} );
