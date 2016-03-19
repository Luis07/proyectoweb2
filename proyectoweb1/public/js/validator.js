function validar() {
	debugger;
nombre=document.getElementById('nombre').value;	
apellido=document.getElementById('apellido').value;
email=document.getElementById('email').value;
password=document.getElementById('password').value;
checkterm=document.getElementById('checkterm').cheked;
$campos="true";
limpiarcamposerr();
if (nombre=="")
 {
 	$("#name_err").text("Campo requerido");
 	$campos="false"; 
}
if (apellido=="")
 {
 	$("#apellido_err").text("Campo requerido"); 
 $campos="false"; 
}
 if(email==""){
 	$('#email_err').text("Campo requerido");
$campos="false"; 
 }else
 {
 	$dt=validarEmail(email);
if ($dt=="2") 
{
 	$('#email_err').text("La dirección de email es incorrecta.");
$campos="false"; 
}
 }
 if(password=="")
 {
	$('#pass_err').text("Campo requerido");
$campos="false"; 
 }else
 {
if(password.length<8)
{
	$('#pass_err').text("The password must be have 8 characters");
$campos="false"; 
}
 }
 if($campos=="true"&&!document.getElementById('checkterm').checked){
$('#check_err').text("Debe aceptar los términos de servicio de Webmail");
 }
}
function validarEmail(valor) {
  if (/^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/.test(valor)){
   return "1";
  } else {
   return"2";
  }
}
function limpiarcamposerr(){
$("#name_err").text("");
$("#apellido_err").text("");
$("#email_err").text("");
$("#pass_err").text("");
$("#check_err").text("");
}